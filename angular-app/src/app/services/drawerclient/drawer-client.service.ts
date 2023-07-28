import { Injectable } from '@angular/core';
import { BehaviorSubject } from 'rxjs';

@Injectable({
  providedIn: 'root',
})
export class DrawerClientService {

  private saveClientResponseSubject = new BehaviorSubject<any>(null);

  getSaveClientResponseObservable() {
    return this.saveClientResponseSubject.asObservable();
  }

  setSaveClientResponse(response: any) {
    this.saveClientResponseSubject.next(response);
  }
}
