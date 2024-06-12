<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HotelController;
use App\Http\Controllers\LocalUsersController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\App\hotelappController;
use App\Models\HotelOwner;
use App\Models\HotelRooms;

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
    return view('admin.modules.index');
});

//Route for API to handle post requests
// Route::post('/register', [LocalUsersController::class, 'register'])->name('register.localusers');

//api for csrf token
Route::get('/csrf-token', [LocalUsersController::class, 'getToken'])->name('csrf.token');

//route for hotel owner
Route::get('/json-owner', [HotelController::class, 'listMobile'])->name('list.mob');
Route::get('/add', [HotelController::class, 'index'])->name('addowner');
Route::post('/add', [HotelController::class, 'store'])->name('storeowner');
Route::get('/listowner', [HotelController::class, 'list'])->name('listowner');
Route::get('/owner/verify/{id}', [HotelController::class, 'verify'])->name('owner.verify');
Route::get('/deleteowner/{id}', [HotelController::class, 'delete'])->name('delete.owner');
Route::get('/editowner/{id}', [HotelController::class, 'edit'])->name('edit.owner');
Route::post('/updateowner/{id}', [HotelController::class, 'update'])->name('update.owner');



//routes for hotel rooms for superadmin
Route::get('/json-room', [hotelappController::class, 'applistMobile'])->name('list.mobile');
Route::get('/rooms', [hotelappController::class, 'appindex'])->name('Addrooms');
Route::get('/createrooms', [hotelappController::class, 'appdisplay'])->name('display.app.room.form');
Route::post('/createrooms', [hotelappController::class, 'appcreate'])->name('createrooms');
Route::get('/listrooms', [hotelappController::class, 'applist'])->name('app.listrooms');
Route::get('/editrooms/{id}', [hotelappController::class, 'appedit'])->name('edit.rooms');
Route::post('/updaterooms/{id}', [hotelappController::class, 'appupdate'])->name('update.rooms');
Route::get('/deleterooms/{id}', [hotelappController::class, 'appdelete'])->name('delete.rooms');
Route::get('/roomdetail/{id}', [hotelappController::class, 'approomdetail'])->name('roomdetail.rooms');

//routes for hotel rooms for hotelowners
Route::get('/json-room', [RoomController::class, 'listMobile'])->name('list.app.mobile');
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

//route for hotel dashboard

Route::get('/hotelsection', function () {
    return view('hotel.modules.index');
});
