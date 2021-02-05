<?php

use App\Http\Controllers\Admin\MessageController;
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

Route::get('/home2', function () {
    return view('welcome');
});



Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('homepage');
Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('about');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/references', [HomeController::class, 'references'])->name('references');
Route::get('/categorynews/{id}/{slug}', [HomeController::class, 'categorynews'])->name('categorynews');
Route::post('/sendmessage', [HomeController::class, 'sendmessage'])->name('sendmessage');
Route::get('/new/[{id}/{slug}', [HomeController::class, 'new'])->name('new');




//Admin
Route::middleware('auth')->prefix('admin')->group(function (){
    Route::get('/',[\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin_home');

    Route::get('category', [\App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin_category');
    Route::get('category/add', [\App\Http\Controllers\Admin\CategoryController::class, 'add'])->name('admin_category_add');
    Route::post('category/create', [\App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('admin_category_create');
    Route::get('category/edit/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('admin_category_edit');
    Route::post('category/update/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('admin_category_update');
    Route::get('category/delete/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('admin_category_delete');
    Route::get('category/show', [\App\Http\Controllers\Admin\CategoryController::class, 'show'])->name('admin_category_show');

#News

    Route::prefix('news')->group(function (){

        Route::get('/', [\App\Http\Controllers\Admin\NewsController::class, 'index'])->name('admin_news');
        Route::get('/create', [\App\Http\Controllers\Admin\NewsController::class, 'create'])->name('admin_news_add');
        Route::post('/store', [\App\Http\Controllers\Admin\NewsController::class, 'store'])->name('admin_news_store');
        Route::get('/edit/{id}', [\App\Http\Controllers\Admin\NewsController::class, 'edit'])->name('admin_news_edit');
        Route::post('/update/{id}', [\App\Http\Controllers\Admin\NewsController::class, 'update'])->name('admin_news_update');
        Route::get('/delete/{id}', [\App\Http\Controllers\Admin\NewsController::class, 'destroy'])->name('admin_news_delete');
        Route::get('/show', [\App\Http\Controllers\Admin\NewsController::class, 'show'])->name('admin_news_show');

    });


#News İmage Gallery

    Route::prefix('image')->group(function (){


        Route::get('/create/{news_id}', [\App\Http\Controllers\Admin\ImageController::class, 'create'])->name('admin_image_add');
        Route::post('/store/{news_id}', [\App\Http\Controllers\Admin\ImageController::class, 'store'])->name('admin_image_store');
        Route::get('/delete/{id}/{news_id}', [\App\Http\Controllers\Admin\ImageController::class, 'destroy'])->name('admin_image_delete');
        Route::get('/show', [\App\Http\Controllers\Admin\ImageController::class, 'show'])->name('admin_image_show');

    });


#Setting
    Route::get('setting', [\App\Http\Controllers\Admin\SettingController::class, 'index'])->name('admin_setting');
    Route::post('setting/update}', [\App\Http\Controllers\Admin\SettingController::class, 'update'])->name('admin_setting_update');


});

Route::middleware('auth')->prefix('myaccount')->namespace('myaccount')->group(function (){
    Route::get('/', [UserController::class, 'index'])->name('myprofile');

});


#Admin Messages

Route::prefix('message')->group(function (){

    Route::get('/', [MessageController::class, 'index'])->name('admin_message');
    Route::get('/edit/{id}', [MessageController::class, 'edit'])->name('admin_message_edit');
    Route::post('/update/{id}', [MessageController::class, 'update'])->name('admin_message_update');
    Route::get('/delete/{id}', [MessageController::class, 'destroy'])->name('admin_message_delete');
    Route::get('/show', [MessageController::class, 'show'])->name('admin_message_show');

});








Route::get('/admin/login', [HomeController::class, 'login'])->name('admin_login');
Route::post('/admin/logincheck', [HomeController::class, 'logincheck'])->name('admin_logincheck');
Route::get('/admin/logout', [HomeController::class, 'logout'])->name('admin_logout');




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
