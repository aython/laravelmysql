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
    return view('adfs');
});




Auth::routes();

Route::get('/home', 'HomeController@index');


Route::get('/javeed','StudViewController@fdgh');
Route::get('/dikha','ChecksjController@iam');
Route::get('/tableau','TableauController@get_trusted_url');

Route::post('/loginme','MaksoodController@login');

Route::get('/report','ReportController@checkj');
