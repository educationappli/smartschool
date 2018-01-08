<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    //
    protected $fillable = ['user_id','person_id'];

    public function person() 
    {
	return $this->hasOne('App\Person', 'id', 'person_id');
    }

    public function user() 
    {
	return $this->hasOne('App\User', 'id', 'user_id');
    }
}
