import { JsonPipe } from '@angular/common';
import { Component, inject } from '@angular/core';
import { FormBuilder, FormGroup, FormsModule, ReactiveFormsModule, Validators } from '@angular/forms';

import { User } from '../../services/user';
import { IUser } from '../../models/user.model';


@Component({
  selector: 'ots-create',
  imports: [ReactiveFormsModule, JsonPipe],
  templateUrl: './create.html',
  styleUrl: './create.css',
})
export class Create {
  createUser: FormGroup;
  result?: any;
  userApi = inject(User);
  
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
