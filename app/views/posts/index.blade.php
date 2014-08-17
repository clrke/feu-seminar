@extends('layouts.master')

@section('contents')
	<ul class="list-group">
		<li class="list-group-item">
			{{ Form::open(['routes' => 'posts.store', 'class' => 'form-inline'])}}
				New Post: <input type="text" name="contents" class="form-control">
				<button type="submit" class="btn btn-primary"> Create </button>
			{{ Form::close() }}
		</li>
		@foreach($posts as $post)
			<li class="list-group-item"> 
				{{$post->contents}}
				<i>{{ HTML::link(URL::route('posts.show', ['id' => $post->id]),  $post->created_at->diffForHumans())}}</i>
				<div class="container">
					<div class="col-md-6">
						<ul class="list-group">
							@foreach($post->comments as $comment)
								<li class="list-group-item"> {{ $comment->contents }}<i> {{ $comment->created_at->diffForHumans() }} </i> </li>
							@endforeach
							<li class="list-group-item"> 
								{{ Form::open(['routes' => 'comments.store', 'class' => 'form-inline'])}}
									<input type="text" name="contents" class="form-control">
									<button type="submit" class="btn btn-default"> Comment </button>
								{{ Form::close() }}
							</li>
						</ul>
					</div>
				</div>
			</li>
		@endforeach
	</ul>
@stop