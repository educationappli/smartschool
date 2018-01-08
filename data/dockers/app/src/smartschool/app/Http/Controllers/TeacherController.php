<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Teacher;
use App\Person;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
	$teachers = Teacher::all()->toArray();
	$person_ids = [];
        foreach ($teachers as $teacher) {
                $person_ids[] = $teacher['person_id'];
        }
	$persons = Person::find($person_ids)->keyBy('id')->toArray();
	return view('teacher.index', compact('teachers','persons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
	return view('teacher.create');
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
	$teacher = new Teacher([
          'user_id' => $request->get('user_id'),
          'person_id' => $request->get('person_id'),
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

	DB::transaction(function() use ($teacher, $person) {
		$person->save();
		$teacher->save();
	});
        return redirect('/teacher');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        //
	$person = $teacher->person;
	return view('teacher.edit', compact('teacher','person'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teacher)
    {
        //
	$teacher->user_id = $request->get('user_id');
	$teacher->person_id = $request->get('person_id');

	//$person = Person::find($teacher->person_id);
	$person = $teacher->person;
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

	DB::transaction(function() use ($teacher, $person) {
                $person->save();
                $teacher->save();
        });
	return redirect('/teacher');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
        //
	$teacher->delete();

        return redirect('/teacher');
    }
}
