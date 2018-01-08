<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    //
    protected $fillable = ['user_id','first_name','middle_name','last_name','birth_date','gender','contact_phone','contact_mobile','contact_email','address','note'];
}
