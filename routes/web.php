<?php

use App\Http\Controllers\Location;
use App\Http\Controllers\Trip;
use App\Livewire\Dashboard;
use App\Livewire\Editfile;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Route::get('/',[Location::class,'index']);
Route::get('/admin',Dashboard::class)->name('dashboard');

Route::post('/',[Location::class,'create'])->name('home');
Route::get('/edit/{id}',[Editfile::class,'edit'])->name('edit');
Route::post('/edit/{id}',[Location::class,'update'])->name('update');
Route::get('/delete/{id}',[Location::class,'delete'])->name('delete');

// Show html

Route::get('/',[Location::class,'view']);
Route::post('/view',[Trip::class,'create'])->name('view');
