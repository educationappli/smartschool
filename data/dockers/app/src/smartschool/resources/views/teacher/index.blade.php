<!-- index.blade.php -->
@extends('teacher')
@section('inner_content')
  <div class="container">
    <div class="form-group row">
        <a href="{{action('TeacherController@create')}}" class="btn btn-warning">New</a>
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
      @foreach($teachers as $teacher)
      <tr>
        <td>{{$teacher['id']}}</td>
        <td>{{$persons[$teacher['person_id']]['first_name']}}</td>
        <td>{{$persons[$teacher['person_id']]['middle_name']}}</td>
        <td>{{$persons[$teacher['person_id']]['last_name']}}</td>
        <td>{{$persons[$teacher['person_id']]['contact_email']}}</td>
	<td><a href="{{action('TeacherController@edit', $teacher['id'])}}" class="btn btn-warning">Edit</a></td>
        <td><a href="{{action('TeacherController@destroy', $teacher['id'])}}" class="btn btn-danger">Delete</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
@endsection
