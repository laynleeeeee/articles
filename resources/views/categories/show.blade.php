@extends('layouts.app')

@section('content')

	@if(count($errors))
		<div class="alert alert-danger">
			@foreach($errors->all() as $error)
				{{ $error }} <br>
			@endforeach
		</div>
	@endif

	{!! Form::open() !!}

		{!! Form::label('category', 'Title') !!}
		{!! Form::text('category', $category->name, ['class' => 'form-control', 'placeholder' => 'ex. Category Title']) !!}

		<div class="form-group" >
			{!! Form::label('description', 'Description:') !!}
			{!! Form::textarea('description', $category->description, ['class' => 'form-control']) !!}
		</div>
		{!! Form::submit('Save Changes', ['class' => 'btn btn-primary']) !!}

	{!! Form::close() !!}
@stop