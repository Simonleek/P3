@extends('_master')
@section('topic')
<H1>Lorem Ipsum Generator</H1>
@stop
@section('content')
	<br/>
	<hr>
	{{ Form::open(array('url' => '/Lorem', 'method' => 'POST')) }}
		{{ Form::label('query','Number of Paragraph: ') }}
		{{ Form::text('query'); }}
		{{ Form::submit('Get Paragraph'); }}
	{{ Form::close() }}
	<a href='/' >Back</a><hr>
	@if ($message != '')
		<h3>{{{$message}}}</h3><hr>
	@endif
	@foreach($result as  $paragraph)
		<h4> {{ $paragraph }}</h4>
	@endforeach
@stop