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

Route::get('/', [DisplayController::class, 'index']);
Route::get('/search', [DisplayController::class, 'search']);
Route::get('/item_info', [DisplayController::class, 'itemInfo'])->name('item.info');
Route::get('/review', [DisplayController::class, 'review']);
Route::get('/cart', [DisplayController::class, 'cart']);
Route::get('/login', [DisplayController::class, 'login']);

Route::get('/register', [DisplayController::class, 'register']);
Route::get('/register_confirm', [DisplayController::class, 'registerConfirm'])->name('register.confirm');
Route::get('/register_complete', [DisplayController::class, 'registerComplete']);

Route::get('/pwd_reset', [DisplayController::class, 'pwdReset']);
Route::get('/pwd_send', [DisplayController::class, 'pwdSend']);
Route::get('/pwd_comp', [DisplayController::class, 'pwdComp']);

Route::get('/delivery_address', [DisplayController::class, 'deliveryAddress']);
Route::get('/payment_method', [DisplayController::class, 'paymentMethod']);
Route::get('/order_confirm', [DisplayController::class, 'orderConfirm']);
Route::get('/order_comp', [DisplayController::class, 'orderComp']);

Route::get('/user', [DisplayController::class, 'user']);
Route::get('/bookmark', [DisplayController::class, 'bookmark']);
Route::get('/user_info', [DisplayController::class, 'userInfo']);
Route::get('/user_change', [DisplayController::class, 'userChange']);
Route::get('/buying_history', [DisplayController::class, 'buyingHistory']);
Route::get('/review', [DisplayController::class, 'review']);
Route::get('/deletion', [DisplayController::class, 'deletion']);

Route::get('/admin_menu', [DisplayController::class, 'adminMenu']);
Route::get('/item_list', [DisplayController::class, 'itemList']);
Route::get('/item_datail', [DisplayController::class, 'itemDatail']);
Route::get('/item_prev', [DisplayController::class, 'itemPrev']);
Route::get('/item_regist', [DisplayController::class, 'itemRegist']);
Route::get('/item_update', [DisplayController::class, 'itemUpdate']);
Route::get('/category', [DisplayController::class, 'category']);

Route::get('/sales_search', [DisplayController::class, 'salesSearch']);
Route::get('/sales_detail', [DisplayController::class, 'salesDetail']);
Route::get('/user_list', [DisplayController::class, 'userList']);
Route::get('/user_detail', [DisplayController::class, 'userDetail']);

Route::fallback(function () {
    return redirect(route('index'));
});
