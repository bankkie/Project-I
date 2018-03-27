<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

   public function helps()
   {
   		return $this->hasMany('App\Help');
   }
}
