<?php

class Post extends Eloquent {
	protected $fillable = ['contents'];

	function comments()
	{
		return $this->hasMany('Comment');
	}
}
