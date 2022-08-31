<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


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

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/nosotros', [HomeController::class, 'about'])->name('home.about');
Route::get('/blog', [HomeController::class, 'blog'])->name('home.blog');
Route::get('/blog/{post}', [HomeController::class, 'blogPost'])->name('home.blogpost');
Route::get('/testimoniales', [HomeController::class, 'testimonials'])->name('home.testimonials');
Route::get('/servicios', [HomeController::class, 'services'])->name('home.services');
Route::get('/aviso-de-privacidad', [HomeController::class, 'privacy'])->name('home.privacy');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
