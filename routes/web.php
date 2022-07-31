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
        Route::get('categories', [CategoryController::class, 'index'])->name('admin.categories.index'); 
        Route::get('category/create', [CategoryController::class, 'create'])->name('admin.categories.create');
        Route::post('category/create', [CategoryController::class, 'store'])->name('admin.category.store');
        Route::get('category/edit/{id}', [CategoryController::class, 'edit'])->name('admin.categories.edit');
        Route::put('category/edit/{id}', [CategoryController::class, 'update'])->name('admin.categories.update');
        Route::get('category/destroy/{id}', [CategoryController::class, 'destroy'])->name('admin.categories.destroy');

        // Admin Product routes
        Route::get('products', [ProductController::class, 'index'])->name('admin.products.index');
        Route::get('product/create', [ProductController::class, 'create'])->name('admin.products.create');
        Route::post('product/create', [ProductController::class, 'store'])->name('admin.products.store');
        Route::get('product/edit/{id}', [ProductController::class, 'edit'])->name('admin.products.edit');
        Route::put('product/edit/{id}', [ProductController::class, 'update'])->name('admin.products.update');
        Route::get('product/destroy/{id}', [ProductController::class, 'destroy'])->name('admin.products.destroy');

        // Admin Orders routes
        Route::get('orders', [OrderController::class, 'index'])->name('admin.orders.index');
        Route::get('view-order/{id}',[OrderController::class, 'view'])->name('admin.orders.view');

        Route::get('view-user/{id}',[DashboardController::class, 'view'])->name('admin.users.view');
        Route::get('customers', [DashboardController::class, 'index'])->name('admin.users.customers');

        // Admin Tailstack
        Route::get('ecommerce/product-detail', function(){
            return View('admin.tailstack.ecommerce.product-detail');
        });
        Route::get('ecommerce/order', function(){
            return View('admin.tailstack.ecommerce.order');
        });
        Route::get('ecommerce/order-detail', function(){
            return View('admin.tailstack.ecommerce.order-detail');
        });
        Route::get('ecommerce/cart', function(){
            return View('admin.tailstack.ecommerce.cart');
        });
        Route::get('ecommerce/checkout', function(){
            return View('admin.tailstack.ecommerce.checkout');
        });
        Route::get('ecommerce/seller', function(){
            return View('admin.tailstack.ecommerce.checkout');
        });
        Route::get('ecommerce/invoice', function(){
            return View('admin.tailstack.ecommerce.checkout');
        });
        Route::get('project/list', function(){
            return View('admin.tailstack.project.list');
        });
        Route::get('project/detail', function(){
            return View('admin.tailstack.project.detail');
        });
        Route::get('project/create', function(){
            return View('admin.tailstack.project.create');
        });
        Route::get('authentication/register-basic', function(){
            return View('admin.tailstack.authentication.register-basic');
        });
        Route::get('authentication/register-ilustration', function(){
            return View('admin.tailstack.authentication.register-ilustration');
        });
        Route::get('authentication/login-basic', function(){
            return View('admin.tailstack.authentication.login-basic');
        });
        Route::get('authentication/login-ilustration', function(){
            return View('admin.tailstack.authentication.login-ilustration');
        });
        Route::get('authentication/forgot-password', function(){
            return View('admin.tailstack.authentication.forgot-password');
        });
        Route::get('authentication/confirm-email', function(){
            return View('admin.tailstack.authentication.confirm-email');
        });
        Route::get('authentication/change-password', function(){
            return View('admin.tailstack.authentication.change-password');
        });
        Route::get('authentication/logout-page', function(){
            return View('admin.tailstack.authentication.logout-page');
        });
        Route::get('pages-profile', function(){
            return View('admin.tailstack.pages-profile');
        });
        Route::get('pages-service', function(){
            return View('admin.tailstack.pages-service');
        });
        Route::get('pages-faq', function(){
            return View('admin.tailstack.pages-faq');
        });
        Route::get('pages-pricing', function(){
            return View('admin.tailstack.pages-pricing');
        });
        Route::get('pages-maintenance', function(){
            return View('admin.tailstack.pages-maintenance');
        });
        Route::get('pages-404', function(){
            return View('admin.tailstack.pages-404');
        });
        Route::get('pages-starter', function(){
            return View('admin.tailstack.pages-starter');
        });
        Route::get('layout-sidedark', function(){
            return View('admin.tailstack.layout-sidedark');
        });
        Route::get('layout-dark', function(){
            return View('admin.tailstack.layout-dark');
        });
        Route::get('layout-rtl', function(){
            return View('admin.tailstack.layout-rtl');
        });
        Route::get('layout-preloader', function(){
            return View('admin.tailstack.layout-preloader');
        });
        Route::get('widgets', function(){
            return View('admin.tailstack.widgets');
        });
        Route::get('components/accordion', function(){
            return View('admin.tailstack.components.accordion');
        });
        Route::get('components/alerts', function(){
            return View('admin.tailstack.components.alerts');
        });
        Route::get('components/badge', function(){
            return View('admin.tailstack.components.badge');
        });
        Route::get('components/breadcrumb', function(){
            return View('admin.tailstack.components.breadcrumb');
        });
        Route::get('components/buttons', function(){
            return View('admin.tailstack.components.buttons');
        });
        Route::get('components/card', function(){
            return View('admin.tailstack.components.card');
        });
        Route::get('components/carousel', function(){
            return View('admin.tailstack.components.carousel');
        });
        Route::get('components/accordion', function(){
            return View('admin.tailstack.components.accordion');
        });
        Route::get('components/collapse', function(){
            return View('admin.tailstack.components.collapse');
        });
        Route::get('components/devices', function(){
            return View('admin.tailstack.components.devices');
        });
        Route::get('components/dropdowns', function(){
            return View('admin.tailstack.components.dropdowns');
        });
        Route::get('components/grid', function(){
            return View('admin.tailstack.components.grid');
        });
        Route::get('components/list-group', function(){
            return View('admin.tailstack.components.list-group');
        });
        Route::get('components/lightbox', function(){
            return View('admin.tailstack.components.lightbox');
        });
        Route::get('components/map', function(){
            return View('admin.tailstack.components.map');
        });
        Route::get('components/modal', function(){
            return View('admin.tailstack.components.modal');
        });
        Route::get('components/avatar', function(){
            return View('admin.tailstack.components.avatar');
        });
        Route::get('components/navbar', function(){
            return View('admin.tailstack.components.navbar');
        });
        Route::get('components/notification', function(){
            return View('admin.tailstack.components.notification');
        });
        Route::get('components/offcanvas', function(){
            return View('admin.tailstack.components.offcanvas');
        });
        Route::get('components/pagination', function(){
            return View('admin.tailstack.components.pagination');
        });
        Route::get('components/popovers', function(){
            return View('admin.tailstack.components.popovers');
        });
        Route::get('components/progress', function(){
            return View('admin.tailstack.components.progress');
        });
        Route::get('components/ribbon', function(){
            return View('admin.tailstack.components.ribbon');
        });
        Route::get('components/scrollbar', function(){
            return View('admin.tailstack.components.scrollbar');
        });
        Route::get('components/spinners', function(){
            return View('admin.tailstack.components.spinners');
        });
        Route::get('components/sweetalert', function(){
            return View('admin.tailstack.components.sweetalert');
        });
        Route::get('components/tabs', function(){
            return View('admin.tailstack.components.tabs');
        });
        Route::get('components/tooltips', function(){
            return View('admin.tailstack.components.tooltips');
        });
        Route::get('forms/basic', function(){
            return View('admin.tailstack.forms.basic');
        });
        Route::get('forms/datepicker', function(){
            return View('admin.tailstack.forms.datepicker');
        });
        Route::get('forms/editor', function(){
            return View('admin.tailstack.forms.editor');
        });
        Route::get('forms/input-tags', function(){
            return View('admin.tailstack.forms.input-tags');
        });
        Route::get('forms/uploader', function(){
            return View('admin.tailstack.forms.uploader');
        });
        Route::get('forms/validation', function(){
            return View('admin.tailstack.forms.validation');
        });
        Route::get('forms/layout', function(){
            return View('admin.tailstack.forms.layout');
        });
        Route::get('content/typography', function(){
            return View('admin.tailstack.content.typography');
        });
        Route::get('content/tables', function(){
            return View('admin.tailstack.content.tables');
        });
        Route::get('content/images', function(){
            return View('admin.tailstack.content.images');
        });
        Route::get('content/embed-video', function(){
            return View('admin.tailstack.content.embed-video');
        });
        Route::get('content/icons', function(){
            return View('admin.tailstack.content.icons');
        });
        Route::get('charts', function(){
            return View('admin.tailstack.charts');
        });
        Route::get('file-manager', function(){
            return View('admin.tailstack.file-manager');
        });
        Route::get('docs/introduction', function(){
            return View('admin.tailstack.docs.introduction');
        });
        Route::get('docs/tools', function(){
            return View('admin.tailstack.docs.tools');
        });
        Route::get('docs/customize', function(){
            return View('admin.tailstack.docs.customize');
        });
        Route::get('docs/rtl', function(){
            return View('admin.tailstack.docs.rtl');
        });
        Route::get('docs/credits', function(){
            return View('admin.tailstack.docs.credits');
        });
        Route::get('docs/changelog', function(){
            return View('admin.tailstack.docs.changelog');
        });
        Route::get('docs/changelog', function(){
            return View('admin.tailstack.docs.changelog');
        });
        Route::get('docs/changelog', function(){
            return View('admin.tailstack.docs.changelog');
        });

    });
    
    Route::post('logout', [AdminController::class, 'destroy'])->name('admin.logout');
});

