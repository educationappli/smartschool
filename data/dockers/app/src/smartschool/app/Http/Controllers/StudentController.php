<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Student;
use App\Person;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
	$students = Student::all()->toArray();
	$person_ids = [];
        foreach ($students as $student) {
                $person_ids[] = $student['person_id'];
        }
        $persons = Person::find($person_ids)->keyBy('id')->toArray();
        
        return view('student.index', compact('students','persons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
	return view('student.create');
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
 	$student = new Student([
          'user_id' => $request->get('user_id'),
          'person_id' => $request->get('person_id'),
          'parent1_id' => $request->get('parent1_id'),
          'parent2_id' => $request->get('parent2_id'),
          'guardian1_id' => $request->get('guardian1_id'),
          'guardian2_id' => $request->get('guardian2_id'),
          'guardian3_id' => $request->get('guardian3_id'),
	]);
 	$person = new Person([
          'user_id' => $request->get('user_id'),
          'first_name' => $request->get('first_name'),
          'middle_name' => $request->get('middle_name'),
          'last_name' => $request->get('last_name'),
          'birth_date' => $request->get('birth_date'),
          'gender' => $request->get('gender'),
          'contact_phone' => $request->get('contact_phone'),
          'contact_mobile' => $request->get('contact_mobile'),
          'contact_email' => $request->get('contact_email'),
          'address' => $request->get('address'),
          'note' => $request->get('note')
        ]);
        DB::transaction(function() use ($student, $person) {
		$student->save();
		$person->save();
	});
        return redirect('/student');
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
	$student = Student::find($id);
	$person = $student->person;
        
        return view('student.edit', compact('student','person'));
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
	$student = Student::find($id);
	$student->user_id = $request->get('user_id');
	$student->person_id = $request->get('person_id');
	$student->parent1_id = $request->get('parent1_id');
	$student->parent2_id = $request->get('parent2_id');
	$student->guardian1_id = $request->get('guardian1_id');
	$student->guardian2_id = $request->get('guardian2_id');
	$student->guardian3_id = $request->get('guardian3_id');

	$person = $student->person;
	$person->user_id = $request->get('user_id');
        $person->first_name = $request->get('first_name');
        $person->middle_name = $request->get('middle_name');
        $person->last_name = $request->get('last_name');
	$person->birth_date = $request->get('birth_date');
	$person->gender = $request->get('gender');
	$person->contact_phone = $request->get('contact_phone');
	$person->contact_mobile = $request->get('contact_mobile');
	$person->contact_email = $request->get('contact_email');
        $person->address = $request->get('address');
        $person->note = $request->get('note');
	DB::transaction(function() use ($student, $person) {
                $person->save();
		$student->save();
        });
        return redirect('/student');
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
	$student = Student::find($id);
      	$student->delete();

      	return redirect('/student');
    }
}
