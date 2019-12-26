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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/student', 'Backend\Student\StudentController@index')->name('student');
Route::get('/home/student/create', 'Backend\Student\StudentController@create');
Route::post('/home/student/store', 'Backend\Student\StudentController@store')->name('store');
Route::get('/home/student/{id}/show', 'Backend\Student\StudentController@show')->name('student-show');
Route::get('/home/student/{id}/edit', 'Backend\Student\StudentController@edit')->name('student-edit');
Route::post('/home/student/{id}/update', 'Backend\Student\StudentController@update')->name('student-update');
Route::get('/home/student/{id}/delete', 'Backend\Student\StudentController@destroy')->name('student-delete');

Route::get('/home/teacher', 'Backend\Teacher\TeacherController@index')->name('teacher');
Route::get('/home/teacher/create', 'Backend\teacher\TeacherController@create');
Route::post('/home/teacher/store', 'Backend\teacher\TeacherController@store')->name('store');
Route::get('/home/teacher/{id}/show', 'Backend\teacher\TeacherController@show')->name('teacher-show');
Route::get('/home/teacher/{id}/edit', 'Backend\teacher\TeacherController@edit')->name('teacher-edit');
Route::post('/home/teacher/{id}/update', 'Backend\teacher\TeacherController@update')->name('teacher-update');
Route::get('/home/teacher/{id}/delete', 'Backend\teacher\TeacherController@destroy')->name('teacher-delete');
