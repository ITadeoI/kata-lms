<?php

namespace App;


class Borrow
{
    public $books = null;

    public $totalBooks;

    public function __construct($oldBorrow)
    {
        if ($oldBorrow) {
            $this->books = $oldBorrow->books;
            $this->totalBooks = $oldBorrow->totalBooks;
        }
    }

    public function add($book, $id) {
        $storedbook = [
            'totalbooks' => 0,
            'book' => $book
        ];

        if ($this->books) {
            if (array_key_exists($id, $this->books)) {
                $storedbook = $this->books[$id];
            }
        }

        $storedbook['totalbooks']++;
        $this->books[$id] = $storedbook;
    }
}
