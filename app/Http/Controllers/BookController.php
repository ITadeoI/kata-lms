<?php

namespace App\Http\Controllers;

use App\Book;
use App\Borrow;
use Session;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function getIndex() {

        $books = Book::all()->where('is_avaliable','=',1);

        return view('library.index',['books' => $books]);
    }

    public function getAddToBorrow(Request $request, $id) {
        $book = Book::find($id);
        $oldBorrow = Session::has('borrow') ? Session::get('borrow') : null;
        $borrow = new Borrow($oldBorrow);
        $borrow->add($book, $book->id );

        $request->session()->put('borrow', $borrow);
        dd($request->session()->get('borrow'));
        return redirect()->route('book.index');
    }
}
