<?php

class Comment extends Eloquent {
	protected $fillable = ['post_id', 'contents'];
}
