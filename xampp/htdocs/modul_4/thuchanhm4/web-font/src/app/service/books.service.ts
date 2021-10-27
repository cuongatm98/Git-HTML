import { Injectable } from '@angular/core';
import {HttpClient} from '@angular/common/http';
import { Observable } from 'rxjs';
import { Book } from '../interface/book';
const API_URL = 'http://127.0.0.1:8081/'
@Injectable({
  providedIn: 'root'
})
export class BooksService {

  constructor(private httpClient: HttpClient) {}
  getAll():Observable<Book[]> {
    return this.httpClient.get<Book[]>(API_URL+'books')
  }

}
