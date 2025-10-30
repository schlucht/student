import { Component, inject } from '@angular/core';
import { User } from '../../services/user';
import { IUser } from '../../models/user.model';
import { IApi } from '../../models/api.model';

@Component({
  selector: 'ots-users',
  imports: [],
  templateUrl: './users.html',
  styleUrl: './users.css',
})
export class Users {
  usersApi = inject(User);
  users: IUser[] = [];
  
 
  
  constructor() {
    this.usersApi.read().subscribe({
      next: (data) => {
        console.log(data as IApi);
        this.users = data.data;
      },
      error: (err) => {
        console.log(err.error);
      },  
    });    
  }
}
