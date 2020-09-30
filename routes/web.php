<?php

use Illuminate\Support\Facades\Route;

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
Route::prefix('admin')->group(function () {
    Auth::routes(['register' => false]);
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/add-hospital', 'HomeController@addhospital')->name('addhospital');
    Route::post('/add-hospital', 'HomeController@posthospital')->name('posthospital');
    Route::get('/view-hospitals', 'HomeController@viewhospitals')->name('viewhospitals');
    Route::get('/add-beds', 'HomeController@addbeds')->name('addbeds');
    Route::post('/add-beds', 'HomeController@postbeds')->name('postbeds');
    Route::get('/add-department', 'HomeController@adddepartment')->name('adddepartment');
    Route::post('/add-department', 'HomeController@postdepartment')->name('postdepartment');
});

