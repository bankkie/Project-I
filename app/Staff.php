<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Staff extends Model
{
    public function getFullname (){
        $fullname = $this->first_name.' '.$this->middle_name.' '.$this->last_name;
        return $fullname;
    }
}