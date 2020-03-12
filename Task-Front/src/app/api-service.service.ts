import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';

@Injectable({
  providedIn: 'root'
})
export class ApiServiceService {

  baseUrl = "http://127.0.0.1:8000/api/";

  constructor(private http: HttpClient) {}
  
  // Fetch Data

  getData(url, fake) {
    const httpOptions = {
      headers: new HttpHeaders ({
        'Content-Type': 'application/json'
      })
    };
    return this.http.post(this.baseUrl + 'url' + '/', fake, httpOptions);
  }
}
