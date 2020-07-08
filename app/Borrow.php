<?php

namespace App;


class Borrow
{
    public $books = null;


    public function __construct($oldBorrow)
    {
        if ($oldBorrow) {
            $this->books = $oldBorrow->books;
        }
    }

    public function add($book, $id) {
        $this->books[$id] = $book;
    }
}
