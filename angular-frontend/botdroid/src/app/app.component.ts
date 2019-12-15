import { Component } from '@angular/core';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  public objUser:any;
  title = 'botdroid';

  constructor(){
    this.objUser = localStorage.getItem('user');
  }
}
