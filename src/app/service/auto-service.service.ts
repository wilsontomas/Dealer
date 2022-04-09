import { HttpClient, HttpParams } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Observable } from 'rxjs';
import { Car } from '../interfaces/car';

@Injectable({
  providedIn: 'root'
})
export class AutoServiceService {

  constructor(private http:HttpClient) {

   }
getAllCards():Observable<Car[]>{
  return this.http.get<Car[]>("http://localhost:8080/api/");
}

getCarById(id:Number):Observable<Car[]>{
  let params = new HttpParams().set("envio",id.toString())
  return this.http.get<Car[]>("http://localhost:8080/api/detail.php",{params});
}
  
}
