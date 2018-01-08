<!-- edit.blade.php -->

@extends('guardian')
@section('inner_content')
<div class="container">
  <form method="post" action="{{url('guardian')}}">
    <div class="form-group row">
        <a href="{{action('GuardianController@index')}}" class="btn btn-warning">List</a>
    </div>
    <div class="form-group row">
      {{csrf_field()}}
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">User Id</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="user_id" name="user_id" value="">
      </div>
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Person Id</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="person_id" name="person_id" value="">
      </div>
    </div>
        @include('person.create')
    <div class="form-group row">
      <div class="col-md-2"></div>
	<input type="submit" class="btn btn-primary">	
    </div>
  </form>
</div>
@endsection
