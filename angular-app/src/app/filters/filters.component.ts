import { Component, Output, EventEmitter, ViewChild, ElementRef, HostListener } from '@angular/core';

@Component({
  selector: 'app-filters',
  templateUrl: './filters.component.html',
  styleUrls: ['./filters.component.scss']
})
export class FiltersComponent {
  showSearch = false;
  searchText = '';
  @Output() searchChanged = new EventEmitter<string>();
  @Output() advancedFiltersClicked = new EventEmitter<void>();
  private inputDebounceTimer: any;

  applyFilter() {
    this.searchChanged.emit(this.searchText.trim().toLowerCase());
  }

  onAdvancedFiltersClick() {
    this.advancedFiltersClicked.emit();
  }
  
  toggleSearch() {
    this.showSearch = !this.showSearch;
    if (!this.showSearch) {
      this.searchText = '';
    }
  }

  onInputChanged() {
    clearTimeout(this.inputDebounceTimer);
    this.inputDebounceTimer = setTimeout(() => {
      this.applyFilter();
    }, 300);
  }

  onInputBlur() {
    this.applyFilter();
  }
}