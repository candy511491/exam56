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
Route::pattern('exam', '[0-9]+');
Route::pattern('topic', '[0-9]+');

Route::get('/', 'ExamController@index')->name('index');
Route::get('/home', 'ExamController@index')->name('home');

Auth::routes();

Route::get('/exam', 'ExamController@index')->name('exam.index');
Route::post('/exam', 'ExamController@store')->name('exam.store');
Route::get('/exam/{exam}', 'ExamController@show')->name('exam.show');
Route::get('/exam/create', 'ExamController@create')->name('exam.create');
Route::get('/exam/{exam}/edit', 'ExamController@edit')->name('exam.edit');
Route::patch('/exam/{exam}', 'ExamController@update')->name('exam.update');
Route::delete('/exam/{exam}', 'ExamController@destroy')->name('exam.destroy');

Route::post('/topic', 'TopicController@store')->name('topic.store');
Route::get('/topic/{topic}/edit', 'TopicController@edit')->name('topic.edit');
Route::patch('/topic/{topic}', 'TopicController@update')->name('topic.update');
Route::delete('/topic/{topic}', 'TopicController@destroy')->name('topic.destroy');
