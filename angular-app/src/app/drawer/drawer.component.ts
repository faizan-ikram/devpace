import { Component, Input, Output, EventEmitter } from '@angular/core';
// import { ReactiveFormsModule, FormBuilder, FormControl, FormGroup, Validators } from '@angular/forms';
import { NgbDateStruct } from '@ng-bootstrap/ng-bootstrap';
import { ClientService } from '../services/client/client.service';
import { DrawerClientService } from '../services/drawerclient/drawer-client.service';

@Component({
  selector: 'app-drawer',
  templateUrl: './drawer.component.html',
  styleUrls: ['./drawer.component.scss']
})
export class DrawerComponent {
  first_name: string = '';
  last_name: string = '';
  date_of_birth: NgbDateStruct | null = null;;
  gender: string = '';
  email: string = '';
  address: string = '';
  phone: string = '';
  phoneNumbers: string[] = [];
  expiration_date: NgbDateStruct | null = null;;
  subscription: string = '';
  active: boolean = false;
  saveTriggered: boolean = false;
  @Input() isOpen = false;
  @Output() drawerClosed = new EventEmitter<void>();

  constructor(private clientService: ClientService, private drawerClientService: DrawerClientService) { }

  closeDrawer() {
    this.drawerClosed.emit();
  }

  addPhoneNumber() {
    if (this.phone.trim() !== '') {
      this.phoneNumbers.push(this.phone);
      this.phone = '';
    }
  }

  removePhoneNumber(index: number) {
    this.phoneNumbers.splice(index, 1);
  }


  saveClient() {
    if (!this.first_name || !this.last_name || !this.gender ||
      (this.subscription && !this.expiration_date)) {
        this.saveTriggered = true;
        
        return;
    } else {
      this.saveTriggered = false;
      const client = {
        firstName: this.first_name,
        lastName: this.last_name,
        gender: this.gender,
        dateOfBirth: this.date_of_birth,
        email: this.email,
        address: this.address,
        phone: this.phoneNumbers,
        subscription: this.subscription,
        expiration_date: this.expiration_date,
        active: this.active
      };

      this.clientService.saveClient(client).subscribe(
        (response) => {
          this.drawerClientService.setSaveClientResponse(response);
          console.log(response);
          this.first_name= '';
          this.last_name= '';
          this.gender= '';
          this.date_of_birth= null;
          this.email= '';
          this.address= '';
          this.phone = '';
          this.phoneNumbers = [];
          this.subscription= '';
          this.expiration_date = null;
          this.active= false;
        },
        (error) => {
          console.error(error);
        }
      );
    }
  }

}
