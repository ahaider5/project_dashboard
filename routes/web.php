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

Route::get('/admin/reports', "App\Http\Controllers\ReportController@index");
Route::get('/admin/reports/user-report', "App\Http\Controllers\ReportController@userReport");
Route::get('/admin/reports/get-users', "App\Http\Controllers\ReportController@getAllUsers");
// Route::get('/admin/reports/user-report', "App\Http\Controllers\ReportController@myReport");
Route::get('/admin/reports/growth-report', "App\Http\Controllers\ReportController@growthReport");
Route::get('/admin/reports/earning-report', "App\Http\Controllers\ReportController@earningReport");

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
