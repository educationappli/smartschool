<!-- edit.blade.php -->

@extends('student')
@section('inner_content')
<div class="container">
  <form method="post" action="{{action('StudentController@update', $student->id)}}">
    <div class="form-group row">
	<a href="{{action('StudentController@index')}}" class="btn btn-warning">List</a>
    </div>
    <div class="form-group row">
      {{csrf_field()}}
       <input name="_method" type="hidden" value="PATCH">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">User Id</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="User id" name="user_id" value="{{$student->user_id}}">
      </div>
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Person Id</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Person id" name="person_id" value="{{$student->person_id}}">
      </div>
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Parent 1</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Parent1 id" name="parent1_id" value="{{$student->parent1_id}}">
      </div>
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Parent 2</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Parent2 id" name="parent2_id" value="{{$student->parent2_id}}">
      </div>
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Guardian 1</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Guardian1 id" name="guardian1_id" value="{{$student->guardian1_id}}">
      </div>
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Guardian 2</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Guardian2 id" name="guardian2_id" value="{{$student->guardian2_id}}">
      </div>
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Guardian 3</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Guardian3 id" name="guardian3_id" value="{{$student->guardian3_id}}">
      </div>
    </div>
	@include('person.edit')
    <div class="form-group row">
      <div class="col-md-2"></div>
	{{ Form::submit('Update', ['class' => 'btn btn-primary']) }}
    </div>
  </form>
</div>
@endsection
