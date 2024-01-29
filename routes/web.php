<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserDashboardController\UserDashboard;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/skorings', [App\Http\Controllers\SkoringController::class, 'index']);

// userAuthentication
Auth::routes();

// productPage
Route::resource('pupuks', App\Http\Controllers\Produk\PupukController::class);
Route::resource('bibits', App\Http\Controllers\Produk\BibitController::class);
Route::resource('obatans', App\Http\Controllers\Produk\ObatObatanController::class);
Route::resource('alsintans', App\Http\Controllers\Produk\AlsintanController::class);

// comodityPage
Route::resource('cabes', App\Http\Controllers\Komoditas\CabeController::class);
Route::resource('kedelais', App\Http\Controllers\Komoditas\KedelaiController::class);
Route::resource('jagungs', App\Http\Controllers\Komoditas\JagungController::class);
Route::resource('kelapasawits', App\Http\Controllers\Komoditas\KelapaSawitController::class);
Route::resource('padis', App\Http\Controllers\Komoditas\PadiController::class);
Route::resource('abouts', App\Http\Controllers\ProfileEmutan\AboutController::class);
Route::resource('contacts', App\Http\Controllers\ProfileEmutan\ContactController::class);

// mainBlogsPage
Route::resource('blogs', App\Http\Controllers\BlogController::class);
Route::get('blogs_s', [App\Http\Controllers\SinglePageController::class, 'blogs_s']);
Route::get('blogs_d', [App\Http\Controllers\SinglePageController::class, 'blogs_d']);

// userHomePage & Payment
Route::get('userpages', [App\Http\Controllers\UserHomePage::class, 'index']);
Route::get('sellerDashbaords', [App\Http\Controllers\PaymentController\SellerDashboard::class, 'index']);
Route::get('carts', [App\Http\Controllers\PaymentController\Payment\Cart::class, 'index']);
Route::get('checkouts', [App\Http\Controllers\PaymentController\Payment\Chechout::class, 'index']);
Route::get('payments', [App\Http\Controllers\PaymentController\Payment\Payment::class, 'index']);
Route::get('pendingPayment', [UserDashboard::class, 'pendingPayment']);
Route::get('paymentStatus', [App\Http\Controllers\PaymentController\Payment\PaymentStatus::class, 'index']);
Route::get('dashboards', [App\Http\Controllers\UserDashboardController\UserDashboard::class, 'dashboard']);
Route::get('projects', [UserDashboard::class, 'project']);
Route::get('userScoring', [UserDashboard::class, 'userScoring']);
Route::get('purchases', [UserDashboard::class, 'purchase']);
Route::get('purchaseHistory', [UserDashboard::class, 'purchaseHistory']);
Route::get('purchaseHistoryPending', [UserDashboard::class, 'purchaseHistoryPending']);
Route::get('funding', [UserDashboard::class, 'funding']);
Route::get('bankAccount', [UserDashboard::class, 'bankAccount']);
Route::get('address', [UserDashboard::class, 'address']);
Route::get('continueData', [UserDashboard::class, 'continueData']);
Route::get('continueDataFarmer', [UserDashboard::class, 'continueDataFarmer']);
Route::resource('profiles', App\Http\Controllers\Profile\ProfileController::class);

//WebAdmin
Route::get('/admin', [AdminController::class, 'user']);
Route::get('/admin/user', [AdminController::class, 'user']);
Route::get('/admin/produk-pupuk', [AdminController::class, 'pupuk']);
Route::get('/admin/produk-bibit', [AdminController::class, 'bibit']);
Route::get('/admin/produk-obat', [AdminController::class, 'obat']);
Route::get('/admin/produk-alsintan', [AdminController::class, 'alsintan']);
Route::get('/admin/proyek-pendanaan', [AdminController::class, 'pendanaan']);
Route::get('admin/transaksi',[AdminController::class, 'transaksi']);
