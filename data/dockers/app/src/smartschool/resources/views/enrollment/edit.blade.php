<!-- edit.blade.php -->

@extends('enrollment')
@section('inner_content')
<div class="container">
  <form method="post" action="{{action('EnrollmentController@update', $enrollment->id)}}">
    <div class="form-group row">
	<a href="{{action('EnrollmentController@index')}}" class="btn btn-warning">List</a>
    </div>
    <div class="form-group row">
      {{csrf_field()}}
       <input name="_method" type="hidden" value="PATCH">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Standard</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="standard_master_id" name="standard_master_id" value="{{$enrollment->standard_master_id}}"> {{$standard_master->title}}
      </div>
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Student</label>
      <div class="col-sm-10"> 
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="student_id" name="student_id" value="{{$enrollment->student_id}}"> {{$person->first_name}} {{$person->middle_name}} {{$person->last_name}}
      </div>
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Enrollment date</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="enrollment_date" name="enrollment_date" value="{{$enrollment->enrollment_date}}">
      </div>
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Session</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="session" name="session" value="{{$enrollment->session}}">
      </div>
    </div>
    <div class="form-group row">
      <div class="col-md-2"></div>
      <button type="submit" class="btn btn-primary">Update</button>
    </div>
  </form>
</div>
@endsection
