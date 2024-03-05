<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('manager',[AdminController::class,'index'])->name('manager');
Route::get('manager_search',[AdminController::class,'=Search'])->name('manager_search');
Route::get('login',[AdminController::class,'Form_login'])->name('login');
Route::get('create',[AdminController::class,'Create_Manager']);
Route::get('create_register',[AdminController::class,'Create_rgt']);
Route::post('insert',[AdminController::class,'insert']);
Route::post('insert_register',[AdminController::class,'insert_register']);
Route::get('city',[AdminController::class,'city_F'])->name('city');
Route::post('insert_city',[AdminController::class,'insert_city']);
