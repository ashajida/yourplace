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
Route::get('/update-profile', 'PagesController@updateProfile');

Route::resource('posts', 'PostsController');
Route::resource('saved-posts', 'SavedPostsController');
Route::get('/search/properties', 'PostsController@fetchProperties');


Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/dashboard/post/{post}', 'DashboardController@show')->name('show-single');
Route::get('/dashboard/create', 'DashboardController@createPost')->name('create-post');

Route::resource('users', 'UsersController');

Route::post('/users/update', 'UsersController@update');

Route::put('/users/update-pic/{id}', 'UsersController@updatePic');
Route::get('/users/{id}/update-profile', 'PagesController@updateProfile');