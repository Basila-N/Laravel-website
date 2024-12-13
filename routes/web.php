<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\OfferController;

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
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/menu',[OfferController::class,'indexMenu']);

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/order', [MenuController::class, 'storeOrder'])->name('order.store');
Route::post('/contact', [MenuController::class, 'storeContact'])->name('contact.store');
Route::post('/booking', [MenuController::class, 'storeBooking'])->name('booking.store');

Route::get('/admin/ordbook', [OrderController::class, 'dashboard'])->name('admin.dashboard');
Route::post('/admin/orders/update', [OrderController::class, 'updateOrderStatus'])->name('admin.orders.update');
Route::post('/admin/bookings/update', [OrderController::class, 'updateBookingStatus'])->name('admin.bookings.update');
Route::delete('/admin/orders/{order}', [OrderController::class, 'destroy'])->name('admin.orders.destroy');
Route::delete('/admin/bookings/{booking}', [OrderController::class, 'destroyed'])->name('admin.bookings.destroy');

Route::get('/admin/contacts', [ContactController::class, 'contct'])->name('admin.contacts.contact');
Route::delete('/admin/contacts/{id}', [ContactController::class, 'destroy'])->name('contacts.destroy');

Route::get('/admin/menu', [OfferController::class, 'index'])->name('admin.menu');
Route::get('/offers/list', [OfferController::class, 'listOffers'])->name('admin.fetch_offers');
Route::post('/offers/add', [OfferController::class, 'addOffer'])->name('offers.add');
Route::get('/offers/{id}/edit', [OfferController::class, 'showOffer'])->name('offers.edit');
Route::post('/offers/{id}/update', [OfferController::class, 'updateOffer'])->name('offers.update');
Route::get('/offers/{id}/delete', [OfferController::class, 'deleteOffer'])->name('offers.delete');

Route::get('/admin/menus', [OfferController::class, 'listMenus'])->name('admin.fetch_menu');
Route::post('/menus/add', [OfferController::class, 'addMenu'])->name('menus.add');
Route::get('/menus/{id}/edit', [OfferController::class, 'showMenu'])->name('menus.edit');
Route::post('/menus/{id}/update', [OfferController::class, 'updateMenu'])->name('menus.update');
Route::get('/menus/{id}/delete', [OfferController::class, 'deleteMenu'])->name('menus.delete');



    Route::middleware(['auth','prevent-back-histroy'])->group(function(){
        Route::get('/dashboard', function () {
                return view('dashboard');
            })->middleware(['auth', 'verified'])->name('dashboard');
    });
   


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
