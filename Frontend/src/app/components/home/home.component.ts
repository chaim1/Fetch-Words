import { Component, OnInit } from '@angular/core';
import { WordsService } from 'src/app/services/words.service';
import { WebSqlService } from 'src/app/services/web-sql.service';

@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.css'],
  styles: [`
    ngb-progressbar {
      margin-top: 5rem;
    }
  `]
})
export class HomeComponent implements OnInit {
  constructor(private wordsService: WordsService, private webSqlServise: WebSqlService) {
    // Creates the tables at the entrance to the app
    this.webSqlServise.createTable(this.wordsToFetch);
  }
  wordsToFetch: string[] = ['affiliate', 'marketing', 'influencer'];
  progress: number;
  numProgress;
  Completed: boolean = false;
  showWordsResult:object;
  loader: boolean = false;
  ngOnInit() {
    this.numProgress = this.progress;
  }
  FetchWords() {
    this.progress = 0;
    for (let index = 0; index < this.wordsToFetch.length; index++) {
      this.wordsService.getWordsApi(this.wordsToFetch[index]).subscribe(result => {
        // This is for Progressbar
        result ? this.progress += 33.333333 : '';
        this.progress == 99.999999 ? this.Completed = true : '';
        this.webSqlServise.insertToWebSQL(result);
        this.numProgress = this.progress.toFixed(0) + '%'
      })
    }
  }

  ShowReport() {
    this.loader = true;
    // Asking the tables from the database
    this.webSqlServise.SelectFromWebSql(this.wordsToFetch);
    let interval =  setInterval(() => {
      this.showWordsResult?clearInterval(interval):'';
      // Asking for the result of data from the Service
      this.showWordsResult = this.webSqlServise.returnAllWord()
    }, 1000)
  }

}

