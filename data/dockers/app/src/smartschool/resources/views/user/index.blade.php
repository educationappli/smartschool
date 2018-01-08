<!-- index.blade.php -->
@extends('user')
@section('inner_content')
  <div class="container">
    <div class="form-group row">
        <a href="{{action('UserController@create')}}" class="btn btn-warning">New</a>
    </div>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
	<th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($users as $user)
      <tr>
        <td>{{$user['id']}}</td>
        <td>{{$user['name']}}</td>
        <td>{{$user['email']}}</td>
	<td><a href="{{action('UserController@edit', $user['id'])}}" class="btn btn-warning">Edit</a></td>
        <td><a href="{{action('UserController@destroy', $user['id'])}}" class="btn btn-danger">Delete</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
@endsection
