<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\DashboardController;


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

Route::get('/', [FrontendController::class, 'index']);
Route::get('product/{slug}', [FrontendController::class, 'productview']);

Route::middleware('auth')->group(function() {

    Route::POST('add-to-cart',[CartController::class, 'addToCart'])->name('add-cart');
    Route::get('cart',[CartController::class, 'viewcart'])->name('cart');
    Route::get('checkout',[CheckoutController::class, 'index'])->name('checkout');
    Route::post('checkout/place-order',[CheckoutController::class, 'placeorder'])->name('placeorder');

    Route::get('orders',[FrontendController::class, 'orderindex']);
    Route::get('view-order/{id}',[FrontendController::class, 'orderview']);

});


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

//Admin Routes
Route::prefix('admin')->group(function(){
    Route::middleware('guest:admin')->group(function(){
        // login routes
        Route::get('login', [AdminController::class, 'index'])->name('admin.login');
        Route::post('login', [AdminController::class, 'store']);
    });
    Route::middleware('admin')->group(function() {
        Route::get('dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard'); 
        // Admin Category routes
        Route::get('category', [CategoryController::class, 'index'])->name('admin.categories.index'); 
        Route::get('category/create', [CategoryController::class, 'create'])->name('admin.categories.create');
        Route::post('category/create', [CategoryController::class, 'store'])->name('admin.category.store');
        Route::get('category/edit/{id}', [CategoryController::class, 'edit'])->name('admin.categories.edit');
        Route::put('category/edit/{id}', [CategoryController::class, 'update'])->name('admin.categories.update');
        Route::get('category/destroy/{id}', [CategoryController::class, 'destroy'])->name('admin.categories.destroy');

        // Admin Product routes
        Route::get('product', [ProductController::class, 'index'])->name('admin.products.index');
        Route::get('product/create', [ProductController::class, 'create'])->name('admin.products.create');
        Route::post('product/create', [ProductController::class, 'store'])->name('admin.products.store');
        Route::get('product/edit/{id}', [ProductController::class, 'edit'])->name('admin.products.edit');
        Route::put('product/edit/{id}', [ProductController::class, 'update'])->name('admin.products.update');
        Route::get('product/destroy/{id}', [ProductController::class, 'destroy'])->name('admin.products.destroy');

        // Admin Orders routes
        Route::get('orders', [OrderController::class, 'index'])->name('admin.orders.index');
        Route::get('view-order/{id}',[OrderController::class, 'view'])->name('admin.orders.view');

        Route::get('user', [DashboardController::class, 'index'])->name('admin.users.index');
        Route::get('view-user/{id}',[DashboardController::class, 'view'])->name('admin.users.view');

        // Admin Tailstack
        

    });
    
    Route::post('logout', [AdminController::class, 'destroy'])->name('admin.logout');
});

