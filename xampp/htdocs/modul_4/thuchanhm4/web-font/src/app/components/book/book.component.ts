import { Component, OnInit } from '@angular/core';
import { Book } from 'src/app/interface/book';
import { BooksService } from '../../service/books.service'

@Component({
  selector: 'app-book',
  templateUrl: './book.component.html',
  styleUrls: ['./book.component.css']
})
export class BookComponent implements OnInit {
   books?: Book[]=[];
  constructor(private bookService: BooksService) { }

  ngOnInit(): void {
    this.getAllBook();
  }
  getAllBook() {
    this.bookService.getAll().subscribe(result=>{
      this.books = result;
    },
    error=>{
      console.log(error)
    })
  }


}
