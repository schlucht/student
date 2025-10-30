import { HttpClient } from '@angular/common/http';
import { inject, Injectable, OnInit } from '@angular/core';
import { API } from '../app.config';
import { IApi } from '../models/api.model';

@Injectable({
  providedIn: 'root'
})
export class User {
  http: HttpClient = inject(HttpClient);
  constructor() { }

  read() {    
    return this.http.get<IApi>(API('user/getUsers'));
  }

  user() {
    return this.http.get<string>(API('user/UserFromID'));
  }

  create() {
      return this.http.post<string>(API('user/createUser'),
        {
          firstname: 'Max',
          lastname: 'Mustermann',
          email: 'muster@max.com',
          password: '123'
        }
    );
  }
}
