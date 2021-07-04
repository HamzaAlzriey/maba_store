<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\ProfileController;
use Symfony\Component\HttpKernel\Profiler\Profile;

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

Route::get('/', [HomeController::class, 'index']);

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index']);
Route::get('/view/{id}', [HomeController::class, 'showProduct']);
Route::resource('admin/products', ProductController::class);
Route::resource('admin/users', UserController::class);
Route::resource('profile', ProfileController::class);
Route::resource('card', CardController::class);
Route::get('admin/products/{product}/delet', [ProductController::class, 'destroy']);
Route::get('admin/products/{product}/delet', [HomeController::class, 'showProduct']);
Route::get('logout', [LoginController::class, 'logout']);
Route::post('search', [HomeController::class, 'search']);
