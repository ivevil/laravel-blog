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
Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin', 'AdminController@index')->name('admin');
    Route::get('/posts', 'PostController@index')->name('posts');
    Route::get('/create', 'PostController@create')->name('createpost');
    Route::post('/create', 'PostController@store');
    Route::get('/edit', 'PostController@edit')->name('editpost');
    Route::post('/edit', 'PostController@update');
    Route::get('/delete', 'PostController@destroy');

    Route::get('/categories', 'CategoryController@index')->name('categories');
    Route::get('/category/create', 'CategoryController@create')->name('createcategory');
    Route::post('/category/create', 'CategoryController@store');
    Route::get('/category/edit', 'CategoryController@edit')->name('editcategory');
    Route::post('/category/edit', 'CategoryController@update');
    Route::get('/category/delete', 'CategoryController@destroy');
    
    Route::get('/settings', 'SettingsController@index')->name('settings');
    Route::post('/settings', 'SettingsController@store');
    
    Route::get('/pages', 'PagesController@index')->name('pages');
    Route::get('/pages/create', 'PagesController@create')->name('addpage');
    Route::post('/pages/create', 'PagesController@store');
    Route::get('/pages/edit', 'PagesController@edit')->name('editpage');
    Route::post('/pages/edit', 'PagesController@update');
    Route::get('/pages/delete', 'PagesController@destroy');
    
    Route::get('/media', 'MediaController@index')->name('media');
    Route::get('/media/create', 'MediaController@create')->name('addmedia');
    Route::post('/media/create', 'MediaController@store');
    Route::get('/media/edit', 'MediaController@edit')->name('editmedia');
    Route::post('/media/edit', 'MediaController@update');
    Route::get('/media/delete', 'MediaController@destroy');
    
    Route::get('/menus', 'MenusController@index')->name('menus');
    Route::get('/menus/create', 'MenusController@create')->name('addmenu');
    Route::post('/menus/create', 'MenusController@store');
    Route::get('/menus/edit', 'MenusController@edit')->name('edittaxonomy');
    Route::post('/menus/edit', 'MenusController@update');
    Route::get('/menus/delete', 'MenusController@destroy');
    
    Route::get('/widgets', 'WidgetsController@index')->name('widgets');
    Route::get('/widgets/create', 'WidgetsController@create')->name('addwidget');
    Route::post('/widgets/create', 'WidgetsController@store');
    Route::get('/widgets/edit', 'WidgetsController@edit')->name('editwidget');
    Route::post('/widgets/edit', 'WidgetsController@update');
    Route::get('/widgets/delete', 'WidgetsController@destroy');
    
    Route::get('/users', 'UserController@index')->name('users');
    Route::get('/users/create', 'UserController@createIndex')->name('createuser');
    Route::post('/users/create', 'UserController@create');
    Route::get('/users/edit', 'UserController@edit')->name('edituser');
    Route::post('/users/edit', 'UserController@update');
    Route::get('/users/delete', 'UserController@destroy');
});

    /* FRONTEND */
    Route::get('/', 'HomeController@index')->name('index');
    Route::get('/blog', 'HomeController@showblog')->name('blog');
    Route::get('/game', 'GameController@index')->name('game');
    Route::get('/posts/{post}', 'PostController@show');
    Route::get('/contact', 'ContactController@contact')->name('contact');
    Route::post('/contact', 'ContactController@send')->name('send');
    Route::get('/user/{user}', 'UserController@show')->name('user');
    Route::get('/category/{category}', 'CategoryController@show')->name('category');