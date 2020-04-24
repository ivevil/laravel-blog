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
    return view('auth.login');
});

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');

Auth::routes();

/* BACKEND */
Route::get('/admin', 'AdminController@index')->name('admin')->middleware('auth');
Route::get('/posts', 'PostController@index')->name('posts')->middleware('auth');
Route::get('/create', 'PostController@create')->name('createpost')->middleware('auth');
Route::post('/create', 'PostController@store')->middleware('auth');
Route::get('/edit', 'PostController@edit')->name('editpost')->middleware('auth');
Route::post('/edit', 'PostController@update')->middleware('auth');
Route::get('/delete', 'PostController@destroy')->middleware('auth');

Route::get('/categories', 'CategoryController@index')->name('categories')->middleware('auth');
Route::get('/category/create', 'CategoryController@create')->name('createcategory')->middleware('auth');
Route::post('/category/create', 'CategoryController@store')->middleware('auth');
Route::get('/category/edit', 'CategoryController@edit')->name('editcategory')->middleware('auth');
Route::post('/category/edit', 'CategoryController@update')->middleware('auth');
Route::get('/category/delete', 'CategoryController@destroy')->middleware('auth');

Route::get('/settings', 'SettingsController@index')->name('settings')->middleware('auth');
Route::post('/settings', 'SettingsController@store')->middleware('auth');

Route::get('/pages', 'PagesController@index')->name('pages')->middleware('auth');
Route::get('/pages/create', 'PagesController@create')->name('addpage')->middleware('auth');
Route::post('/pages/create', 'PagesController@store')->middleware('auth');
Route::get('/pages/edit', 'PagesController@edit')->name('editpage')->middleware('auth');
Route::post('/pages/edit', 'PagesController@update')->middleware('auth');
Route::get('/pages/delete', 'PagesController@destroy')->middleware('auth');

Route::get('/menus', 'MenusController@index')->name('menus')->middleware('auth');
Route::get('/menus/create', 'MenusController@create')->name('addmenu')->middleware('auth');
Route::post('/menus/create', 'MenusController@store')->middleware('auth');
Route::get('/menus/edit', 'MenusController@edit')->name('edittaxonomy')->middleware('auth');
Route::post('/menus/edit', 'MenusController@update')->middleware('auth');
Route::get('/menus/delete', 'MenusController@destroy')->middleware('auth');

Route::get('/widgets', 'WidgetsController@index')->name('widgets')->middleware('auth');
Route::get('/widgets/create', 'WidgetsController@create')->name('addwidget')->middleware('auth');
Route::post('/widgets/create', 'WidgetsController@store')->middleware('auth');
Route::get('/widgets/edit', 'WidgetsController@edit')->name('editwidget')->middleware('auth');
Route::post('/widgets/edit', 'WidgetsController@update')->middleware('auth');
Route::get('/widgets/delete', 'WidgetsController@destroy')->middleware('auth');

Route::get('/users', 'UserController@index')->name('users')->middleware('auth');
Route::get('/users/create', 'UserController@createIndex')->name('createuser')->middleware('auth');
Route::post('/users/create', 'UserController@create')->middleware('auth');
Route::get('/users/edit', 'UserController@edit')->name('edituser')->middleware('auth');
Route::post('/users/edit', 'UserController@update')->middleware('auth');
Route::get('/users/delete', 'UserController@destroy')->middleware('auth');

/* FRONTEND */
Route::get('/', 'HomeController@index')->name('index');
Route::get('/blog', 'HomeController@showblog')->name('blog');
Route::get('/game', 'GameController@index')->name('game');
Route::get('/posts/{post}', 'PostController@show');
Route::get('/contact', 'ContactController@contact')->name('contact');
Route::post('/contact', 'ContactController@send')->name('send');
Route::get('/user/{user}', 'UserController@show')->name('user');
Route::get('/category/{category}', 'CategoryController@show')->name('category');