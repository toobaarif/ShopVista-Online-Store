<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// home user side controller 
Route::get('/redirect', [HomeController::class, 'redirect']);
Route::get('/', [HomeController::class, 'index']);
Route::get('/product-detail/{id}', [HomeController::class, 'product_detail']);

// add to cart 
Route::post('/add-cart/{id}', [HomeController::class, 'add_cart']);

// cart show controllers section here 
Route::get('/cart-show', [HomeController::class, 'cart_show']);
Route::get('/cart-remove/{id}', [HomeController::class, 'cart_remove']);

// cash order
Route::get('/cash_order', [HomeController::class, 'cash_order']);
// products view page
Route::get('/products', [HomeController::class, 'products_view']);
// contact view
Route::get('/contact', [HomeController::class, 'contact']);








// admin controller category
Route::get('/catagory', [AdminController::class, 'catagory']);
Route::post('/add_catagory', [AdminController::class, 'add_catagory']);
Route::delete('/delete_category/{id}', [AdminController::class, 'delete_category'])->name('delete_category');

// admin products route
Route::get('/add_product', [AdminController::class, 'add_product']);
// insert or data 
Route::post('/insert_product', [AdminController::class, 'insert_product']);
// show products
Route::get('/show_product', [AdminController::class, 'show_product']);
// delete product
Route::delete('/delete_product/{id}', [AdminController::class, 'delete_product'])->name('delete_product'); 
// edit product
Route::get('/edit_product/{id}', [AdminController::class, 'edit_product']);
// update route
Route::post('/update_product/{id}', [AdminController::class, 'update_product']);
// show orders
Route::get('/show-orders', [AdminController::class, 'show_orders']);
// delivered
Route::post('/delivered/{id}', [AdminController::class, 'delivered']);











