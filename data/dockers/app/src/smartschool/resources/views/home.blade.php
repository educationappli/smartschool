@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

			<div class="content">
				<div class="title m-b-md">
				    Admin panel (You are logged in!)
				</div>

				<div class="links">
				    <ul>
					<li><a href="{{ url('/user') }}">User Management</a></li>
					<li><a href="{{ url('/student') }}">Student Management</a></li>
					<li><a href="{{ url('/teacher') }}">Teacher Management</a></li>
					<li><a href="{{ url('/parent') }}">Parent Management</a></li>
					<li><a href="{{ url('/guardian') }}">Gaurdian Management</a></li>
					<li><a href="{{ url('/enrollment') }}">Enrollment Management</a></li>
					<li><a href="{{ url('/master/standard') }}">Standard Master Management</a></li>
				    </ul>
				</div>
			 </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
