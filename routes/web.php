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

/**
 * student
 */
Route::resource('student', 'StudentController');
Route::get('/student/cat/{cat}', ['as' => 'student.cat', 'uses' => 'StudentController@showCat']);
Route::get('/student/show/{id}', ['as' => 'student.show', 'uses' => 'StudentController@showPost']);


/**
 * methodology
 */
Route::resource('methodology', 'MethodologyController');
Route::get('/methodology/cat/{cat}', [
    'as' => 'methodology.cat',
    'uses' => 'MethodologyController@showCat'
]);
Route::get('/methodology/cat/{cat}/{sub}', [
    'as' => 'methodology.cat.sub',
    'uses' => 'MethodologyController@showSubCat'
]);
Route::get('/methodology/show/{id}', ['as' => 'methodology.show', 'uses' => 'MethodologyController@showPost']);

/**
 * gia
 */
Route::resource('gia', 'GiaController');
Route::get('/gia/cat/{cat}', ['as' => 'gia.cat', 'uses' => 'GiaController@showCat']);
Route::get('/gia/show/{id}', ['as' => 'gia.show', 'uses' => 'GiaController@showPost']);