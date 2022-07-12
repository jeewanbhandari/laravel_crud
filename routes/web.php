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

Route::get('/', function () {
    return view('welcome');
});

//Employee
//form to insert data
Route:: get('employee/create',[\App\Http\Controllers\FormController::class,'create'])->name('employee.create');
//route to store data
Route:: post('employee',[\App\Http\Controllers\FormController::class,'store'])->name('employee.store');
//route to list all data
Route:: get('employee',[\App\Http\Controllers\FormController::class,'index'])->name('employee.index');
//rout to show details
Route:: get('employee/{id}',[\App\Http\Controllers\FormController::class,'show'])->name('employee.show');
//routr to delete data
Route:: delete('employee/{id}',[\App\Http\Controllers\FormController::class,'destroy'])->name('employee.destroy');
//route to edit data
Route:: get('employee/{id}/edit',[\App\Http\Controllers\FormController::class,'edit'])->name('employee.edit');
//route to update data
Route:: put('employee/{id}',[\App\Http\Controllers\FormController::class,'update'])->name('employee.update');


//Products
Route:: get('Products/create',[\App\Http\Controllers\ProductController::class,'create'])->name('Products.create');
//route to store data
Route:: post('Products',[\App\Http\Controllers\ProductController::class,'store'])->name('Products.store');
//route to list all data
Route:: get('Products',[\App\Http\Controllers\ProductController::class,'index'])->name('Products.index');
//view details
Route:: get('Products/{id}',[\App\Http\Controllers\ProductController::class,'show'])->name('Products.show');
//route to delete data
Route:: delete('Product/{id}',[\App\Http\Controllers\ProductController::class,'destroy'])->name('Products.destroy');
//route to edit data
Route:: get('Product/{id}/edit',[\App\Http\Controllers\ProductController::class,'edit'])->name('Products.edit');
//route to update data
Route:: put('Product/{id}',[\App\Http\Controllers\ProductController::class,'update'])->name('Products.update');

// Route:: get('about',[\App\Http\Controllers\MyController::class,'about']);
// Route:: get('services',[\App\Http\Controllers\MyController::class,'services']);
// Route:: get('gallery',[\App\Http\Controllers\MyController::class,'gallery']);
// Route:: get('contact',[\App\Http\Controllers\MyController::class,'contact']);



// Route::get('hello/{name}', function ($name) {
//     return "Hello $name";
// });


