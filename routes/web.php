<?php

use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\singleProjectController;
use App\Http\Controllers\VolunteerController;

Route::view('services', 'services');
Route::view('ourTeam', 'ourTeam');
Route::view('donation', 'donation');
Route::view('teamMember1', 'team.member1');
Route::view('teamMember2', 'team.member2');
Route::view('teamMember3', 'team.member3');


Route::get('/volunteers', [VolunteerController::class, 'index'])->name('volunteers');
Route::get('/get-long', [VolunteerController::class, 'getLongTerm'])->name('getLongTerm');
Route::get('/get-short', [VolunteerController::class, 'getShortTerm'])->name('getShortTerm');
Route::get('/get-all', [VolunteerController::class, 'getAll'])->name('getAll');
Route::get('/single-volunteer/{volunteer}', [VolunteerController::class, 'getSingle']);
Route::get('form', [VolunteerController::class, 'form'])->name('form');
Route::get('documents', [VolunteerController::class, 'documents']);
Route::post('/applicants', [ApplicantController::class, 'store'])->name('storeApplicant');

Route::get('/accessability', function () {
    return view('layouts.accessibility');
});


Route::view('about', 'about_us');
Route::view('/', 'welcome')->name('home');
Route::view('/newsletter/monthly', 'newsletter')->name('newsletter.index');
Route::view('/newsletter/date', 'newsletter.index')->name('newsletter.index');
Route::view('/newsletter/show', 'newsletter.show')->name('newsletter.show');


Route::view('dashboard', 'dashboard')->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';


Route::get('/Projects', [ProjectController::class, 'projects']);
Route::get('/projects', [ProjectController::class, 'index'])->name('projects');



Route::get('/project/single', function () {
    return view('projects.singleproject');
});
