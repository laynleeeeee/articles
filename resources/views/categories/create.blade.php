@extends('layouts.app')

@section('content')

	@if(count($errors))
		<div class="alert alert-danger">
			@foreach($errors->all() as $error)
				{{ $error }} <br>
			@endforeach
		</div>
	@endif

	{!! Form::open(['url' => 'category']) !!}

		{!! Form::label('name', 'Title') !!}
		{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'ex. Category Name']) !!}

		<div class="form-group" >
			{!! Form::label('description', 'Description:') !!}
			{!! Form::textarea('description', null, ['class' => 'form-control']) !!}
		</div>
		{!! Form::submit('Add New Category', ['class' => 'btn btn-primary']) !!}

	{!! Form::close() !!}

@stop