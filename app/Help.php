<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Help extends Model
{
   
   public function category()
   {
   		return $this->belongsTo('App\Category');
   }
}
