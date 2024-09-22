<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\VolunteerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\paypalDonationController;

Route::get('/projects', [\App\Http\Controllers\ProjectController::class, 'index'])->name('project.index');
Route::get('/project/{project}', [\App\Http\Controllers\ProjectController::class, 'show'])->name('project.show');
Route::get('/', [\App\Http\Controllers\ProjectController::class, 'showProject'])->name('home');


Route::get('/api/team-members', [\App\Http\Controllers\TeamController::class, 'index'])->name('team-members');
Route::get('/team/{team}', [\App\Http\Controllers\TeamController::class, 'show'])->name('team.show');
Route::view('our-team', 'ourTeam')->name('team');




Route::view('services', 'services');
Route::view('donation', 'donation');


Route::get('/volunteers', [VolunteerController::class, 'index'])->name('volunteers');
Route::get('/get-long', [VolunteerController::class, 'getLongTerm'])->name('getLongTerm');
Route::get('/get-short', [VolunteerController::class, 'getShortTerm'])->name('getShortTerm');
Route::get('/get-all', [VolunteerController::class, 'getAll'])->name('getAll');
Route::get('/single-volunteer/{volunteer}', [VolunteerController::class, 'getSingle']);
Route::get('form', [VolunteerController::class, 'form'])->name('form');
Route::get('documents', [VolunteerController::class, 'documents']);
Route::post('/applicants', [ApplicantController::class, 'store'])->name('storeApplicant');


Route::post('/donate', [DonationController::class, 'store'])->name('donate.store');

Route::post('/paypal-donation', [paypalDonationController::class, 'store'])->name('paypal.donation.store');


Route::post('/newsletter/subscribe',[NewsletterController::class,'subscribe'])->name('newsletter.subscribe');
Route::get('/newsletter',[NewsletterController::class,'monthly'])->name('newsletter');
Route::get('/newsletter/{newsletter}',[NewsletterController::class,'index'])->name('newsletter.index');
Route::view('/newsletter/show', 'newsletter.show')->name('newsletter.show');


Route::view('about', 'about_us');

