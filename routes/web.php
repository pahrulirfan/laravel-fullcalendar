<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cal', 'RoomsController@index');
