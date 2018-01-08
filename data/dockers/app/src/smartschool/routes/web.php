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
Route::resource('admin', 'AdminController');
Route::resource('user', 'UserController');
Route::resource('student', 'StudentController');
Route::resource('teacher', 'TeacherController');
Route::resource('parent', 'GuardianController');
Route::resource('guardian', 'GuardianController');
Route::resource('enrollment', 'EnrollmentController');
Route::resource('master/standard', 'StandardMasterController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
