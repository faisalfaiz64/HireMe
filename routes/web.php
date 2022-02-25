<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\clintController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\adminController;

Route::get('/', function () {
    return view('index');
});

Route::get('/verUser',  [MainController::class, 'verifyUser'])->name('verify.user');
Route::get('/verifyseller',  [MainController::class, 'verifyseller'])->name('verify.seller');
/*=========================================================
     Main Controller Route
===========================================================*/

Route::get('/signups',  [MainController::class, 'signups']);
Route::get('/login',  [MainController::class, 'login']);
Route::get('/logout',  [MainController::class, 'logout']);
Route::get('/panel', [MainController::class, 'panel']);
Route::POST('/SavePlans/{id}', [MainController::class, 'SavePlans']);
Route::POST('/search', [MainController::class, 'search']);
Route::get('/ShowProfile/{id}',  [MainController::class, 'ShowProfile']);
Route::POST('/support', [MainController::class, 'support']);
Route::get('viewnotf', [MainController::class, 'viewNotif']);
Route::get('clearNotf', [MainController::class, 'clearNotf']);
/*=========================================================
     Seller Route
===========================================================*/

Route::POST('registerSeller', [SellerController::class, 'register']);
Route::POST('validateSellerAccount', [SellerController::class, 'validatelogin']);
Route::POST('uploadphoto', [SellerController::class, 'storefile']);
Route::get('priceform/{id}', [SellerController::class, 'priceform']);
Route::get('sellerPendingBooking', [SellerController::class, 'sellerPendingBooking']);
Route::get('sellerAcceptedBooking', [SellerController::class, 'sellerAcceptedBooking']);
Route::get('acceptBooking/{id}', [SellerController::class, 'acceptBooking']);
Route::get('rejectBooking/{id}', [SellerController::class, 'rejectBooking']);
Route::get('add_disciption', [SellerController::class, 'add_disciption']);

/*=========================================================
     Clint Route
===========================================================*/

Route::POST('registerClint', [clintController::class, 'register']);
Route::POST('validateClintAccount', [clintController::class, 'validatelogin']);
Route::get('eventDetail/{id}', [clintController::class, 'eventDetail']);
Route::get('conformation/{id}', [clintController::class, 'conformation']);
Route::POST('done_order/{id}/{seller_id}', [clintController::class, 'done_order']);
Route::get('clintPandingBooking', [clintController::class, 'clintPandingBooking']);
Route::get('clintCompleteBooking', [clintController::class, 'clintCompleteBooking']);
Route::get('Feedback/{id}', [clintController::class, 'Feedback']);
Route::POST('FeedBackSave/{seller_id}/{clint_id}', [clintController::class, 'FeedBackSave']);
// -------------------------------------------------------------------------------------------------------

/*=========================================================
     Admin Route
===========================================================*/

Route::POST('registeradmin', [adminController::class, 'register']);
Route::POST('validateAdminAccount', [adminController::class, 'validatelogin']);
Route::get('admin_logout', [adminController::class, 'logout']);
Route::get('all_user', [adminController::class, 'all_user']);
Route::get('freelancer', [adminController::class, 'freelancer']);
Route::get('Phouse', [adminController::class, 'Phouse']);
Route::get('bookings', [adminController::class, 'bookings']);
Route::get('CustomerSupport', [adminController::class, 'CustomerSupport']);
Route::get('/admin', function () {
    return view('admin.admin_dash');
});
Route::get('/adminlogin', function () {
    return view('admin.adminlogin');
});
Route::get('/adminsig', function () {
    return view('admin.adminsignup');
});


// -------------------------------------------------------------------------------------------------------

Route::get('/about', function () {
    return view('about');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/booking', function () {
    return view('booking');
});
Route::get('/works', function () {
   
    return view('works');
});


Route::get('/customersupport', function () {
    return view('customersupport');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/profilelist', function () {
    return view('profiles-lists');
});
