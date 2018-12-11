@extends('layouts.app')

@section('content')

<h2>Articles</h2>

<hr>

	@foreach($articles as $article)
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-body">
					<article>
						<h3> <a href="{{ url('articles/'.$article->id) }}">{{ $article->title }}</a> </h3>
						<p>{{ $article->body }}</p>
					</article>
				</div>
			</div>
		</div>
	</div>
	@endforeach

@stop