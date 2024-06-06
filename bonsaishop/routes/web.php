<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\GoogleAuthController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Middleware\AdminMiddleware;

Route::get('', [
    ProductsController::class,
    'index'
])->name('products.index');

Route::get('about', function () {
    return view('about');
});

Route::get('contact', function() {
    return view('contact');
}); 

Route::get('auth/google', [GoogleAuthController::class, 'redirect'])->name('google-auth');
Route::get('auth/google/call-back', [GoogleAuthController::class, 'callbackGoogle']);
Route::post('/logout', [GoogleAuthController::class, 'logout'])->name('logout');

Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::get('products', [
    ProductsController::class,
    'index'
])->name('products.index');
Route::get('/product/{slug}', [ProductsController::class, 'showDetail'])->name('products.detail');
Route::get('products/{slug}', [ProductsController::class, 'category'])->name('products.category');

Route::get('/post',[\App\Http\Controllers\HomeController::class,'posts'])->name('post');
Route::get('/post/{id}',[\App\Http\Controllers\HomeController::class,'showPost'])->name('posts.show-web');
Route::get('/carts',[\App\Http\Controllers\HomeController::class,'carts'])->name('carts');
Route::post('/carts-add/{id}',[\App\Http\Controllers\HomeController::class,'addToCart'])->name('add_to_cart');
Route::post('/checkout',[\App\Http\Controllers\HomeController::class,'checkout'])->name('checkout');
Route::get('/checkout/status',[\App\Http\Controllers\HomeController::class,'checkoutStatus']);


Route::prefix('admin')->middleware([AdminMiddleware::class])->group(function () {

    Route::get('/products_management', [ProductsController::class, 'showFormAdmin'])->name('products_management');
    Route::get('/create-product', [ProductsController::class, 'create'])->name('product.create');
    Route::post('/products-store', [ProductsController::class, 'store'])->name('products.store');
    Route::get('/products/{id}/edit', [ProductsController::class, 'edit'])->name('products.edit');
    Route::put('/products/{id}', [ProductsController::class, 'update'])->name('products.update');
    Route::delete('/products/{id}', [ProductsController::class, 'destroy'])->name('products.destroy');

    Route::get('/user_management', [UserController::class, 'showFormAdmin'])->name('user_management');
    Route::post('/upgrade', [UserController::class, 'upgrade'])->name('user.upgrade');
    Route::post('/downgrade', [UserController::class, 'downgrade'])->name('user.downgrade');

    Route::get('/post_management', [\App\Http\Controllers\PostController::class, 'index'])->name('post_management');

    Route::get('/category_management', [CategoryController::class, 'showFormAdmin'])->name('category_management');
    Route::post('/category_management', [CategoryController::class, 'postAddCategory'])->name('add.category');
    Route::delete('/category/{id}', [CategoryController::class, 'deleteCategory'])->name('delete.category');
    Route::get('/category/{id}/edit', [CategoryController::class, 'editCategory'])->name('edit.category');
    Route::put('/category/{id}', [CategoryController::class, 'updateCategory'])->name('update.category');
    
    Route::get('',[\App\Http\Controllers\AdminController::class,'index'])->name('admin.index');
    Route::resource('posts', \App\Http\Controllers\PostController::class);
    
});
