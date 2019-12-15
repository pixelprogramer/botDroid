/*
 * Creado por: Nelson Andres Guerrero Moncada
 * Apodo: PixelProgramer
 * Contacto: kskk961@gmail.com | 3137023937
 *
 */

import {Observable} from "rxjs";

import {Injectable} from "@angular/core";
import {HttpClient, HttpHeaders} from "@angular/common/http";


import {GLOBAL} from "./global";

@Injectable()

export class MetodosService {
  public url: string;

  constructor(public _Http: HttpClient) {
    this.url = GLOBAL.url;
  }

  login(objUsuario): Observable<any> {
    let parametros = 'json=' + JSON.stringify(objUsuario);
    let header = new HttpHeaders().set('Content-Type', 'application/x-www-form-urlencoded');
    return this._Http.post(this.url + 'login', parametros, {headers: header})
  }
  crearPost(objPost): Observable<any> {
    let parametros = 'json=' + JSON.stringify(objPost);
    let header = new HttpHeaders().set('Content-Type', 'application/x-www-form-urlencoded');
    return this._Http.post(this.url + 'crearPost', parametros, {headers: header})
  }
  listPost(): Observable<any> {
    let header = new HttpHeaders().set('Content-Type', 'application/x-www-form-urlencoded');
    return this._Http.post(this.url + 'listPost', null, {headers: header})
  }
}
