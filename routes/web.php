<?php

Auth::routes();

Route::get('/', function () {
    return redirect('/threads');
});

Route::get('/home', function () {
    return redirect('/threads');
});

route::get('/threads', 'ThreadsController@index');

route::post('/threads', 'ThreadsController@store');

route::get('/threads/create', 'ThreadsController@create');

route::get('/threads/{id}', 'ThreadsController@show');