<?php

use App\Http\Controllers\Admin\CategoryAdminController;
use App\Http\Controllers\Admin\MessageAdminController;
use App\Http\Controllers\Admin\PostAdminController;
use App\Http\Controllers\Admin\ReviewAdminController;
use App\Http\Controllers\Admin\SeoAdminController;
use App\Http\Controllers\Admin\WorkAdminController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\Admin\TextVariableAdminController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::middleware(\App\Http\Middleware\WWWMiddleware::class)->group(function () {


    Route::get('/', function () {
        return redirect(app()->getLocale());
    });

    Route::controller(SitemapController::class)->group(function () {
        Route::get('/sitemap', 'index');
        Route::get('/sitemap/posts', 'posts');
        Route::get('/sitemap/categories', 'categories');
    });

    Route::controller(LanguageController::class)->group(function () {
        Route::post('/language-switch', 'switch')->name('language.switch');
    });
    Route::group(['prefix' => '{locale}',
        'where' => ['locale' => '[a-zA-Z]{2}'],
        'middleware' => 'setlocale'], function () {

        Route::controller(MainController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/portfolio', 'portfolio')->name('portfolio');
            Route::get('/price', 'price')->name('price');
            Route::get('/reviews', 'reviews')->name('reviews');
            Route::get('/contact', 'contact')->name('contact');
            Route::post('/contact', 'store')->name('contact.store');
        });
        Route::controller(PostController::class)->prefix('blog')->group(function () {
            Route::get('/', 'index')->name('post.index');
            Route::get('/search', 'search')->name('post.search');
            Route::get('/{post}~{slug}', 'show')->name('post.show');
        });
    });


    Route::prefix('admin')->middleware('auth')->group(function () {
        Route::controller(PostAdminController::class)->prefix('posts')->group(function () {
            Route::get('/', 'index')->name('admin.post.index');
            Route::get('/create', 'create')->name('admin.post.create');
            Route::post('/', 'store')->name('admin.post.store');
            Route::get('{post}/edit', 'edit')->name('admin.post.edit');
            Route::patch('{post}', 'update')->name('admin.post.update');
            Route::delete('{post}/destroy', 'destroy')->name('admin.post.destroy');
        });
        Route::group(['prefix' => 'categories',], function () {
            Route::get('/', [CategoryAdminController::class, 'index'])->name('admin.category.index');
            Route::get('/create', [CategoryAdminController::class, 'create'])->name('admin.category.create');
            Route::post('/', [CategoryAdminController::class, 'store'])->name('admin.category.store');
            Route::get('/edit/{category}', [CategoryAdminController::class, 'edit'])->name('admin.category.edit');
            Route::patch('/{category}', [CategoryAdminController::class, 'update'])->name('admin.category.update');
            Route::delete('/{category}', [CategoryAdminController::class, 'destroy'])->name('admin.category.destroy');

        });


        Route::controller(ReviewAdminController::class)->prefix('reviews')->group(function () {
            Route::get('/', 'index')->name('admin.review.index');
            Route::get('/create', 'create')->name('admin.review.create');
            Route::post('/', 'store')->name('admin.review.store');
            Route::get('{review}/edit', 'edit')->name('admin.review.edit');
            Route::patch('{review}', 'update')->name('admin.review.update');
            Route::delete('{review}/destroy', 'destroy')->name('admin.review.destroy');
        });
        Route::controller(MessageAdminController::class)->prefix('messages')->group(function () {
            Route::get('/', 'index')->name('admin.message.index');
            Route::delete('{message}/destroy', 'destroy')->name('admin.message.destroy');
        });
        Route::controller(WorkAdminController::class)->prefix('portfolio')->group(function () {
            Route::get('/', 'index')->name('admin.work.index');
            Route::post('/', 'store')->name('admin.work.store');
            Route::delete('{work}/destroy', 'destroy')->name('admin.work.destroy');
        });
        Route::controller(SeoAdminController::class)->prefix('seo')->group(function () {
            Route::get('/', 'index')->name('admin.seo.index');
            Route::get('/create', 'create')->name('admin.seo.create');
            Route::post('/', 'store')->name('admin.seo.store');
            Route::get('{seo}/edit', 'edit')->name('admin.seo.edit');
            Route::patch('{seo}', 'update')->name('admin.seo.update');
            Route::delete('{seo}/destroy', 'destroy')->name('admin.seo.destroy');
        });
        Route::controller(TextVariableAdminController::class)->prefix('text-variables')->group(function () {
            Route::get('/', 'index')->name('admin.text_variables.index');
            Route::get('/create', 'create')->name('admin.text_variables.create');
            Route::post('/', 'store')->name('admin.text_variables.store');
            Route::get('/{textVariable}/edit', 'edit')->name('admin.text_variables.edit');
            Route::patch('/{textVariable}', 'update')->name('admin.text_variables.update');
            Route::delete('/{textVariable}', 'destroy')->name('admin.text_variables.destroy');
        });
    });

});
Route::get('/img/{path}', function ($path) {
    $file = public_path('img/' . $path);
    if (file_exists($file)) {
        return response()->file($file);
    }
    abort(404);
})->where('path', '.*')->middleware('optimize.images');

Route::post('/upload-image', [ImageController::class, 'upload'])->name('image.upload');

Auth::routes();
