<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/test', function () {
    return view('pages.test');
});

Route::get('/roleuser', function(){
    $user= App\ User::find(1);
    foreach ($user->roles as $role)
    {
        return $role->name;
    }
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
