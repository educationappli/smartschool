<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Student;
use App\StandardMaster;

class Enrollment extends Model
{
    //
    protected $fillable = [
        'standard_master_id', 'student_id', 'enrollment_date', 'session'
    ];

    public function student()
    {
	    return $this->hasOne(Student::class, 'id', 'student_id');
    }

    public function standardMaster()
    {
	    return $this->hasOne(StandardMaster::class, 'id', 'standard_master_id');
    }
}
