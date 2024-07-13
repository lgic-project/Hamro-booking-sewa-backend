<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HotelController;
use App\Http\Controllers\LocalUsersController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\app\hotelappController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\MobAuthController;
use App\Http\Controllers\login\LoginController;
use App\Http\Controllers\DashboardController;
use GuzzleHttp\Psr7\Request;

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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function () {

});

// route for mobile app
Route::get('/json-owner', [HotelController::class, 'listMobile'])->name('list.mob');
Route::get('/json-room', [hotelappController::class, 'applistMobile'])->name('list.mobile');
Route::get('/hotel/json-room', [RoomController::class, 'listMobile'])->name('list.app.mobile');
Route::get('/userData/json', [LocalUsersController::class, 'userinfo'])->name('userinfo.list');
Route::post('/booking/store', [BookingController::class, 'store'])->name('booking.store');
Route::get('/booking-json', [BookingController::class, 'bookinginfo'])->name('booking.json');
Route::get('/dashboard/view-booking/{id}', [App\Http\Controllers\BookingController::class, 'bookingDetails'])->name('bookingDetails');
Route::get('/dashboard/view-booking-json-listing/{id}', [App\Http\Controllers\BookingController::class, 'bookingListingJson'])->name('bookingListingJson');
Route::get('/dashboard/view-booking-json/{id}', [App\Http\Controllers\BookingController::class, 'bookingDetailsJson'])->name('bookingDetailsJson');
Route::get('/dashboard/view-end-user-booking/{id}', [App\Http\Controllers\BookingController::class, 'bookingEndUserData'])->name('bookingEndUserData');
Route::get('/dashboard/view-end-user-booking-details/{id}', [App\Http\Controllers\BookingController::class, 'bookingEndUserDataDetail'])->name('bookingEndUserDataDetail');
Route::get('/cancel-booking/{id}', [BookingController::class, 'cancelbooking'])->name('cancel-booking');
Route::get('/booking-list', [BookingController::class, 'bookinglist'])->name('booking-list');

//Route for API to handle post requests`
// Route::post('/register', [LocalUsersController::class, 'register'])->name('register.localusers');

//api for csrf token
Route::get('/csrf-token', [LocalUsersController::class, 'getToken'])->name('csrf.token');

//route for super-admin
Route::get('/add', [HotelController::class, 'index'])->name('addowner');
Route::post('/add', [HotelController::class, 'store'])->name('storeowner');
Route::get('/listowner', [HotelController::class, 'list'])->name('listowner');
Route::get('/owner/verify/{id}', [HotelController::class, 'verify'])->name('owner.verify');
Route::get('/deleteowner/{id}', [HotelController::class, 'delete'])->name('delete.owner');
Route::get('/editowner/{id}', [HotelController::class, 'edit'])->name('edit.owner');
Route::post('/updateowner/{id}', [HotelController::class, 'update'])->name('update.owner');



//routes for owners of hotel
Route::get('/hotel/rooms', [hotelappController::class, 'appindex'])->name('Addrooms');
Route::get('/hotel/createrooms', [hotelappController::class, 'appdisplay'])->name('display.app.room.form');
Route::post('/hotel/createrooms', [hotelappController::class, 'appcreate'])->name('createrooms');
Route::get('/hotel/listrooms', [hotelappController::class, 'applist'])->name('app.listrooms');
Route::get('/hotel/editrooms/{id}', [hotelappController::class, 'appedit'])->name('app.edit.rooms');
Route::post('/hotel/updaterooms/{id}', [hotelappController::class, 'appupdate'])->name('app.update.rooms');
Route::get('/hotel/deleterooms/{id}', [hotelappController::class, 'appdelete'])->name('app.delete.rooms');
Route::get('/hotel/roomdetail/{id}', [hotelappController::class, 'approomdetail'])->name('app.roomdetail.rooms');

//routes for hotel rooms for hotelowners

Route::get('/rooms', [RoomController::class, 'index'])->name('app.Addrooms');
Route::get('/createrooms', [RoomController::class, 'display'])->name('display.room.form');
Route::post('/createrooms', [RoomController::class, 'create'])->name('createrooms');
Route::get('/listrooms', [RoomController::class, 'list'])->name('listrooms');
Route::get('/editrooms/{id}', [RoomController::class, 'edit'])->name('edit.rooms');
Route::post('/updaterooms/{id}', [RoomController::class, 'update'])->name('update.rooms');
Route::get('/deleterooms/{id}', [RoomController::class, 'delete'])->name('delete.rooms');
Route::get('/roomdetail/{id}', [RoomController::class, 'roomdetail'])->name('roomdetail.rooms');

//routes for local users
Route::get('/localusers', [LocalUsersController::class, 'index'])->name('index.localusers');
Route::post('/localusers/add', [LocalUsersController::class, 'store'])->name('store.localusers');
Route::get('/localusers/list', [LocalUsersController::class, 'list'])->name('list.localusers');
Route::get('/localusers/delete/{id}', [LocalUsersController::class, 'delete'])->name('delete.localusers');
Route::get('/localusers/edit/{id}', [LocalUsersController::class, 'edit'])->name('edit.localusers');
Route::post('/localusers/update/{id}', [LocalUsersController::class, 'update'])->name('update.localusers');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('/completeprofile', [App\Http\Controllers\DashboardController::class, 'completeProfile'])->name('complete.profile');
Route::post('/completeprofile/create', [App\Http\Controllers\DashboardController::class, 'createProfile'])->name('profile.store');
Route::get('/pending-page', [App\Http\Controllers\DashboardController::class, 'verifyPending'])->name('profile.verify`');

//route for hotel dashboard

Route::get('/hotelsection', function () {
    return view('hotel.modules.index');
});

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/doRegister', function (Request $req) {
    return response()->json($req);
});

Route::post('/login-mob', [MobAuthController::class, 'login'])->name('login.mob');


Route::post('/registerUser/add', [LocalUsersController::class, 'store'])->name('store.register.user');
Route::post('/login/mobile', [LoginController::class, 'login']);
