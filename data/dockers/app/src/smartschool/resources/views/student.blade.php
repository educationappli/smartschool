@extends('layouts.app')
@section('content')
	@if (Auth::guest())	
	@else
		@yield('inner_content')
	@endif
@endsection
