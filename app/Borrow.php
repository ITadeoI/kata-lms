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

    public function remove($id) {
        unset($this->books[$id]);
    }

    public function getCount() {
        return count($this->books);
    }
}
