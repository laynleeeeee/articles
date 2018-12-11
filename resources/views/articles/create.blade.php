@extends('layouts.app')

@section('content')

	@include('articles._error')

	{!! Form::open(['url' => 'articles']) !!}

		@include('articles._form', ['buttonText' => 'Add New Article'])

	{!! Form::close() !!}

@stop