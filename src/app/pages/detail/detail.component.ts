import { Component, OnInit } from '@angular/core';
import { ActivatedRoute } from '@angular/router';
import { Car } from 'src/app/interfaces/car';
import { AutoServiceService } from 'src/app/service/auto-service.service';

@Component({
  selector: 'app-detail',
  templateUrl: './detail.component.html',
  styleUrls: ['./detail.component.css']
})
export class DetailComponent implements OnInit {

  constructor(private route: ActivatedRoute,private servicio:AutoServiceService) {}
   id:Number | null=0;
    car:Car={};
  ngOnInit() {
     this.id =  Number(this.route.snapshot.paramMap.get('id'));
    
    this.servicio.getCarById(this.id).subscribe((auto:any)=>{
      this.car = auto;
    })
  }

}
