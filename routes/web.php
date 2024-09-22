<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\paypalDonationController;
use App\Http\Controllers\ProductController;

Route::get('/services', function () {
    return view('services');
})->name('services');
Route::get('/ourTeam', function () {
    return view('ourTeam');
})->name('ourTeam');
Route::get('/donation', function () {
    return view('donation');
})->name('donation');
Route::get('/teamMember1', function () {
    return view('team.member1');
})->name('member1');
Route::get('/teamMember2', function () {
    return view('team.member2');
})->name('member2');
Route::get('/teamMember3', function () {
    return view('team.member3');
})->name('member3');
Route::get('/products', [ProductController::class, 'index'])->name('products');

Route::get('/product/{id}', [ProductController::class, 'show'])->name('showProduct');
Route::post('/product/{id}/purchase', [ProductController::class, 'purchase'])->name('purchase');





Route::post('/donate', [DonationController::class, 'store'])->name('donate.store');

Route::post('/paypal-donation', [paypalDonationController::class, 'store'])->name('paypal.donation.store');


Route::view('about', 'about_us');
Route::view('/', 'welcome')->name('home');
Route::view('dashboard', 'dashboard')->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::get('/volunteers', function () {
    return view('volunteers.volunteers');
})->name('volunteers');

Route::get('/volunteer', function () {
    return view('volunteers.volunteer');
})->name('volunteer');

Route::get('/form', function () {
    return view('volunteers.form-volunteer');
})->name('form');

Route::get('/documents', function () {
    return view('volunteers.documents');
});
