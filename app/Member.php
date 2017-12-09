<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable=[
    	'user_id',
    	'title',
    	'first_name',
    	'middle_name',
    	'last_name',
    	'Status',
    	'country',
    	'else',
    	'else2',
    	'else3',
    	'else4',
    	'else5',

    ];
    public $timestamps=false;
}
