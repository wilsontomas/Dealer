import { Component, OnInit } from '@angular/core';
import { IEstudiantes } from 'src/app/interfaces/IEstudiantes';

@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.css']
})
export class HomeComponent implements OnInit {
  estudiantes:IEstudiantes[]=[];
  constructor() { }

  ngOnInit(): void {
    this.estudiantes = [
      {
        nombre:"Wilson Tomas",
        foto:"../../../assets/dist/images/wilson.jfif"
      },
      {
        nombre:"Rosario Reyes",
        foto:"../../../assets/dist/images/rosario.jfif"
      },
      {
        nombre:"Omairy De La Cruz",
        foto:"../../../assets/dist/images/omairy.jfif"
      },
      {
        nombre:"Ramon Santos",
        foto:"../../../assets/dist/images/ramon.jpg"
      },
      {
        nombre:"Ronaldo Mateo",
        foto:"../../../assets/dist/images/ronaldo.jpg"
      }
     
    ]
  }

}
