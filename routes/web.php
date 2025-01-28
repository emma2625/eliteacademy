<?php

use App\Http\Controllers\Admin\ClassController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', [PageController::class, 'homePage'])->name('home.page');
Route::get('/about', [PageController::class, 'aboutPage'])->name('about.page');
Route::get('/contact', [PageController::class, 'contactPage'])->name('contact.page');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin/classes', [ClassController::class, 'create'])->name('admin.class.create');

Route::get('/admin/classes/{id}/edit', [ClassController::class, 'edit'])->name('admin.class.edit');

Route::patch('/admin/classes/{id}/update', [ClassController::class, 'update'])->name('admin.class.update');

Route::delete('/admin/classes/{id}/delete', [ClassController::class, 'destroy'])->name('admin.class.destroy');

Route::post('/admin/classes', [ClassController::class, 'store'])->name('admin.class.store');


Route::get('/profile', [ProfileController::class, 'showProfile'])->name('profile.page');