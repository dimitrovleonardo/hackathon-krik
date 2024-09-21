<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::view('about', 'about_us');
Route::view('/', 'welcome')->name('home');
Route::view('dashboard','dashboard')->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
