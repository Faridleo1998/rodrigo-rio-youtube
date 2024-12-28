<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Illuminate\View\View;

Route::prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('index');
        Route::resource('categories', AdminCategoryController::class);
    });

Route::get('/', fn(): View => view('pages.home'))->name('home');

Route::resource('categories', CategoryController::class)
    ->except(['show']);

Route::resource('products', ProductController::class);
