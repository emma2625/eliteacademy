<?php

use App\Http\Controllers\Admin\ClassController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', [PageController::class, 'homePage'])->name('home.page');
Route::get('/about', [PageController::class, 'aboutPage'])->name('about.page');
Route::get('/contact', [PageController::class, 'contactPage'])->name('contact.page');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin/classes', [ClassController::class, 'create'])->name('admin.class.create');
Route::post('/admin/classes', [ClassController::class, 'store'])->name('admin.class.store');
