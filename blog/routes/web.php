<?php

Route::get('/', function () {
    return view('home');
});

Route::get('login', function () {
    return view('login');
});

Route::post('login-validate', 'LoginController@login')->name('login');

Route::get('autor', function () {
    return view('roles.autor');
});