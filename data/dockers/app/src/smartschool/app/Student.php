<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $fillable = ['user_id','person_id','parent1_id','parent2_id','guardian1_id','guardian2_id','guardian3_id'];

    public function person() 
    {
        return $this->hasOne('App\Person', 'id', 'person_id');
    }

    public function user() 
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }

    public function parent1()
    {
        return $this->hasOne('App\Parent', 'id', 'parent1_id');
    }

    public function parent2()
    {
        return $this->hasOne('App\Parent', 'id', 'parent2_id');
    }

    public function guardian1()
    {
        return $this->hasOne('App\Guardian', 'id', 'guardian1_id');
    }

    public function guardian2()
    {
        return $this->hasOne('App\Guardian', 'id', 'guardian2_id');
    }

    public function guardian3()
    {
        return $this->hasOne('App\Guardian', 'id', 'guardian3_id');
    }
}
