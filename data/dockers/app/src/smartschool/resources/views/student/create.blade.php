<!-- create.blade.php -->

@extends('student')
@section('inner_content')
<div class="container">
  <form method="post" action="{{url('student')}}">
    <div class="form-group row">
        <a href="{{action('StudentController@index')}}" class="btn btn-warning">List</a>
    </div>
    <div class="form-group row">
      {{csrf_field()}}
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">User Id</label>
      <div class="col-sm-10">
	{{ Form::number('user_id', '', ['placeholder' => 'User Id', 'class' => 'form-control form-control-lg']) }}
      </div>
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Person Id</label>
      <div class="col-sm-10">
	{{ Form::number('person_id', '', ['placeholder' => 'Person Id', 'class' => 'form-control form-control-lg']) }}
      </div>
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Parent 1</label>
      <div class="col-sm-10">
	{{ Form::number('parent1_id', '', ['placeholder' => 'Parent1 Id', 'class' => 'form-control form-control-lg']) }}
      </div>
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Parent 2</label>
      <div class="col-sm-10">
	{{ Form::number('parent2_id', '', ['placeholder' => 'Parent2 Id', 'class' => 'form-control form-control-lg']) }}
      </div>
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Guardian 1</label>
      <div class="col-sm-10">
	{{ Form::number('guardian1_id', '', ['placeholder' => 'Guardian1 Id', 'class' => 'form-control form-control-lg']) }}
      </div>
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Guardian 2</label>
      <div class="col-sm-10">
	{{ Form::number('guardian2_id', '', ['placeholder' => 'Guardian2 Id', 'class' => 'form-control form-control-lg']) }}
      </div>
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Guardian 3</label>
      <div class="col-sm-10">
	{{ Form::number('guardian3_id', '', ['placeholder' => 'Guardian3 Id', 'class' => 'form-control form-control-lg']) }}
      </div>
    </div>
	@include('person.create')
    <div class="form-group row">
      <div class="col-md-2"></div>
	{{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
    </div>
  </form>
</div>
@endsection
