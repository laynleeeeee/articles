@extends('layouts.app')

@section('content')

<h2>Categories</h2>

<hr>

	@foreach($categories as $category)
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-body">
					<article>
						<h3> <a href="{{ url('categories/'.$category->id) }}">{{ $category->name }}</a> </h3>
						<p>{{ $category->description }}</p>
					</article>
				</div>
			</div>
		</div>
	</div>
	@endforeach

@stop