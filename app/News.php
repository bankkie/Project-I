<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    // Table Name
     protected $fillable=[
    	'id',
    	'title',
    	'detial',
    	'image'
    	

    ];
    public $timestamps=false;
}
