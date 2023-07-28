import { Component, EventEmitter, Output } from '@angular/core';

@Component({
  selector: 'app-advanced-filters',
  templateUrl: './advanced-filters.component.html',
  styleUrls: ['./advanced-filters.component.scss']
})
export class AdvancedFiltersComponent {
  filter_expiration_date = '';
  filter_first_name = '';
  filter_last_name = '';
  filter_subscription = '';
  filter_active = false;
  
  @Output() filterChanged = new EventEmitter<any>();
  @Output() clearFilter = new EventEmitter<void>();

  applyFilters()
  {
    const filters = {
      expiration_date: this.filter_expiration_date,
      first_name: this.filter_first_name,
      last_name: this.filter_last_name,
      subscription: this.filter_subscription,
      active: this.filter_active
    };

    this.filterChanged.emit(filters);
  }

  clearFilters() {
    this.filter_expiration_date = '';
    this.filter_first_name = '';
    this.filter_last_name = '';
    this.filter_subscription = '';
    this.filter_active = false;

    // Emit empty strings or default values back to the parent component
    const filters = {
      expiration_date: this.filter_expiration_date,
      first_name: this.filter_first_name,
      last_name: this.filter_last_name,
      subscription: this.filter_subscription,
      active: this.filter_active
    };

    this.filterChanged.emit(filters);
    this.clearFilter.emit();
  }
}
