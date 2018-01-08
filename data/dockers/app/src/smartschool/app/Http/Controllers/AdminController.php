<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class AdminController extends Controller
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
        
        return view('admin.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
	return view('admin.create');
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
          'first_name' => $request->get('first_name'),
          'middle_name' => $request->get('middle_name'),
          'last_name' => $request->get('last_name'),
          'birth_date' => $request->get('birth_date'),
          'parent1_id' => $request->get('parent1_id'),
          'parent2_id' => $request->get('parent2_id'),
          'guardian1_id' => $request->get('guardian1_id'),
          'guardian2_id' => $request->get('guardian2_id'),
          'guardian3_id' => $request->get('guardian3_id'),
          'contact_phone' => $request->get('contact_phone'),
          'contact_mobile' => $request->get('contact_mobile'),
          'contact_email' => $request->get('contact_email'),
          'address' => $request->get('address'),
          'note' => $request->get('note')
        ]);

        $student->save();
        return redirect('/admin');
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
        
        return view('admin.edit', compact('student','id'));
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
        $student->first_name = $request->get('first_name');
        $student->middle_name = $request->get('middle_name');
        $student->last_name = $request->get('last_name');
	$student->birth_date = $request->get('birth_date');
	$student->parent1_id = $request->get('parent1_id');
	$student->parent2_id = $request->get('parent2_id');
	$student->guardian1_id = $request->get('guardian1_id');
	$student->guardian2_id = $request->get('guardian2_id');
	$student->guardian3_id = $request->get('guardian3_id');
	$student->contact_phone = $request->get('contact_phone');
	$student->contact_mobile = $request->get('contact_mobile');
	$student->contact_email = $request->get('contact_email');
        $student->address = $request->get('address');
        $student->note = $request->get('note');
        $student->save();
        return redirect('/admin');
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

      	return redirect('/admin');
    }
}
