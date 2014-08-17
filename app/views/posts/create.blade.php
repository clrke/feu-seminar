@extends('layouts.master')

@section('contents')
	{{ Form::open(['route' => 'posts.store']) }}
		Contents: <input type="text" name="contents">
		<button type="submit"> Create </button>
	{{ Form::close() }}
@stop