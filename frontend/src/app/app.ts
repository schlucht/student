import { Component, inject, signal } from '@angular/core';
import { RouterLink, RouterOutlet } from '@angular/router';
import { User } from './services/user';
import { Users } from './user/users/users';
import { Header } from './components/header/header';
import { Footer } from './components/footer';

@Component({
  selector: 'ots-root',
  imports: [RouterOutlet, Header, Footer, RouterLink],
  templateUrl: './app.html',
  styleUrl: './app.css'
})
export class App {
  protected readonly title = signal('frontend');
}
