import { TestBed } from '@angular/core/testing';

import { DrawerClientService } from './drawer-client.service';

describe('DrawerClientService', () => {
  let service: DrawerClientService;

  beforeEach(() => {
    TestBed.configureTestingModule({});
    service = TestBed.inject(DrawerClientService);
  });

  it('should be created', () => {
    expect(service).toBeTruthy();
  });
});
