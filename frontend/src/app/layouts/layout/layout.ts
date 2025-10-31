import { Component } from '@angular/core';
import { RouterOutlet } from "@angular/router";
import { Header } from '../../components/header/header';
import { Footer } from '../../components/footer';

@Component({
  selector: 'ots-layout',
  imports: [RouterOutlet, Header, Footer],
  template: `
    <div class="min-h-screen flex flex-col">
    <ots-header class="h-[10vh]"></ots-header>
      <main class="grow bg-red-100">
        <router-outlet />
      </main>
      <ots-footer class="h-[10vh]"></ots-footer>
    </div>
  `,
  
})
export class Layout {

}
