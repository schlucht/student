import { Component } from '@angular/core';
import { UserList } from "../../user/users/user-list";
import { RouterLink, RouterOutlet } from '@angular/router';

@Component({
  selector: 'ots-user',
  imports: [UserList, RouterOutlet, RouterLink],
  template: `
  <div class="h-full text-center bg-green-200">
    <a routerLink="create" class="bg-blue-500 text-white p-2 outline-0 uppercase hover:bg-blue-600">Neuer User</a>  
    <div>
      <ots-user-list></ots-user-list>
    </div>
    <router-outlet />
  </div>
`,

})
export class UserPage {

}
