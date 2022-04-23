import { HttpClient, HttpParams } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Observable } from 'rxjs';
import { Car } from '../interfaces/car';
import {APPSETTINGS} from 'src/app/service/appsettings'
@Injectable({
  providedIn: 'root'
})
export class AutoServiceService {
  controlUrl = APPSETTINGS.servidor;
  constructor(private http:HttpClient) {

   }
getAllCards():Observable<Car[]>{
  return this.http.get<Car[]>(`${this.controlUrl}/`);
}

getCarById(id:Number):Observable<Car[]>{
  let params = new HttpParams().set("envio",id.toString())
  return this.http.get<Car[]>(`${this.controlUrl}/detail.php`,{params});
}
  
}
