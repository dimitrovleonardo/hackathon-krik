<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::view('services', 'services');
Route::view('ourTeam', 'ourTeam');
Route::view('donation', 'donation');
Route::view('teamMember1', 'team.member1');
Route::view('teamMember2', 'team.member2');
Route::view('teamMember3', 'team.member3');


Route::view('volunteers', 'volunteers.volunteers');
Route::view('volunteer', 'volunteers.volunteer');
Route::view('form', 'volunteers.form-volunteer');
Route::view('documents', 'volunteers.documents');


Route::view('about', 'about_us');
Route::view('/', 'welcome')->name('home');
Route::view('/newsletter/monthly', 'newsletter')->name('newsletter.index');
Route::view('/newsletter/date', 'newsletter.index')->name('newsletter.index');
Route::view('/newsletter/show', 'newsletter.show')->name('newsletter.show');


Route::view('dashboard','dashboard')->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';


