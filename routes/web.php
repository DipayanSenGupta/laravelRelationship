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
// Route::get('employee-index','EmployeeController@index')->name('employee.index');
// Route::get('employee','EmployeeController@create')->name('employee.create');
// Route::post('employee','EmployeeController@store')->name('employee.store');
// Route::resource('employee','EmployeeController');
// Route::resource('transaction','TransactionController');
// Route::get('show-against-employee/{id}','TransactionController@showAgainstEmployee')->name('transaction.showAgainstEmployee');
Route::get('product/create','ProductController@create')->name('product.create');
Route::get('product/{product}', 'ProductController@show')->name('product.show');
Route::get('category/{category}', 'CategoryController@show')->name('category.show');
