<?php

use Illuminate\Database\Seeder;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $book = new \App\Book([
            'title' => 'Head First Design Patterns',
            'image_path' => 'https://i.pinimg.com/474x/71/b0/a0/71b0a0f11c5d7c3b6c5b0892e5bd59c3--software-development-elisabeth.jpg',
            'description' => 'At any given moment, somewhere in the world someone struggles with the same software design problems you have...',
            'return_date' => '',
            'borrow_date' => '',
            'is_avaliable' => 1
        ]);

        $book->save();

        $book = new \App\Book([
            'title' => 'Clean Code',
            'image_path' => 'https://images-na.ssl-images-amazon.com/images/I/41jEbK-jG%2BL._AC_SY400_.jpg',
            'description' => 'Even bad code can function. But if code isn t clean, it can bring a development organization to its knees...',
            'return_date' => '',
            'borrow_date' => '',
            'is_avaliable' => 1
        ]);

        $book->save();

        $book = new \App\Book([
            'title' => 'The Lord of the Rings',
            'image_path' => 'https://m.media-amazon.com/images/I/51bJhsl5VmL.jpg',
            'description' => ' ancient times the Rings of Power were crafted by the Elven-smiths, and Sauron...',
            'return_date' => '',
            'borrow_date' => '',
            'is_avaliable' => 1
        ]);

        $book->save();
    }
}
