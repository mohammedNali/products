<?php

use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'admin'], function () {
//    Route::get('login', 'Admin\LoginController@showLoginForm')->name('admin.login');
    Route::get('login', [\App\Http\Controllers\Admin\LoginController::class, 'showLoginForm'])->name('admin.login');
//    Route::post('login', 'Admin\LoginController@login')->name('admin.login.post');
    Route::post('login', [\App\Http\Controllers\Admin\LoginController::class,'login'])->name('admin.login.post');
    Route::get('logout', 'Admin\LoginController@logout')->name('admin.logout');

    Route::get('/', function () {
        return view('admin.dashboard.index');
    });
});

//Route::view('/admin', 'admin.dashboard.index');
//Route::view('/admin/login', 'admin.auth.login');
