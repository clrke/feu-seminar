@extends('layouts.master')

@section('contents')
	<li class="list-group-item"> 
		{{$post->contents}}
		<i>{{ HTML::link(URL::route('posts.show', ['id' => $post->id]),  $post->created_at->diffForHumans())}}</i>
		<div class="pull-right">
			{{ Form::open(['method' => 'delete', 'route' => ['posts.destroy', $post->id]])}}
				<button> X </button>
			{{ Form::close()}}
		</div>
		<div class="container">
			<div class="col-md-6">
				<ul class="list-group">
					@foreach($post->comments as $comment)
						<li class="list-group-item"> {{ $comment->contents }}<i> {{ $comment->created_at->diffForHumans() }} </i> </li>
					@endforeach
				</ul>
			</div>
		</div>
	</li>
@stop