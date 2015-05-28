<?php

Route::get('/', function()
{
    return view('welcome');
});

Route::get('/guestbook', 'GuestbookController@getPage');
Route::post('/guestbook', 'GuestbookController@postPage');
