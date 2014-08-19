<?php

Route::get('/', function()
{
	return '<h1>Hello world!</h1>';
});

Route::resource('posts', 'PostsController');