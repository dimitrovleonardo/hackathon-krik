<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;


Route::get('/projects', [\App\Http\Controllers\ProjectController::class, 'index'])->name('project.index');
Route::get('/project/{project}', [\App\Http\Controllers\ProjectController::class, 'show'])->name('project.show');
Route::get('/', [\App\Http\Controllers\ProjectController::class, 'showProject'])->name('home');


Route::get('/api/team-members', [\App\Http\Controllers\TeamController::class, 'index'])->name('team-members');
Route::get('/team/{team}', [\App\Http\Controllers\TeamController::class, 'show'])->name('team.show');
Route::view('our-team', 'ourTeam')->name('team');




Route::view('services', 'services');
Route::view('donation', 'donation');


Route::view('volunteers', 'volunteers.volunteers');
Route::view('volunteer', 'volunteers.volunteer');
Route::view('form', 'volunteers.form-volunteer');
Route::view('documents', 'volunteers.documents');


Route::post('/newsletter/subscribe',[NewsletterController::class,'subscribe'])->name('newsletter.subscribe');
Route::get('/newsletter',[NewsletterController::class,'monthly'])->name('newsletter');
Route::get('/newsletter/{newsletter}',[NewsletterController::class,'index'])->name('newsletter.index');
Route::view('/newsletter/show', 'newsletter.show')->name('newsletter.show');


Route::view('about', 'about_us');
