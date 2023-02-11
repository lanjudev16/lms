<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Employee\EmployeeController;
use App\Http\Controllers\Book\BookController;
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


Route::get('/employee',[EmployeeController::class,'index'])->name('employee');


Route::get('/employee/create',[EmployeeController::class,'create'])->name('employee.create');
Route::get('/book/create',[BookController::class,'create'])->name('book.create');


Route::post('employee/store',[EmployeeController::class,'store'])->name('employee.store');
Route::post('book/store',[BookController::class,'store'])->name('book.store');



Route::get('employee/edit/{id}',[EmployeeController::class,'edit'])->name('employee.edit');
Route::get('book/edit/{id}',[BookController::class,'edit'])->name('book.edit');




Route::post('employee/update/{id}',[EmployeeController::class,'update'])->name('employee.update');
Route::post('book/update/{id}',[BookController::class,'update'])->name('book.update');


Route::get('employee/delete/{id}',[EmployeeController::class,'destroy'])->name('employee.delete');
Route::get('book/delete/{id}',[BookController::class,'destroy'])->name('book.delete');


Route::get('/book',[BookController::class,'index'])->name('book');







Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



