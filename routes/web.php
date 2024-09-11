<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/Products',[ProductsController::class, 'index'])->name('Pages.index');
Route::get('/Products/show/{product}',[ProductsController::class, 'show'])->name('Pages.show');

Route::get('/Products/create',[ProductsController::class, 'create'])->name('Pages.create');
Route::post('/Products/store',[ProductsController::class, 'store'])->name('Pages.store');

Route::get('/Products/edit/{product}',[ProductsController::class, 'edit'])->name('Pages.edit');
Route::put('/Products/update/{product}',[ProductsController::class, 'update'])->name('Pages.update');

Route::delete('/Products/delete/{product}',[ProductsController::class, 'delete'])->name('Pages.delete');