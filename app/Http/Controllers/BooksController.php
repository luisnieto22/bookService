<?php

namespace App\Http\Controllers;
use App\Book;
class BooksController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public function index(){
    $books = Book::all();
    return $books;
    }
}
