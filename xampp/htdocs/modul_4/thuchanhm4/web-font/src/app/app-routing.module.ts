import { AppComponent } from './app.component';
import { BookComponent } from './components/book/book.component';
import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { BookCreateComponent } from './components/book-create/book-create.component';

const routes: Routes = [{
  path: '',
  component:AppComponent

},{
  path: 'list',
  component:BookComponent

},{
  path: 'create',
  component:BookCreateComponent
}];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
