<?php

use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\HomeController;
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

Route::redirect('/anasayfa', '/home')->name('anasayfa');

Route::get('/', function () {
    return view('home.index');
});

Route::get( '/home', [HomeController::class, 'index']);


Route::middleware('auth')->prefix('admin')->group(function () {
//Admin
    Route::get('/', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin_home');

    Route::get('menu', [MenuController::class, 'index'])->name('admin_menu');
    Route::get('menu/add', [MenuController::class, 'add'])->name('admin_menu_add');
    Route::post('menu/create', [MenuController::class, 'create'])->name('admin_menu_create');
    Route::post('menu/update', [MenuController::class, 'update'])->name('admin_menu_update');
    Route::get('menu/delete/{id}', [MenuController::class, 'destroy'])->name('admin_menu_delete');
    Route::get('menu/show', [MenuController::class, 'show'])->name('admin_menu_show');

});



//Route::get('/admin', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin_home');

Route::get('/admin/login', [HomeController::class, 'login'])->name('admin_login');
Route::post('/admin/logincheck', [HomeController::class, 'logincheck'])->name('admin_logincheck');
Route::get('/admin/logout', [HomeController::class, 'logout'])->name('admin_logout');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
