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

Route::get('/', [\App\Http\Controllers\Client\HomeController::class, 'index']);



Route::prefix('/adminpanel')->group(function () {

    Route::get('/', function (){
        return view('admin.home');
    });

    Route::resource('categories', \App\Http\Controllers\Admin\CategoryController::class);

//    Route::get('/categories',[\App\Http\Controllers\Admin\CategoryController::class , 'index'])->name('panel.categories.index');
//    Route::get('/categories/create',[\App\Http\Controllers\Admin\CategoryController::class , 'create'])->name('panel.categories.create');
//    Route::post('/categories/store',[\App\Http\Controllers\Admin\CategoryController::class , 'store'])->name('panel.categories.store');
//    Route::get('/categories/{category}/edit',[\App\Http\Controllers\Admin\CategoryController::class , 'edit'])->name('panel.categories.edit');
//    Route::patch('/categories/{category}',[\App\Http\Controllers\Admin\CategoryController::class , 'update'])->name('panel.categories.update');
//    Route::delete('/categories/{category}',[\App\Http\Controllers\Admin\CategoryController::class , 'destroy'])->name('panel.categories.destroy');

});
