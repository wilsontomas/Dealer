import { Component, OnInit } from '@angular/core';
import { Car } from 'src/app/interfaces/car';
import { AutoServiceService } from 'src/app/service/auto-service.service';

@Component({
  selector: 'app-shop',
  templateUrl: './shop.component.html',
  styleUrls: ['./shop.component.css']
})
export class ShopComponent implements OnInit {

  constructor(private carService:AutoServiceService) { }
  cars:Car[]=[];
  ngOnInit(): void {
    //this.loadCars();
  }
  loadCars(){
    this.carService.getAllCards().subscribe((datos:any)=>{
      this.cars=datos;
    })
  }

}
