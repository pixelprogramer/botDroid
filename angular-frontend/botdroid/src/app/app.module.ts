import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppComponent } from './app.component';
import {appRoutingProviders, routing} from "./app.routing";
import { CreatePostComponent } from './create-post/create-post.component';
import {LoginComponent} from "./login/login.component";
import { PostComponent } from './post/post.component';

@NgModule({
  declarations: [
    AppComponent,
    CreatePostComponent,
    LoginComponent,
    PostComponent
  ],
  imports: [
    BrowserModule,
    routing
  ],
  providers: [appRoutingProviders],
  bootstrap: [AppComponent]
})
export class AppModule { }
