<?php

use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Client\CategoryController as ClientCategoryController;
use App\Http\Controllers\Admin\DiscountController;
use App\Http\Controllers\Admin\FeaturedCategoryController;
use App\Http\Controllers\Admin\OfferController;
use App\Http\Controllers\Admin\PictureController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductPropertyController;
use App\Http\Controllers\Admin\PropertyController;
use App\Http\Controllers\Admin\PropertyGroupController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CommentController as AdminCommentController;
use App\Http\Controllers\Client\CartController;
use App\Http\Controllers\Client\CommentController;
use App\Http\Controllers\Client\LikeController;
use App\Http\Controllers\client\OrderController;
use App\Http\Controllers\Admin\OrderController as AdminOrderController;
use App\Http\Controllers\client\ProductController as ClientProductController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\ProfileController;
use App\Http\Controllers\Client\RegisterController;
use App\Http\Middleware\CheckPermission;
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



Route::prefix('')->name('client.')->group(function () {

    Route::get('/', [HomeController::class, 'index'])->name('home');

    Route::get('/likes/',[LikeController::class, 'index'])->name('likes.index');
    Route::post('/likes/{product}',[LikeController::class,'store'])->name('like');
    Route::delete('/likes/{product}',[LikeController::class,'destroy'])->name('likes.destroy');

    Route::resource('categories', ClientCategoryController::class);
    Route::get('/shop', [ClientProductController::class , 'index'])->name('products.index');
    Route::get('/products/{product}', [ClientProductController::class , 'show'])->name('products.show');
    Route::post('/products/{product}/comments/store', [CommentController::class , 'store'])->name('products.comments.store');
    Route::get('/register',[RegisterController::class , 'create'])->name('register');
    Route::get('/logout',[RegisterController::class , 'logout'])->name('logout');
    Route::post('/register/sendmail',[RegisterController::class , 'sendmail'])->name('register.sendmail');
    Route::get('/register/otp/{user}',[RegisterController::class , 'otp'])->name('register.otp');
    Route::post('/register/verifyOtp/{user}',[RegisterController::class , 'verifyOtp'])->name('register.verifyOtp');

    Route::get('/profile',[ProfileController::class , 'index'])->middleware('auth')->name('profile');

    Route::get('/cart',[CartController::class , 'index'])->name('cart.index');
    Route::post('/cart/{product}',[CartController::class , 'store'])->name('cart.store');
    Route::delete('/cart/{product}',[CartController::class , 'destroy'])->name('cart.destroy');


    Route::get('/orders/create',[OrderController::class , 'create'])->name('orders.create');
    Route::post('/orders/store',[OrderController::class , 'store'])->name('orders.store');
    Route::get('/orders/payment/callback',[OrderController::class , 'callback'])->name('orders.callback');
    Route::get('/orders/{order}',[OrderController::class , 'show'])->name('orders.show');
});

    Route::prefix('/adminpanel')->middleware([
        CheckPermission::class. ':view-dashboard',
        'auth'
    ])->group(function () {

    Route::get('/', function (){
        return view('admin.home');
    })->name('home');

    Route::resource('categories', CategoryController::class);
    Route::resource('brands', BrandController::class);
    Route::resource('sliders', SliderController::class);
    Route::resource('products', ProductController::class);
    Route::resource('products.pictures', PictureController::class);
    Route::resource('products.discounts', DiscountController::class);


    Route::get('/products/{product}/properties/create}', [ProductPropertyController::class, 'create'])->name('products.properties.create');
    Route::get('/products/{product}/properties/}',[ProductPropertyController::class,'index'])->name('products.properties.index');
    Route::post('/products/{product}/properties/}',[ProductPropertyController::class,'store'])->name('products.properties.store');


    Route::get('/products/{product}/comments/}',[AdminCommentController::class,'index'])->name('products.comments.index');
    Route::get('/products/{comment}/comments/{product}',[AdminCommentController::class,'show'])->name('products.comments.show');
    Route::delete('/comments/{comment}',[AdminCommentController::class,'destroy'])->name('comments.destroy');


    Route::resource('propertyGroups', PropertyGroupController::class);
    Route::resource('properties', PropertyController::class);

    Route::resource('offers', OfferController::class);

    Route::resource('roles', RoleController::class);
    Route::resource('users',UserController::class);

    Route::get('/featuredCategory',[FeaturedCategoryController::class,'create'])->name('featuredCategory.create');
    Route::post('/featuredCategory',[FeaturedCategoryController::class,'store'])->name('featuredCategory.store');

    Route::get('/orders',[AdminOrderController::class,'index'])->name('orders.index');
    Route::get('/orders/{order}',[AdminOrderController::class,'show'])->name('orders.show');



});
