<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BursaryApplicationController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\SuccessStoryController;
use App\Http\Controllers\TicketController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/auth/register', function () {
    return view('auth/register');
});

Route::get('/auth/login', function () {
    return view('auth/login');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/contact', [ContactController::class, 'sendContactForm'])->name('contact.send');

require __DIR__.'/auth.php';


Route::middleware('auth')->group(function () {
    Route::get('/bursary-application', [BursaryApplicationController::class, 'showForm'])->name('bursary.application');
    Route::post('/bursary-application', [BursaryApplicationController::class, 'submitForm'])->name('bursary.application.submit');
});

Route::middleware('auth')->group(function () {
    Route::get('/bursary-applications', [BursaryApplicationController::class, 'index'])->name('bursary.index');
    Route::get('/bursary-application/{id}/edit', [BursaryApplicationController::class, 'edit'])->name('bursary.edit');
    Route::put('/bursary-application/{id}', [BursaryApplicationController::class, 'update'])->name('bursary.update');
    Route::delete('/bursary-application/{id}', [BursaryApplicationController::class, 'destroy'])->name('bursary.destroy');
});

// routes/web.php

Route::get('/donate', function () {
    return view('donate');
});

Route::get('/success-story', [SuccessStoryController::class, 'show'])->name('success-story');

Route::get('/buy-tickets', [TicketController::class, 'index'])->name('buy-tickets');

Route::get('/partners', [PartnerController::class, 'index'])->name('partners');
