<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
   protected $guarded = [];

   public function catNum($id){
       $cat_num = Book::where('cat_id', $id)->count();
       return $cat_num;
   }

}


