import {Component, OnInit} from '@angular/core';
import {MetodosService} from "../services/metodos.service";
import {Usuario} from "../modelos/usuario";
import {Router} from "@angular/router";

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.css'],
  providers: [MetodosService]
})
export class LoginComponent implements OnInit {
  public objUsuario: Usuario;

  constructor(private metodosService: MetodosService,
              private _Router: Router) {
    this.objUsuario = new Usuario('null', '', '', '');
  }

  ngOnInit() {
  }

  login() {
    this.metodosService.login(this.objUsuario).subscribe(
      returned => {
        if (returned.status == 'exitoso') {
          localStorage.setItem('user', JSON.stringify(returned.data));
          this._Router.navigate(['/crearPost'])
        } else {
          alert('Error al iniciar sesion');
        }
      }, error => {

      }
    )
  }
}
