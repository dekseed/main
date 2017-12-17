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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::prefix('manage')->middleware('role:superadministrator|administrator|editor|author|contributor')->group(function () {
  Route::get('/', 'ManageController@index');
  Route::get('/dashboard', 'ManageController@dashboard')->name('manage.dashboard');
  Route::resource('/users', 'UserController');
  Route::resource('/permissions', 'PermissionController', ['except' => 'destroy']);
  Route::resource('/roles', 'RoleController', ['except' => 'destroy']);
  Route::resource('/posts', 'PostController');
});
// Pages
Route::get('/', 'PagesController@index')->name('main');
Route::get('/blog', 'PagesController@blog')->name('blog.index');
Route::get('/contact', 'PagesController@contact')->name('contact');
Route::get('/downloads', 'PagesController@downloads')->name('downloads');
Route::get('/news/tenders', 'PagesController@tenders')->name('tenders');
////////////////////////

Route::get('/home', 'HomeController@index')->name('home');
