<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[AuthController::class, 'login']);
Route::post('/',[AuthController::class, 'auth_login']);

Route::get('logout',[AuthController::class, 'logout']);

Route::group(['middleware' => 'useradmin'], function () {
    Route::get('panel/dashboard',[DashboardController::class, 'dashboard']);

    Route::get('panel/role',[RoleController::class, 'list'])->name('role_list');
    Route::get('panel/add',[RoleController::class, 'add']);
    Route::post('panel/add',[RoleController::class, 'insert'])->name('role_insert');
    Route::get('panel/edit/{id}',[RoleController::class, 'edit'])->name('role_edit');
    Route::get('panel/edit/{id}',[RoleController::class, 'update'])->name('role_update');
    Route::get('panel/delete/{id}',[RoleController::class, 'delete'])->name('role_delete');

});

