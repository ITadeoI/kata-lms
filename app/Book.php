<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['title','image_path','description','return_date', 'borrow_date', 'is_avaliable'];

}