<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Enrollment;
use App\Student;
use App\StandardMaster;
use App\Person;

class EnrollmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	//
	$enrollments = Enrollment::all()->toArray();
	$student_ids = [];
	$standard_master_ids = [];
	foreach ($enrollments as $enrollment) {
		$student_ids[] = $enrollment['student_id'];
		$standard_master_ids[] = $enrollment['standard_master_id'];
	}
	$students = Student::find($student_ids)->keyBy('id')->toArray();
	$standard_masters = StandardMaster::find($standard_master_ids)->keyBy('id')->toArray();
        $person_ids = [];
        foreach ($students as $student) {
                $person_ids[] = $student['person_id'];
        }
        $persons = Person::find($person_ids)->keyBy('id')->toArray();

        return view('enrollment.index', compact('enrollments', 'students', 'standard_masters','persons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
	return view('enrollment.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
	$enrollment = new Enrollment([
          'standard_master_id' => $request->get('standard_master_id'),
          'student_id' => $request->get('student_id'),
          'enrollment_date' => $request->get('enrollment_date'),
          'session' => $request->get('session')
        ]);

        $enrollment->save();
        return redirect('/enrollment');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
	$enrollment = Enrollment::find($id);
	
	$student = $enrollment->student;
	$standard_master = $enrollment->standardMaster;
	$person = $student->person;

        return view('enrollment.edit', compact('enrollment','student','person','standard_master'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
	$enrollment = Enrollment::find($id);
	$enrollment->standard_master_id = $request->get('standard_master_id');
	$enrollment->student_id = $request->get('student_id');
	$enrollment->enrollment_date = $request->get('enrollment_date');
	$enrollment->session = $request->get('session');
	$enrollment->save();
        return redirect('/enrollment');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
	$enrollment = Enrollment::find($id);
	$enrollment->delete();
	return redirect('/enrollment');
    }
}
