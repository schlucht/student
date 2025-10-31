import { Component, inject } from '@angular/core';
import { UserService } from '../../services/user.service';
import { IUser } from '../../models/user.model';
import { IApi } from '../../models/api.model';
import { RouterLink, RouterOutlet } from "@angular/router";

@Component({
  selector: 'ots-user-list',
  imports: [],
  templateUrl: './user-list.html',
  styleUrl: './user-list.css',
})
export class UserList {
  usersApi = inject(UserService);
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
