import { Routes } from '@angular/router';
import { HomePage } from './pages/home/home.page';
import { NotFound } from './pages/not-found/not-found';
import { UserPage } from './pages/user/user.page';
import { CreateUser } from './user/create/create-user';

export const routes: Routes = [
    {path: "home", component: HomePage},
    {path: "", redirectTo: "home", pathMatch: "full"},    
    {path: "user", component: UserPage, children: [
        {path: "create", component: CreateUser}
    ]},
    {path: "**", component: NotFound}
];
