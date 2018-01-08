<!-- edit.blade.php -->

@extends('user')
@section('inner_content')
<div class="container">
  <form method="post" action="{{action('UserController@update', $id)}}">
    <div class="form-group row">
	<a href="{{action('UserController@index')}}" class="btn btn-warning">List</a>
    </div>
    <div class="form-group row">
      {{csrf_field()}}
       <input name="_method" type="hidden" value="PATCH">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="name" name="name" value="{{$user->name}}">
      </div>
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Email</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="email" name="email" value="{{$user->email}}">
      </div>
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Password</label>
      <div class="col-sm-10">
        <input type="password" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="password" name="password" value="{{$user->password}}">
      </div>
    </div>
    <div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Remember Token</label>
      <div class="col-sm-10">
        <textarea name="remember_token" rows="2" cols="80">{{$user->remember_token}}</textarea>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-md-2"></div>
      <button type="submit" class="btn btn-primary">Update</button>
    </div>
  </form>
</div>
@endsection
