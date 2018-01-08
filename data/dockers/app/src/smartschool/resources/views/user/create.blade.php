<!-- edit.blade.php -->

@extends('user')
@section('inner_content')
<div class="container">
  <form method="post" action="{{url('user')}}">
    <div class="form-group row">
        <a href="{{action('UserController@index')}}" class="btn btn-warning">List</a>
    </div>
    <div class="form-group row">
      {{csrf_field()}}
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="name" name="name" value="">
      </div>
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Email</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="email" name="email" value="">
      </div>
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Password</label>
      <div class="col-sm-10">
        <input type="password" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="password" name="password" value="">
      </div>
    </div>
    <div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Remember token</label>
      <div class="col-sm-10">
        <textarea name="remember_token" rows="2" cols="80"></textarea>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-md-2"></div>
	<input type="submit" class="btn btn-primary">	
    </div>
  </form>
</div>
@endsection
