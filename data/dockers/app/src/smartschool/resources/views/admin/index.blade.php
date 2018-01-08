<!-- index.blade.php -->
@extends('admin')
@section('content')
  <div class="container">
    <div class="form-group row">
        <a href="{{action('AdminController@create')}}" class="btn btn-warning">New</a>
    </div>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Middle Name</th>
        <th>Last Name</th>
        <th>Email</th>
	<th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($students as $student)
      <tr>
        <td>{{$student['id']}}</td>
        <td>{{$student['first_name']}}</td>
        <td>{{$student['middle_name']}}</td>
        <td>{{$student['last_name']}}</td>
        <td>{{$student['contact_email']}}</td>
	<td><a href="{{action('AdminController@edit', $student['id'])}}" class="btn btn-warning">Edit</a></td>
        <td><a href="{{action('AdminController@destroy', $student['id'])}}" class="btn btn-danger">Delete</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
@endsection
