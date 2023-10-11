<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Tenant\HomeController;
use App\Http\Controllers\Tenant\PostController;
use App\Http\Controllers\tenant\TourController;
use App\Http\Controllers\Tenant\MessageController;
use App\Http\Controllers\Tenant\ProductController;
use App\Http\Controllers\Tenant\ProfileController;
use App\Http\Controllers\Tenant\CategoryController;
use App\Http\Controllers\Tenant\DashboardController;
use App\Http\Controllers\Tenant\InfografisController;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomain;
use Stancl\Tenancy\Middleware\InitializeTenancyBySubdomain;
use Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains;

/*
|--------------------------------------------------------------------------
| Tenant Routes
|--------------------------------------------------------------------------
|
| Here you can register the tenant routes for your application.
| These routes are loaded by the TenantRouteServiceProvider.
|
| Feel free to customize them however you want. Good luck!
|
*/

Route::middleware([
    'web',
    InitializeTenancyByDomain::class,
    PreventAccessFromCentralDomains::class,
    // InitializeTenancyBySubdomain::class,
])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('tenant.home');
    Route::get('/berita', [HomeController::class, 'article'])->name('tenant.berita');
    Route::get('/berita/{slug}', [HomeController::class, 'articleDetail'])->name('tenant.berita-detail');
    Route::get('/produk', [HomeController::class, 'product'])->name('tenant.produk');
    Route::get('/produk/{slug}', [HomeController::class, 'productDetail'])->name('tenant.produk-detail');
    Route::get('/kontak', [HomeController::class, 'contact'])->name('tenant.contact');
    Route::post('/send-message', [HomeController::class, 'sendMessage'])->name('tenant.send-message');
    Route::get('/infografis', [HomeController::class, 'infografis'])->name('tenant.infografis');
    Route::get('/wisata', [HomeController::class, 'tour'])->name('tenant.wisata');
    Route::get('/wisata/{slug}', [HomeController::class, 'tourDetail'])->name('tenant.wisata-detail');
    Auth::routes();

    Route::middleware(['is_tenant'])->name('tenant.')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

        // Profile
        Route::resource('profile', ProfileController::class)->only(['index', 'update']);

        // Category Post
        Route::resource('category', CategoryController::class)->except(['show']);

        // Post
        Route::resource('post', PostController::class)->except(['show']);
        Route::post('post/toggle-publish', [PostController::class, 'togglePublish'])->name('post.togglePublish');
        Route::post('post/upload', [PostController::class, 'upload'])->name('post.upload');

        // Product
        Route::resource('product', ProductController::class);
        Route::post('product/toggle-publish', [ProductController::class, 'togglePublish'])->name('product.togglePublish');
        Route::delete('product/delete-image/{product}/{id}', [ProductController::class, 'deleteImage'])->name('product.deleteImage');

        // Tour
        Route::resource('tour', TourController::class);
        Route::post('tour/toggle-publish', [TourController::class, 'togglePublish'])->name('tour.togglePublish');
        Route::delete('tour/delete-image/{tour}/{id}', [TourController::class, 'deleteImage'])->name('tour.deleteImage');

        // Message
        Route::resource('message', MessageController::class)->only(['index']);

        // Infografis
        Route::get('infografis/setting', [InfografisController::class, 'index'])->name('infografis.setting');
        Route::get('infografis/setting-infografis', [InfografisController::class, 'editInfografis'])->name('infografis.edit-informasi');
        Route::post('infografis/setting-infografis', [InfografisController::class, 'postInfografis'])->name('infografis.post-informasi');
        Route::get('infografis/setting-demografi-pendidikan', [InfografisController::class, 'editDemografiPendidikan'])->name('infografis.edit-demografi-pendidikan');
        Route::post('infografis/setting-demografi-pendidikan', [InfografisController::class, 'postDemografiPendidikan'])->name('infografis.post-demografi-pendidikan');
        Route::get('infografis/setting-demografi-pekerjaan', [InfografisController::class, 'editDemografiPekerjaan'])->name('infografis.edit-demografi-pekerjaan');
        Route::post('infografis/setting-demografi-pekerjaan', [InfografisController::class, 'postDemografiPekerjaan'])->name('infografis.post-demografi-pekerjaan');
    });
});
