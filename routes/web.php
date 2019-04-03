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

Route::get('/', 'PagesController@index')->name('home');
Route::get('/rent', 'PagesController@rent');
Route::get('/buy', 'PagesController@buy');
Route::get('/agents', 'PagesController@agents');
Route::get('/login', 'PagesController@buy');

Route::resource('posts', 'PostsController');
Route::get('/rent/properties', 'PostsController@fetchProperties');
Route::get('/buy/properties', 'PostsController@fetchProperties');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/dashboard/post/{post}', 'DashboardController@show')->name('show-single');
Route::get('/dashboard/create', 'DashboardController@createPost')->name('create-post');

// Route::get('/users/edit', 'UsersController@index');

// Route::post('/profile/edit', 'UsersController@edit');