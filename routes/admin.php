<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiTagController;
use App\Http\Controllers\ApiPostController;
use App\Http\Controllers\ApiRoleController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\ApiCategoryController;
use App\Http\Controllers\Admin\CategoryController;

Route::get('/admin', [AdminController::class, 'index'])->middleware('can:admin.index')->name('admin.index');

Route::redirect('/admin', '/users');

Route::resource('users', UserController::class)->only(['index', 'edit', 'update', 'destroy'])->names('users');
Route::resource('posts', PostController::class)->names('posts');
Route::resource('categories', CategoryController::class)->names('categories');
Route::resource('tags', TagController::class)->names('tags');
Route::resource('roles', RoleController::class)->names('roles');

// Api Routes
Route::post('api/posts/delete', [ApiPostController::class, 'destroy']);
Route::post('api/categories/delete', [ApiCategoryController::class, 'destroy']);
Route::post('api/tags/delete', [ApiTagController::class, 'destroy']);
Route::post('api/roles/delete', [ApiRoleController::class, 'destroy']);
