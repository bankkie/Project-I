<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable=[
    	'id',
    	'user_id',
    	'title',
    	'first_name',
    	'middle_name',
    	'last_name',
    	'email',
    	'country',
    	'phone',
    	'exp_visa',
    	'exp_passport',
    	'remarks',
    	'photo_add',
    	'std_id',
    	'birthday',
    	'study_date',
    	'section',
    	'status',
    	'category',
    	'faculty',
    	'activity_hour',
    	'buddy',
    	'facebook',
    	'line',
    	'hobby',
    	'interests',
    	'else',
    	'else2',
    	'else3',
    	'else4',
    	'else5',
    	];
}
