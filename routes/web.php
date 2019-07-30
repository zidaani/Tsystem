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
Route::get('/admin', 'HomeController@index')->name('home');
Route::get('/admin/branches', 'BranchesController@index')->name('branches');
Route::resource('admin/branches', 'BranchesController');

Route::resource('admin/users', 'UsersController');
Route::resource('admin/transaction', 'TransactionController');
Route::get('users', 'UserdashboardController@index')->name('users.dashboard.index');

// Route::get('/agents', 'LoginAgentsController@index')->name('agents');



