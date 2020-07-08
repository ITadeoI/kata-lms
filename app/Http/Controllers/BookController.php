<?php

namespace App\Http\Controllers;

use App\Book;
use App\Borrow;
use Illuminate\Support\Facades\Session;
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

        $borrow->add($book, $book->id);

        $request->session()->put('borrow', $borrow);

//        dd($request->session()->get('borrow'));

        Book::where('id', $id)->update(['is_avaliable'=> 0]);

        return redirect()->route('book.index');
    }

    public function getBorrowStorage() {

        if (!Session::has('borrow')) {
            return view('library.borrowstorage', ['book' => null]);
        }

        $oldBorrow = Session::get('borrow');

        $borrow = new Borrow($oldBorrow);

        return view('library.borrowstorage', ['books' => $borrow->books]);
    }
}
