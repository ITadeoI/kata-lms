<?php

namespace App\Http\Controllers;

use App\Book;
use App\Borrow;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public const MAX_BOOKS = 2;

    public function getIndex() {

        $books = Book::all()->where('is_avaliable','=',1);

        return view('library.index',['books' => $books]);
    }

    public function getAddToBorrow(Request $request, $id) {

        $book = Book::find($id);

        $oldBorrow = Session::has('borrow') ? Session::get('borrow') : null;

        $borrow = new Borrow($oldBorrow);

        if ($borrow->getCount() == self::MAX_BOOKS) {
            return redirect()->route('book.index');
        }

        $borrow->add($book, $book->id);

        $request->session()->put('borrow', $borrow);

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

    public function removeBookFromBorrowStorage(Request $request, $id) {

        if (!Session::has('borrow')) {
            return view('library.borrowstorage', ['book' => null]);
        }

        $oldBorrow = Session::get('borrow');

        $borrow = new Borrow($oldBorrow);

        $borrow->remove($id);

        $request->session()->put('borrow', $borrow);

        Book::where('id', $id)->update(['is_avaliable'=> 1]);

        return redirect()->route('book.index');
    }
}
