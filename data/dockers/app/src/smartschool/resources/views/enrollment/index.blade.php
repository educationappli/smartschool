<!-- index.blade.php -->
@extends('enrollment')
@section('inner_content')
  <div class="container">
    <div class="form-group row">
        <a href="{{action('EnrollmentController@create')}}" class="btn btn-warning">New</a>
    </div>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Standard</th>
        <th>Student Name</th>
        <th>Enrollment Date</th>
        <th>Session</th>
	<th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($enrollments as $enrollment)
      <tr>
        <td>{{$enrollment['id']}}</td>
        <td>{{$standard_masters[$enrollment['standard_master_id']]['title']}}</td>
        <td>{{$persons[$students[$enrollment['student_id']]['person_id']]['first_name']}} {{$persons[$students[$enrollment['student_id']]['person_id']]['middle_name']}} {{$persons[$students[$enrollment['student_id']]['person_id']]['last_name']}}</td>
        <td>{{$enrollment['enrollment_date']}}</td>
        <td>{{$enrollment['session']}}</td>
	<td><a href="{{action('EnrollmentController@edit', $enrollment['id'])}}" class="btn btn-warning">Edit</a></td>
        <td><a href="{{action('EnrollmentController@destroy', $enrollment['id'])}}" class="btn btn-danger">Delete</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
@endsection
