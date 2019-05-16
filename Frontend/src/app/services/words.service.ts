import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';

@Injectable({
  providedIn: 'root'
})
export class WordsService {

  constructor(private http: HttpClient) { }
  
// Brings the words from API

  getWordsApi(words:string){
    return this.http.get(`https://api.datamuse.com/sug?s=${words}`)
  }

}

