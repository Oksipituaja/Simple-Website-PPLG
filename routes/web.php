<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

route::get( 'admin', function () {
    return view ('admin.dashboard');    
})->middleware('auth');

route::get( 'admin/categories', function () {
    return view ('admin.categories.index');    
})->middleware('auth');

Route::post('admin/category',[App\Http\Controllers\CategoryController::class, 'create' ]);

route::get('login' , function(){
    return view ('admin.login');
})->name(name: 'login');

Route::post('login',[AuthController::class, 'login' ]);