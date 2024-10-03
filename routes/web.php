<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FormController;
use App\Http\Livewire\ContactForm;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\EventBookingController;


Route::post('/book-event', [EventBookingController::class, 'store'])->name('form.store');


Route::post('/event-booking', [EventBookingController::class, 'store'])->name('form.store');


Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');



Route::get('/eventastic', [HomeController::class, 'index'])->name('Eventastic');



Route::get('/feedback', [FeedbackController::class, 'create'])->name('feedback.create');
Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.store');


Route::get('/contact', function () {
    return view('contact');
})->name('contact');



Route::get('/', function () {
    return view('Eventastic'); // Your main homepage
});

// Static pages
Route::get('/about', function () {
    return view('about');
});
Route::get('/Eventplanning', function () {
    return view('Eventplanning');
});
Route::get('/VendorCoordination', function () {
    return view('VendorCoordination');
});
Route::get('/OnsiteManagement', function () {
    return view('OnsiteManagement');
});
Route::get('/Marketing&Promotion', function () {
    return view('Marketing&Promotion');
});
Route::get('/technicalsupport', function () {
    return view('technicalsupport');
});
Route::get('/RbookEvent', function () {
    return view('RbookEvent');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/gallery', function () {
    return view('gallery');
});

Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');

// Auth routes
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('/login', [AuthenticatedSessionController::class, 'store']);
    Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('/register', [RegisteredUserController::class, 'store']);
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\NewPasswordController;


Route::middleware('guest')->group(function () {
    // Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])->name('password.request');
    // Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])->name('password.email');

    // Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])->name('password.reset');
    // Route::post('/reset-password', [NewPasswordController::class, 'store'])->name('password.update');
});



Route::get('/contact', function () {
    return view('contact');
})->name('contact');





Route::get('/event-booking', [FormController::class, 'showForm'])->name('form.show');


Route::post('/event-booking', [FormController::class, 'store'])->name('form.store');


Route::get('/event-confirmation', [FormController::class, 'confirmation'])->name('form.confirmation');


Route::get('/event-confirmation/download', [FormController::class, 'download'])->name('form.download');

Route::post('/submit-form', [FormController::class, 'submit'])->name('form.submit');
Route::get('/download', [FormController::class, 'download'])->name('form.download');
