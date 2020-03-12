import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { CreateComponent } from './create/create.component';
import { EditComponent } from './edit/edit.component';
import { ViewComponent } from './view/view.component';


export const routes: Routes = [
  { path: 'create', component: CreateComponent },
  { path: 'edit', component: EditComponent },
  { path: 'view', component: ViewComponent }
];



