<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
   protected $guarded =[];

   public function requests()
   {
       return $this->belongsTo(Requests::class);
   }


}
