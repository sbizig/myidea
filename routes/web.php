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
    return redirect(route('login'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>'auth'],function(){
   Route::group(        
   	[ 'prefix' => 'admin'/*, 'middleware' => ['role:admin']*/], function () {
        //Modules
        Route::resource('modules', 'ModulesController');
        //Users
        Route::resource('users', 'UsersController');
        //Roles
        Route::get('roles', ['uses' => 'RolesController@index'])->name('roles.index');
        Route::get('roles/create', ['uses' => 'RolesController@create'])->name('roles.create');
        Route::post('roles/create', ['uses' => 'RolesController@store'])->name('roles.create');
        Route::get('roles/edit/{id}', ['uses' => 'RolesController@edit'])->name('roles.edit');
        Route::put('roles/edit/{id}', ['uses' => 'RolesController@update'])->name('roles.update');
        Route::delete('roles/{id}', ['uses' => 'RolesController@destroy'])->name('roles.destroy');
        //Permission
        Route::resource('permissions', 'PermissionController');
        Route::post('permissions/create', ['uses' => 'PermissionController@store']);


   });
});