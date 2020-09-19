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

Route::get('/', 'HomeController@dashboard')->middleware('auth');
Route::get('/profile', 'UserController@profile')->name('profile')->middleware('auth');
Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard')->middleware('auth');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::post('files/upload', 'FileController@upload')->name('files.upload')->middleware('auth');
// Route::get('files/fetch', 'FileController@fetch')->name('files.fetch');
// Route::get('files/delete', 'FileController@index')->name('files.delete');

Route::resource('files', 'FileController')->middleware('auth');
Route::resource('chat', 'ChatController')->middleware('auth');
Route::resource('reports', 'ReportController')->middleware('auth');
Route::resource('roles', 'RoleController')->middleware('auth');
Route::resource('users', 'UserController')->middleware('auth');
Route::resource('admins', 'AdminController')->middleware('auth');
Route::resource('accountants', 'AccountantController')->middleware('auth');
Route::resource('company', 'CompanyController')->middleware('auth');
// for getting company files
Route::get('company/{uuid}/files','CompanyController@file')->name('company.files')->middleware('auth');
Route::get('company/{uuid}/reports','CompanyController@report')->name('company.reports')->middleware('auth');
Route::post('reports/upload', 'ReportController@upload')->name('reports.upload')->middleware('auth');
Route::get('reports_of/{month}', 'ReportController@view_month_reports')->name('reports.month')->middleware('auth');
