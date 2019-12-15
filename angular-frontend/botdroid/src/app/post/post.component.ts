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
    this.metodosServices.listPost().subscribe(
      returned => {
        if (returned.status == 'exitoso') {
          if (returned.data.length > 0) {
            this.listPost = returned.data;
          } else {

          }
        }
      }, error => {

      }
    )
  }
}
