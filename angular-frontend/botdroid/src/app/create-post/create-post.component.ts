import {Component, OnInit} from '@angular/core';
import {Usuario} from "../modelos/usuario";
import {MetodosService} from "../services/metodos.service";
import {Router} from "@angular/router";
import {Post} from "../modelos/post";

@Component({
  selector: 'app-create-post',
  templateUrl: './create-post.component.html',
  styleUrls: ['./create-post.component.css'],
  providers: [MetodosService]
})
export class CreatePostComponent implements OnInit {
  public objPost: Post;
  public usuario: any;

  constructor(private metodosService: MetodosService,
              private _Router: Router) {
    this.objPost = new Post('', '', '', '', '');
  }

  ngOnInit() {
    this.usuario = JSON.parse(localStorage.getItem('user'));
  }

  crearPost() {
    this.objPost.id_usuario = '1';
    this.metodosService.crearPost(this.objPost).subscribe(
      returned => {
        if (returned.status == 'exitoso') {
          var listPost = [];
          if  (localStorage.getItem('listpost') != undefined && localStorage.getItem('listpost') != null)
          {
            listPost =JSON.parse(localStorage.getItem('listpost') );
            listPost.push(returned.data);
            localStorage.setItem('listpost',JSON.stringify(listPost));
            console.log(listPost);
          }else{
            listPost.push(returned.data);
            localStorage.setItem('listpost',JSON.stringify(listPost));
          }
         this._Router.navigate(['post']);
        }
      }, error => {

      }
    )
  }
}
