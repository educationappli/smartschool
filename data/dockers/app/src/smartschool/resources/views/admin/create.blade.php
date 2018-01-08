<!-- edit.blade.php -->

@extends('admin')
@section('content')
<div class="container">
  <form method="post" action="{{url('admin')}}">
    <div class="form-group row">
        <a href="{{action('AdminController@index')}}" class="btn btn-warning">List</a>
    </div>
    <div class="form-group row">
      {{csrf_field()}}
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">User Id</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="user_id" name="user_id" value="">
      </div>
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">First Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="first_name" name="first_name" value="">
      </div>
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Middle Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="middle_name" name="middle_name" value="">
      </div>
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Last Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="last_name" name="last_name" value="">
      </div>
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Birth Date</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="birth_date" name="birth_date" value="">
      </div>
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Parent 1</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="parent1_id" name="parent1_id" value="">
      </div>
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Parent 2</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="parent2_id" name="parent2_id" value="">
      </div>
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Guardian 1</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="guardian1_id" name="guardian1_id" value="">
      </div>
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Guardian 2</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="guardian2_id" name="guardian2_id" value="">
      </div>
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Guardian 3</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="guardian3_id" name="guardian3_id" value="">
      </div>
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Contact phone</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="contact_phone" name="contact_phone" value="">
      </div>
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Contact mobile</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="contact_mobile" name="contact_mobile" value="">
      </div>
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Contact email</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="contact_email" name="contact_email" value="">
      </div>
    </div>
    <div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Address</label>
      <div class="col-sm-10">
        <textarea name="address" rows="8" cols="80"></textarea>
      </div>
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Note</label>
      <div class="col-sm-10">
        <textarea name="note" rows="8" cols="80"></textarea>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-md-2"></div>
	<input type="submit" class="btn btn-primary">	
    </div>
  </form>
</div>
@endsection
