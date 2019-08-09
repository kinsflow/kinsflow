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

Route::get('/signup', 'UsersController@signup')->name('signup');
Route::get('/category/{id}', 'UsersController@category')->name('category');
Route::post('/registration', 'UsersController@register')->name('registration');
Route::get('/livesearch', 'UsersController@livesearch')->name('livesearch');


Route::get('/addtocart/{id}', 'CategoryController@addtocart')->name('addtocart');
Route::get('/mycart', 'CategoryController@showcart')->name('showcart');
Route::get('/description/{id}', 'CategoryController@description')->name('description');



Route::get('/blog', 'BlogController@index')->name('allblog');


Route::get('/roleuser', function(){
    $user= App\ User::find(1);
    foreach ($user->roles as $role)
    {
        return $role->name;
    }
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
