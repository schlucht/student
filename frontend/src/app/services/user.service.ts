import { HttpClient } from '@angular/common/http';
import { inject, Injectable, OnInit } from '@angular/core';
import { API } from '../app.config';
import { IApi } from '../models/api.model';
import { IUser } from '../models/user.model';

@Injectable({
  providedIn: 'root'
})
export class UserService {
  http: HttpClient = inject(HttpClient);
  constructor() { }

  read() {    
    return this.http.get<IApi>(API('user/getUsers'));
  }

  user() {
    return this.http.get<string>(API('user/UserFromID'));
  }

  create(usr: IUser) {
    
    return this.http.post<IApi>(API('user/createUser'), usr  );
    
    
  }
}
