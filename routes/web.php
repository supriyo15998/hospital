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
    $cities = \App\City::all();
    return view('index')->withCities($cities);
});

Route::post('/city','PagesController@city')->name('city');
Route::get('/{user}/beds','PagesController@beds')->name('beds');
Route::get('/{user}/emergency','PagesController@emergency')->name('emergency');
Route::get('/{user}/departments','PagesController@departments')->name('departments');
Route::get('/{user}/laboratories','PagesController@laboratories')->name('laboratories');
Route::get('/{user}/helpdesk','PagesController@helpdesk')->name('helpdesk');
Route::get('/{user}/doctors','PagesController@doctors')->name('doctors');
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
    Route::get('/add-doctor', 'HomeController@adddoctor')->name('adddoctor');
    Route::post('/add-doctor', 'HomeController@postdoctor')->name('postdoctor');
    Route::get('/view-doctors', 'HomeController@viewdoctors')->name('viewdoctors');
    Route::get('/add-lab', 'HomeController@addlab')->name('addlab');
    Route::get('/add-emergency', 'HomeController@addemergency')->name('addemergency');
    Route::post('/add-emergency', 'HomeController@postemergency')->name('postemergency');
    Route::get('/add-lab', 'HomeController@addlab')->name('addlab');
    Route::post('/add-lab', 'HomeController@postlab')->name('postlab');
    Route::get('/add-help', 'HomeController@addhelp')->name('addhelp');
    Route::post('/add-help', 'HomeController@posthelp')->name('posthelp');
});

