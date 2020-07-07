<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function getIndex() {

        $books = Book::all();

        return view('library.index',['books' => $books]);
    }
}
