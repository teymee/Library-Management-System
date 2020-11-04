<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requests extends Model
{
    protected $guarded =[];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function findBook($book_name){
        $book = Book::where('name', $book_name)->first();
        return $book;
    }
    public function books()
    {
        return $this->hasOne(Book::class);
    }
}
