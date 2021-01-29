<?php

use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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

Route::get('/',[HomeController::class, 'index'])->name('home');

Route::get('/home',[HomeController::class, 'index'])->name('homepage');
Route::get('/aboutus',[HomeController::class, 'aboutus'])->name('aboutus');
Route::get('/references',[HomeController::class, 'references'])->name('references');
Route::get('/fag',[HomeController::class, 'fag'])->name('fag');
Route::get('/contact',[HomeController::class, 'contact'])->name('contact');
Route::post('/sendmessage',[HomeController::class, 'sendmessage'])->name('sendmessage');
Route::get('/menucontents/{id}',[HomeController::class, 'menucontents'])->name('menucontents');
Route::get('/content/{id}',[HomeController::class, 'content'])->name('content');
Route::post('/getcontent',[HomeController::class, 'getcontent'])->name('getcontent');
Route::get('/contentlist/{search}',[HomeController::class, 'contentlist'])->name('contentlist');







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

    #message
    #Contents
    Route::prefix('message')->group(function () {

        Route::get('/', [\App\Http\Controllers\Admin\MessageController::class, 'index'])->name('admin_message');
        Route::post('update/{id}', [\App\Http\Controllers\Admin\MessageController::class, 'update'])->name('admin_message_update');
        Route::get('edit/{id}', [\App\Http\Controllers\Admin\MessageController::class, 'edit'])->name('admin_message_edit');
        Route::get('delete/{id}', [\App\Http\Controllers\Admin\MessageController::class, 'destroy'])->name('admin_message_delete');
        Route::get('show', [\App\Http\Controllers\Admin\MessageController::class, 'show'])->name('admin_message_show');
    });

    #Image
    Route::prefix('image')->group(function () {


        Route::post('store/{content_id}', [\App\Http\Controllers\Admin\ImageController::class, 'store'])->name('admin_image_store');
        Route::get('create/{content_id}', [\App\Http\Controllers\Admin\ImageController::class, 'create'])->name('admin_image_add');
        Route::get('delete/{id}/{content_id}', [\App\Http\Controllers\Admin\ImageController::class, 'destroy'])->name('admin_image_delete');
        Route::get('show', [\App\Http\Controllers\Admin\ImageController::class, 'show'])->name('admin_image_show');
    });
    #Review
    Route::prefix('review')->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\ReviewController::class, 'index'])->name('admin_review');
        Route::post('update/{id}', [\App\Http\Controllers\Admin\ReviewController::class, 'update'])->name('admin_review_update');
        Route::get('delete/{id}', [\App\Http\Controllers\Admin\ReviewController::class, 'destroy'])->name('admin_review_delete');
        Route::get('show/{id}', [\App\Http\Controllers\Admin\ReviewController::class, 'show'])->name('admin_review_show');
    });


    #Settings Routes
    Route::get('setting', [\App\Http\Controllers\Admin\SettingController::class, 'index'])->name('admin_setting');
    Route::post('setting/update', [\App\Http\Controllers\Admin\SettingController::class, 'update'])->name('admin_setting_update');

});


#User Page
Route::middleware('auth')->prefix('myaccount')->namespace('myaccount')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('profile');
    Route::get('/myreviews', [UserController::class, 'myreviews'])->name('myreviews');
    Route::get('destroymyreview/{id}', [UserController::class, 'destroymyreview'])->name('user_review_delete');

});
/*
Route::middleware('auth')->prefix('user')->namespace('user')->group(function () {
    Route::get('/profile',[UserController::class,'index'])->name('userprofile');
});*/


Route::get('/admin/login', [HomeController::class, 'login'])->name('admin_login');
Route::post('/admin/logincheck', [HomeController::class, 'logincheck'])->name('admin_logincheck');
Route::get('/logout', [HomeController::class, 'logout'])->name('logout');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
