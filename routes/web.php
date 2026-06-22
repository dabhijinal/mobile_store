<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\productController;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('layout', function () {
    return view('layout');
});

//------index---------

Route::get('index', [categoryController::class, 'index']);

//---------about---------
Route::get('about', function () {
    return view('about');
});


//-------Address------------
Route::get('/checkout/{id}', [CheckoutController::class, 'checkout']);
Route::post('/save-address/{id}', [CheckoutController::class, 'save_address']);



//---------order------------
Route::get('/myorder', [ContactController::class, 'my_orders']);


//------------profile-----------
Route::get('/profile', [ContactController::class, 'profile']);
Route::post('/update_profile', [ContactController::class, 'update_profile']);


//---------review--------
Route::post('/store_review', [productController::class, 'store_review']);

//------------cart------------
Route::get('/cart', [CartController::class, 'cart']);
Route::get('/add_to_cart/{id}', [CartController::class, 'add_to_cart']);
Route::get('/delete_cart/{id}', [CartController::class, 'delete_cart']);

//---------payment-------
Route::get('/payment/{id}', [PaymentController::class, 'payment']);
Route::post('/razorpay-payment', [PaymentController::class, 'store']);

//-----shop----
Route::get('shop', [productController::class, 'shop']);
Route::get('/shop_detail/{id}', [ProductController::class, 'shop_detail']);

//--------contact------------
Route::get('contact', [ContactController::class, 'contact']);
Route::post('/contact_save', [ContactController::class, 'contact_save']);

//----------login----------
Route::get('login', [AuthController::class, 'login']);
Route::post('login', [AuthController::class, 'loginsave']);


//----------Register----------
Route::get('register', [AuthController::class, 'register']);
Route::post('register', [AuthController::class, 'registersave']);

//----------logout-----------
Route::get('logout', [AuthController::class, 'logout']);

//-------------Admin-------------
Route::get('admin/dashboard', [AdminController::class, 'home']);
Route::get('admin/user_view', [AdminController::class, 'user_view']);
Route::get('admin/order_view', [CheckoutController::class, 'order_view']);
Route::get('admin/review_view', [AdminController::class, 'review_view']);
Route::get('admin/dashboard', [AdminController::class, 'dashboard']);

//-----admin-category---------
Route::get('admin/category_view', [CategoryController::class, 'category_view']);
Route::get('admin/category_add', [CategoryController::class, 'category_add']);
Route::post('category_save', [CategoryController::class, 'category_save']);
Route::get('delete_category/{id}', [CategoryController::class, 'delete_category']);
Route::get('edit_category/{id}', [CategoryController::class, 'edit_category']);
Route::post('categoryedit_save', [CategoryController::class, 'categoryedit_save']);

//--------admin-product-------
Route::get('admin/product_view', [productController::class, 'product_view']);
Route::get('admin/product_add', [productController::class, 'product_add']);
Route::get('delete_product/{id}', [productController::class, 'delete_product']);
Route::post('product_save', [productController::class, 'product_save']);
Route::get('edit_product/{id}', [productController::class, 'edit_product']);
Route::post('productedit_save', [productController::class, 'productedit_save']);
