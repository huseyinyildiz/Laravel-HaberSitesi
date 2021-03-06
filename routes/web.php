<?php

use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UsernewsController;
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
Route::get('/categorynews/{id}/{slug}/{status}', [HomeController::class, 'categorynews'])->name('categorynews');
Route::post('/sendmessage', [HomeController::class, 'sendmessage'])->name('sendmessage');
Route::get('/new/[{id}/{slug}', [HomeController::class, 'new'])->name('new');
Route::post('/getnew', [HomeController::class, 'getnew'])->name('getnew');
Route::get('/newlist/{search}', [HomeController::class, 'newlist'])->name('newlist');

Route::middleware('auth')->prefix('user')->namespace('user')->group(function (){

    Route::get('/profile',[UserController::class,'index'])->name('userprofile');

    Route::prefix('news')->group(function (){

        Route::get('/', [UsernewsController::class, 'index'])->name('user_news');
        Route::get('/create', [UsernewsController::class, 'create'])->name('user_news_add');
        Route::post('/store', [UsernewsController::class, 'store'])->name('user_news_store');
        Route::get('/edit/{id}', [UsernewsController::class, 'edit'])->name('user_news_edit');
        Route::post('/update/{id}', [UsernewsController::class, 'update'])->name('user_news_update');
        Route::get('/delete/{id}', [UsernewsController::class, 'destroy'])->name('user_news_delete');
        Route::get('/show', [UsernewsController::class, 'show'])->name('user_news_show');

    });

    #News/User İmage Gallery

    Route::prefix('image')->group(function (){


        Route::get('/create/{news_id}', [\App\Http\Controllers\Admin\ImageController::class, 'create'])->name('user_image_add');
        Route::post('/store/{news_id}', [\App\Http\Controllers\Admin\ImageController::class, 'store'])->name('user_image_store');
        Route::get('/delete/{id}/{news_id}', [\App\Http\Controllers\Admin\ImageController::class, 'destroy'])->name('user_image_delete');
        Route::get('/show', [\App\Http\Controllers\Admin\ImageController::class, 'show'])->name('user_image_show');

    });



});






//Admin
Route::middleware('auth')->prefix('admin')->group(function (){

    #AdminRoleControl
    Route::middleware('admin')->group(function (){




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

#Admin Reviews
        Route::prefix('review')->group(function (){


            Route::get('/', [\App\Http\Controllers\Admin\ReviewController::class, 'index'])->name('admin_review');
            Route::post('/update/{id}', [\App\Http\Controllers\Admin\ReviewController::class, 'update'])->name('admin_review_update');
            Route::get('/delete/{id}', [\App\Http\Controllers\Admin\ReviewController::class, 'destroy'])->name('admin_review_delete');
            Route::get('/show/{id}', [\App\Http\Controllers\Admin\ReviewController::class, 'show'])->name('admin_review_show');

        });


#Admin Setting
        Route::get('setting', [\App\Http\Controllers\Admin\SettingController::class, 'index'])->name('admin_setting');
        Route::post('setting/update}', [\App\Http\Controllers\Admin\SettingController::class, 'update'])->name('admin_setting_update');

#Admin FAQ
        Route::prefix('faq')->group(function (){

            Route::get('/', [FaqController::class, 'index'])->name('admin_faq');
            Route::get('/create', [FaqController::class, 'create'])->name('admin_faq_add');
            Route::post('/store', [FaqController::class, 'store'])->name('admin_faq_store');
            Route::get('/edit/{id}', [FaqController::class, 'edit'])->name('admin_faq_edit');
            Route::post('/update/{id}', [FaqController::class, 'update'])->name('admin_faq_update');
            Route::get('/delete/{id}', [FaqController::class, 'destroy'])->name('admin_faq_delete');
            Route::get('/show', [FaqController::class, 'show'])->name('admin_faq_show');

        });

        #AdminUser
        Route::prefix('user')->group(function (){

            Route::get('/',[\App\Http\Controllers\Admin\UserController::class,'index'])->name('admin_users');
            Route::post('/create',[\App\Http\Controllers\Admin\UserController::class,'create'])->name('admin_user_add');
            Route::post('/store',[\App\Http\Controllers\Admin\UserController::class,'store'])->name('admin_user_store');
            Route::get('/edit/{id}',[\App\Http\Controllers\Admin\UserController::class,'edit'])->name('admin_user_edit');
            Route::post('/update/{id}',[\App\Http\Controllers\Admin\UserController::class,'update'])->name('admin_user_update');
            Route::get('/delete/{id}',[\App\Http\Controllers\Admin\UserController::class,'destroy'])->name('admin_user_delete');
            Route::get('/show/{id}',[\App\Http\Controllers\Admin\UserController::class,'show'])->name('admin_user_show');
            Route::get('/userrole/{id}',[\App\Http\Controllers\Admin\UserController::class,'user_roles'])->name('admin_user_roles');
            Route::post('/userrolestore/{id}',[\App\Http\Controllers\Admin\UserController::class,'user_role_store'])->name('admin_user_role_add');
            Route::get('/userroledelete/{userid}/{roleid}',[\App\Http\Controllers\Admin\UserController::class,'user_role_delete'])->name('admin_user_role_delete');
        });




    });
});

Route::middleware('auth')->prefix('myaccount')->namespace('myaccount')->group(function (){
    Route::get('/', [UserController::class, 'index'])->name('myprofile');
    Route::get('/myreviews', [UserController::class, 'myreviews'])->name('myreviews');
    Route::get('/destroyreview/{id}', [UserController::class, 'destroyreview'])->name('user_review_delete');


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
