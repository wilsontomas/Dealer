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
  carsFilter:Car[]=[];
  used:string='';
  engine:string='';
  doors:string='';
  seat:string='';
  ngOnInit(): void {
    this.loadCars();
  }
  loadCars(){
    this.carService.getAllCards().subscribe((datos:Car[])=>{
      this.cars=datos;
      this.carsFilter=datos;
      //console.log(datos)
    })
  }

  filter(valor:any,type:string){
    let filtro = valor.target.value;
   // console.log(filtro);
   this.carsFilter=this.cars;
  
   if(this.used !=='1'){
     if(this.used ==='2') this.carsFilter=this.carsFilter.filter(x=>x.CarType==='New vehicle');
     if(this.used ==='3') this.carsFilter=this.carsFilter.filter(x=>x.CarType==='Old vehicle');
   }
   if(this.engine !=='1'){
    if(this.engine ==='2') this.carsFilter=this.carsFilter.filter(x=>x.Gearbox==='Automatic');
    if(this.engine ==='3') this.carsFilter=this.carsFilter.filter(x=>x.Gearbox==='Manual');
  }

  if(this.doors !=='1'){
    if(this.doors ==='2') this.carsFilter=this.carsFilter.filter(x=>x.Doors==='2');
    if(this.doors ==='3') this.carsFilter=this.carsFilter.filter(x=>x.Doors==='4');
  }

  
  if(this.seat !=='1'){
    if(this.seat ==='2') this.carsFilter=this.carsFilter.filter(x=>x.SeatNumber==='2');
    if(this.seat ==='3') this.carsFilter=this.carsFilter.filter(x=>x.SeatNumber==='4');
  }
 }

}
