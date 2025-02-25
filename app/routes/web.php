<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\HelloController;
use App\Http\Controllers\DisplayController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
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

Route::get('/', [DisplayController::class, 'index'])->name('index');
Route::get('/search', [DisplayController::class, 'search']);
Route::get('/item_info', [DisplayController::class, 'itemInfo'])->name('item.info');
Route::get('/review', [DisplayController::class, 'review']);
Route::get('/cart', [DisplayController::class, 'cart'])->name('cart');
Route::get('/login', [DisplayController::class, 'login'])->name('login');

Route::get('/register', [DisplayController::class, 'register'])->name('register');
Route::get('/register_confirm', [DisplayController::class, 'registerConfirm'])->name('register.confirm');
Route::get('/register_complete', [DisplayController::class, 'registerComplete']);

Route::get('/pwd_reset', [DisplayController::class, 'pwdReset'])->name('pwd.reset');
Route::get('/pwd_send', [DisplayController::class, 'pwdSend'])->name('pwd.send');
Route::get('/pwd_comp', [DisplayController::class, 'pwdComp'])->name('pwd.comp');

Route::get('/delivery_address', [DisplayController::class, 'deliveryAddress'])->name('delivery.address');
Route::get('/payment_method', [DisplayController::class, 'paymentMethod'])->name('payment.method');
Route::get('/order_confirm', [DisplayController::class, 'orderConfirm'])->name('order.confirm');
Route::get('/order_comp', [DisplayController::class, 'orderComp'])->name('order.comp');

Route::get('/user', [DisplayController::class, 'user'])->name('user');
Route::get('/bookmark', [DisplayController::class, 'bookmark'])->name('bookmark');
Route::get('/user_info', [DisplayController::class, 'userInfo'])->name('user.info');
Route::get('/user_change', [DisplayController::class, 'userChange'])->name('user.change');
Route::get('/buying_history', [DisplayController::class, 'buyingHistory'])->name('buying.history');
Route::get('/review', [DisplayController::class, 'review'])->name('review');
Route::get('/deletion', [DisplayController::class, 'deletion'])->name('deletion');

Route::get('/admin_menu', [DisplayController::class, 'adminMenu'])->name('admin.menu');
Route::get('/item_list', [DisplayController::class, 'itemList'])->name('item.list');
Route::get('/item_datail', [DisplayController::class, 'itemDatail'])->name('item.datail');
Route::get('/item_prev', [DisplayController::class, 'itemPrev'])->name('item.prev');
Route::get('/item_regist', [DisplayController::class, 'itemRegist'])->name('item.regist');
Route::get('/item_update', [DisplayController::class, 'itemUpdate'])->name('item.update');
Route::get('/category', [DisplayController::class, 'category'])->name('category');

Route::get('/sales_search', [DisplayController::class, 'salesSearch'])->name('sales.search');
Route::get('/sales_detail', [DisplayController::class, 'salesDetail'])->name('sales.detail');
Route::get('/user_list', [DisplayController::class, 'userList'])->name('user.list');
Route::get('/user_detail', [DisplayController::class, 'userDetail'])->name('user.detail');

Route::fallback(function () {
    return redirect(route('index'));
});
