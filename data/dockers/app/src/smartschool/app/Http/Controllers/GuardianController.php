<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Guardian;
use App\Person;
use Illuminate\Http\Request;

class GuardianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
	$guardians = Guardian::all()->toArray();
        $person_ids = [];
        foreach ($guardians as $guardian) {
                $person_ids[] = $guardian['person_id'];
        }
        $persons = Person::find($person_ids)->keyBy('id')->toArray();
        return view('guardian.index', compact('guardians','persons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
	return view('guardian.create');
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
	$guardian = new Guardian([
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

        DB::transaction(function() use ($guardian, $person) {
                $person->save();
                $guardian->save();
        });
	return redirect('/guardian');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Guardian  $guardian
     * @return \Illuminate\Http\Response
     */
    public function show(Guardian $guardian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Guardian  $guardian
     * @return \Illuminate\Http\Response
     */
    public function edit(Guardian $guardian)
    {
	//
        $person = $guardian->person;
        return view('guardian.edit', compact('guardian','person'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Guardian  $guardian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Guardian $guardian)
    {
        //
	$guardian->user_id = $request->get('user_id');
        $guardian->person_id = $request->get('person_id');

        //$person = Person::find($guardian->person_id);
        $person = $guardian->person;
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

        DB::transaction(function() use ($guardian, $person) {
                $person->save();
                $guardian->save();
        });
        return redirect('/guardian');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Guardian  $guardian
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guardian $guardian)
    {
        //
	$guardian->delete();

        return redirect('/guardian');
    }
}
