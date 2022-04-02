import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { CarComponent } from './car/car.component';
import { ClientComponent } from './client/client.component';



@NgModule({
  declarations: [
    CarComponent,
    ClientComponent
  ],
  imports: [
    CommonModule
  ]
})
export class SharedModule { }
