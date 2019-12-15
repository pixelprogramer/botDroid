import {Component, OnInit} from '@angular/core';
import {MetodosService} from "./services/metodos.service";

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css'],
  providers: [MetodosService]
})
export class AppComponent implements OnInit {
  public objUser: any;
  title = 'botdroid';

  constructor(private metodosServices: MetodosService) {

  }

  ngOnInit() {
    this.objUser = JSON.parse(localStorage.getItem('user'));
    console.log(this.objUser)
  }


}
