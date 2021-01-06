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
    Route::post('menu/update/{id}', [MenuController::class, 'update'])->name('admin_menu_update');
    Route::get('menu/edit/{id}', [MenuController::class, 'edit'])->name('admin_menu_edit');
    Route::get('menu/delete/{id}', [MenuController::class, 'destroy'])->name('admin_menu_delete');
    Route::get('menu/show', [MenuController::class, 'show'])->name('admin_menu_show');


    #Contents
    Route::prefix('content')->group(function () {

    Route::get('/', [\App\Http\Controllers\Admin\ContentController::class, 'index'])->name('admin_content');
    Route::post('store', [\App\Http\Controllers\Admin\ContentController::class, 'store'])->name('admin_content_store');
    Route::get('create', [\App\Http\Controllers\Admin\ContentController::class, 'create'])->name('admin_content_add');
    Route::post('update/{id}', [\App\Http\Controllers\Admin\ContentController::class, 'update'])->name('admin_content_update');
    Route::get('edit/{id}', [\App\Http\Controllers\Admin\ContentController::class, 'edit'])->name('admin_content_edit');
    Route::get('delete/{id}', [\App\Http\Controllers\Admin\ContentController::class, 'destroy'])->name('admin_content_delete');
    Route::get('show', [\App\Http\Controllers\Admin\ContentController::class, 'show'])->name('admin_content_show');
    });

    #Image
    Route::prefix('image')->group(function () {


        Route::post('store/{content_id}', [\App\Http\Controllers\Admin\ImageController::class, 'store'])->name('admin_image_store');
        Route::get('create/{content_id}', [\App\Http\Controllers\Admin\ImageController::class, 'create'])->name('admin_image_add');
        Route::get('delete/{id}/{content_id}', [\App\Http\Controllers\Admin\ImageController::class, 'destroy'])->name('admin_image_delete');
        Route::get('show', [\App\Http\Controllers\Admin\ImageController::class, 'show'])->name('admin_image_show');
    });
});



//Route::get('/admin', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin_home');

Route::get('/admin/login', [HomeController::class, 'login'])->name('admin_login');
Route::post('/admin/logincheck', [HomeController::class, 'logincheck'])->name('admin_logincheck');
Route::get('/admin/logout', [HomeController::class, 'logout'])->name('admin_logout');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
