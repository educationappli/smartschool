<!-- index.blade.php -->
@extends('master.common')
@section('inner_content')
  <div class="container">
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Description</th>
        <th>Age Range</th>
      </tr>
    </thead>
    <tbody>
      @foreach($standard_masters as $standard_master)
      <tr>
        <td>{{$standard_master['id']}}</td>
        <td>{{$standard_master['title']}}</td>
        <td>{{$standard_master['description']}}</td>
        <td>{{$standard_master['age_range']}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
@endsection
