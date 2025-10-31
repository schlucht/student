import { JsonPipe } from '@angular/common';
import { Component, inject } from '@angular/core';
import { FormBuilder, FormGroup, FormsModule, ReactiveFormsModule, Validators } from '@angular/forms';

import { UserService } from '../../services/user.service';
import { IUser } from '../../models/user.model';


@Component({
  selector: 'ots-create-user',
  imports: [ReactiveFormsModule, JsonPipe],
  templateUrl: './create-user.html',
  styleUrl: './create-user.css',
})
export class CreateUser {
  createUser: FormGroup;
  result?: any;
  userApi = inject(UserService);
  
  constructor(private fb: FormBuilder) {
    this.createUser = this.fb.group({
      firstname: ['', Validators.required],
      lastname: ['', Validators.required],
      email: ['', Validators.required],
      password: ['', Validators.required],
    });
  }

  onSubmit() {
    if(this.createUser.invalid) {
      return;
    }
    const createUser = this.createUser.value as IUser;    
    
    
    this.userApi.create(createUser).subscribe(res => {        
      console.log(res)
      this.result = res;
    });
    

    }
  
}
