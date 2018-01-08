<!-- edit.blade.php -->

@extends('guardian')
@section('inner_content')
<div class="container">
  <form method="post" action="{{action('GuardianController@update', $guardian->id)}}">
    <div class="form-group row">
	<a href="{{action('GuardianController@index')}}" class="btn btn-warning">List</a>
    </div>
    <div class="form-group row">
      {{csrf_field()}}
       <input name="_method" type="hidden" value="PATCH">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">User Id</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="user_id" name="user_id" value="{{$guardian->user_id}}">
      </div>
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Person Id</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="person_id" name="person_id" value="{{$guardian->person_id}}">
      </div>
    </div>
	@include('person.edit')
    <div class="form-group row">
      <div class="col-md-2"></div>
      <button type="submit" class="btn btn-primary">Update</button>
    </div>
  </form>
</div>
@endsection
