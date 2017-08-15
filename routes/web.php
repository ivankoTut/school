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

Route::get('/', ['as' => 'index', 'uses' => 'Controller@main']);
Route::get('/blog', ['as' => 'blog', 'uses' => 'Controller@blog']);

Route::resource('student', 'StudentController');
Route::get('/student/cat/{cat}', ['as' => 'student.cat', 'uses' => 'StudentController@showCat']);
