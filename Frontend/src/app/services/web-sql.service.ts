import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable, BehaviorSubject } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class WebSqlService {
  wordsForReport:Array<object>[];
  db = (<any>window).openDatabase('wordsDB', '0.1', 'wordsDB', 65536);

  constructor() { }

// Creates the tables at the entrance to the app

  createTable(word) {
    this.db.transaction(
      function (transaction) {
        for (let i = 0; i < word.length; i++) {
          transaction.executeSql('DROP TABLE word', null,  ()=> { console.log('Drop Failed'); }, () =>{ console.log('Drop Succeeded'); });

          transaction.executeSql(
            `CREATE TABLE IF NOT EXISTS ${word[i]}` +
            ' (id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT, ' +
            ' word TEXT NOT NULL, score INTEGER NOT NULL);'
          );
        }
      }
    );
  }

// Puts the results into tables when the user requests

  insertToWebSQL(words) {
    this.db.transaction(
      function (transaction) {
        for (let i = 0; i < words.length; i++) {
          transaction.executeSql(
            `INSERT INTO ${words[0].word} (word,score) VALUES (?,?);`,
            [words[i].word, words[i].score],
            null
          );
        }
      }
    );
  }

// Takes and organizes the results from the tables whenever the user requests

  SelectFromWebSql(words) {
    this.wordsForReport = [];
    for (let i = 0; i < words.length; i++) {
      let objToPush = [];
      this.db.transaction(
        function (transaction) {
          transaction.executeSql(
            `SELECT *  FROM ${words[i]};`,
            [],
            (transaction, result) => {
              for (let j = 0; j < result.rows.length; j++) {
                let row = result.rows.item(j);
                objToPush[j] = { word: row.word, score: row.score }
              }
            }
            );
          }
          );
          this.wordsForReport.push(objToPush)
    }
  }
  returnAllWord() {
    return this.wordsForReport;
  }
}
