/*
 * Creado por: Nelson Andres Guerrero Moncada
 * Apodo: PixelProgramer
 * Contacto: kskk961@gmail.com | 3137023937
 *
 */

import {ModuleWithProviders} from "@angular/core";
import {Routes, RouterModule} from "@angular/router";
import {AppComponent} from "./app.component";
import {LoginComponent} from "./login/login.component";
import {PostComponent} from "./post/post.component";
import {CreatePostComponent} from "./create-post/create-post.component";


const appRoutes: Routes = [

  {path: '', component: PostComponent, pathMatch: 'full'},
  {path:'login',component:LoginComponent},
  {path:'post',component:PostComponent},
  {path:'crearPost',component:CreatePostComponent},
  {path: '**', component: AppComponent}



];

export const appRoutingProviders: any[] = [];
export const routing: ModuleWithProviders = RouterModule.forRoot(appRoutes);
