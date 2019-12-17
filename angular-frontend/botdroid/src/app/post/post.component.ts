import { Component, OnInit } from '@angular/core';
import {MetodosService} from "../services/metodos.service";

@Component({
  selector: 'app-post',
  templateUrl: './post.component.html',
  styleUrls: ['./post.component.css']
})
export class PostComponent implements OnInit {
  public listPost: Array<any>;
  constructor(private metodosServices: MetodosService) {
    this.listPost = [];
    this.listarPost();
  }

  ngOnInit() {
  }
  listarPost() {
    if  (localStorage.getItem('listpost') != undefined && localStorage.getItem('listpost') != null)
    {
      this.listPost =JSON.parse(localStorage.getItem('listpost') );
    }
  }
}
