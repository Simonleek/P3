@extends('_master')
@section('topic')
<H1>Random User Generator</H1>
@stop
@section('content')
	<br/>
	<hr>
	{{ Form::open(array('url' => '/User', 'method' => 'POST')) }}
		{{ Form::label('query','Number of User: ') }}
		{{ Form::text('query'); }} </br>
		{{ Form::label('incl_bd', 'Include Birthday?') }}
		{{ Form::checkbox('incl_bd', '1', false) }}</br>
		{{ Form::label('incl_pf', 'Include Profile?') }}
		{{ Form::checkbox('incl_pf', '1', false) }}</br>
		{{ Form::submit('Get User'); }}
	{{ Form::close() }}
	<a href='/' >Back</a><hr>
	@if ($message != '')
		<h3>{{{$message}}}</h3><hr>
	@endif
	@foreach($result as  $user)
		<h4> {{ $user }}</h4>
	@endforeach
@stop