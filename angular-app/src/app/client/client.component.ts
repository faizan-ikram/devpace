import { Component, OnInit, ViewChild, Inject, LOCALE_ID } from '@angular/core';
import { formatDate } from '@angular/common';
import { Sort } from '@angular/material/sort';
import { MatTableDataSource } from '@angular/material/table';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';
import { MatSort } from '@angular/material/sort';
import { DrawerClientService } from '../services/drawerclient/drawer-client.service';
import { NgbDateStruct } from '@ng-bootstrap/ng-bootstrap';

export interface ClientData {
  first_name: string;
  last_name: string;
  email: string;
  active: number;
  subscription: string;
  expiration_date: string;
  current_balance: number;
}

@Component({
  selector: 'app-client',
  templateUrl: './client.component.html',
  styleUrls: ['./client.component.scss']
})

export class ClientComponent implements OnInit {
  clients: ClientData[] = [];
  sortedClients!: MatTableDataSource<ClientData>;
  displayedColumns: string[] = ['first_name','last_name', 'email', 'active', 'subscription', 'expiration_date', 'current_balance'];
  @ViewChild(MatSort) sort!: MatSort;
  isDrawerOpen = false;
  showAdvancedFilters = false; 

  firstNameFilter = '';
  LastNameFilter = '';
  expirationDateFilter : NgbDateStruct | null = null;
  subscriptionFilter = '';
  activeFilter = 0;

  constructor(private http: HttpClient, private drawerClientService: DrawerClientService, @Inject(LOCALE_ID) private locale: string) {}

  ngOnInit() {
    this.sortedClients = new MatTableDataSource<ClientData>([]);

    this.drawerClientService.getSaveClientResponseObservable().subscribe((response) => {
      if (response) {
        this.fetchClients().subscribe(
          clients => {
            this.clients = clients;
            this.sortedClients.data = this.clients;
            this.sortedClients.sort = this.sort;
          },
          error => {
            console.log(error);
          }
        );
      }
    });

    this.fetchClients().subscribe(
      clients => {
        this.clients = clients;
        this.sortedClients.data = this.clients;
        this.sortedClients.sort = this.sort;
      },
      error => {
        console.log(error);
      }
    );
  }

  sortData(event: Sort) {
    const data = this.sortedClients.data.slice();
    if (!event.active || event.direction === '') {
      this.sortedClients.data = data;
      return;
    }
    this.sortedClients.data = data.sort((a, b) => {
      const isAsc = event.direction === 'asc';
      switch (event.active) {
        case 'first_name':
          return this.compare(a.first_name, b.first_name, isAsc);
        case 'last_name':
          return this.compare(a.last_name, b.last_name, isAsc);
        case 'email':
          return this.compare(a.email, b.email, isAsc);
        case 'active':
          return this.compare(a.active, b.active, isAsc);
        case 'subscription':
          return this.compare(a.subscription, b.subscription, isAsc);
        case 'expiration_date':
          return this.compare(a.expiration_date, b.expiration_date, isAsc);
        case 'current_balance':
          return this.compare(a.current_balance, b.current_balance, isAsc);
        default:
          return 0;
      }
    });
  }
  
  compare(a: number | string, b: number | string, isAsc: boolean) {
    return (a < b ? -1 : 1) * (isAsc ? 1 : -1);
  }

  fetchClients(): Observable<ClientData[]> {
    const apiUrl = 'http://localhost:8000/api/clients';
    return this.http.get<ClientData[]>(apiUrl);
  }

  applyFilter(searchText: string) {
    const filterValue = searchText.trim().toLowerCase();
    this.sortedClients.filter = filterValue;
  }

  toggleDrawer() {
    this.isDrawerOpen = !this.isDrawerOpen;
  }

  closeDrawer() {
    this.isDrawerOpen = false;
  }

  capitalizeWords(input: string): string {
    return input.replace(/\b\w/g, function(match) {
      return match.toUpperCase();
    });
  }

  toggleAdvancedFilters() {
    this.showAdvancedFilters = !this.showAdvancedFilters;
  }

  onFilterChanged(filters: any) {
    this.firstNameFilter = filters.first_name;
    this.LastNameFilter = filters.last_name;
    this.expirationDateFilter = filters.expiration_date;
    this.subscriptionFilter = filters.subscription;
    this.activeFilter = filters.active ? 1 : 0;
    this.applyFilters();
  }

  onClearFilter() {
    this.firstNameFilter = '';
    this.LastNameFilter = '';
    this.expirationDateFilter = null;
    this.subscriptionFilter = '';
    this.activeFilter = 0;

    this.sortedClients.data = this.clients;
  }

    private applyFilters() {
      this.sortedClients.data = this.clients.filter(client => {
        const firstNameMatch = !this.firstNameFilter || client.first_name.toLowerCase().includes(this.firstNameFilter.toLowerCase());
        const lastNameMatch = !this.LastNameFilter || client.last_name.toLowerCase().includes(this.LastNameFilter.toLowerCase());
        const expDateMatch = !this.expirationDateFilter || this.isDateMatch(client.expiration_date);
        const subscriptionMatch = !this.subscriptionFilter || client.subscription?.toLowerCase().includes(this.subscriptionFilter.toLowerCase());
        const activeMatch = this.activeFilter === 0 || client.active === (this.activeFilter ? 1 : 0);
        return firstNameMatch && lastNameMatch && expDateMatch && subscriptionMatch && activeMatch;
      });
    }

  private isDateMatch(dateStr: string): boolean {
    const formattedDate = formatDate(dateStr, 'yyyy-MM-dd', this.locale);
    const dateParts = formattedDate.split('-');
    const ngbDate: NgbDateStruct = {
      year: Number(dateParts[0]),
      month: Number(dateParts[1]),
      day: Number(dateParts[2]),
    };

    return this.expirationDateFilter?.year === ngbDate.year &&
           this.expirationDateFilter?.month === ngbDate.month &&
           this.expirationDateFilter?.day === ngbDate.day;
  }
}
