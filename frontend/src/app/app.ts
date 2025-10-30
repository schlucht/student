import { Component, inject, signal } from '@angular/core';
import { RouterOutlet } from '@angular/router';
import { User } from './services/user';
import { Users } from './user/users/users';

@Component({
  selector: 'ots-root',
  imports: [RouterOutlet, Users],
  templateUrl: './app.html',
  styleUrl: './app.css'
})
export class App {
  protected readonly title = signal('frontend');
}
