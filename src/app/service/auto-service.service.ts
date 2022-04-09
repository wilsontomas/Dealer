import { HttpClient } from '@angular/common/http';
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
  return this.http.get<Car[]>("");
}

getCarById(id:Number):Observable<Car>{
  return this.http.get<Car>("");
}
  
}
