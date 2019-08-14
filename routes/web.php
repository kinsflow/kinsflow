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
Route::get('/wishlist', 'CategoryController@wishlist')->name('wishlist');
Route::get('/addtowishlist/{id}', 'CategoryController@addtowishlist')->name('addtowishlist');
Route::get('/description/{id}', 'CategoryController@description')->name('description');



Route::get('/blog', 'BlogController@index')->name('allblog');
Route::get('/blog/{id}', 'BlogController@categoryBlog')->name('categoryBlog');
Route::get('/blog/{id}/edit', 'BlogController@editBlog')->name('editBlog');
Route::post('/comments/{id}', 'BlogController@comments')->name('comments');
Route::get('createpost', 'BlogController@create')->name('create.blog');
Route::post('savepost', 'BlogController@createBlog')->name('createBlog');


Route::get('/roleuser', function(){
    $user= App\ User::find(1);
    foreach ($user->roles as $role)
    {
        return $role->name;
    }
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
