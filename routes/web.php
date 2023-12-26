<?php

use App\Http\Controllers\Location;
use App\Http\Controllers\Trip;
use App\Livewire\Dashboard;
use App\Livewire\Editfile;
use App\Livewire\Location as LivewireLocation;
use Illuminate\Support\Facades\Route;


Route::get('/admin',Dashboard::class)->name('dashboard');

Route::post('/admin',[Location::class,'create'])->name('home');
Route::get('admin/edit/{id}',[Editfile::class,'edit'])->name('edit');
Route::post('admin/edit/{id}',[Location::class,'update'])->name('update');
Route::get('admin/delete/{id}',[Location::class,'delete'])->name('delete');

// Show html

Route::get('/',[Location::class,'view']);
Route::post('/',[Trip::class,'create'])->name('view');

// Location Tab
Route::get('/admin/location',[LivewireLocation::class,'addlocation'])->name('location');

// Seat Booking

Route::get('admin/seat',Seatbooking::class)->name('seat');
