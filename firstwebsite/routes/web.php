<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use Illuminate\Support\Facades\Mail;
use App\Mail\SampleMail;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterController;


Route::get('/', function () {
    return view('pages.welcome');
})->name('home');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/show-sample-email', function () {
    $details = [
        'subject' => 'Test Email',
        'body' => 'This is a test email.'
    ];
    Mail::to('nfranciskert@gmail.com')->send(new SampleMail($details));
    return view('pages.emails.sample', compact('details'));
});

Route::get('/show_form', function () {
    return view('pages.show_form');
});

Route::post('/register-ajax', [UserController::class, 'registerAjax']);

Route::get('/view_student', [UserController::class, 'view_student'])->name('view_student');

// Admin routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('products', AdminProductController::class);
});

Route::get('/register', [RegisterController::class, 'showForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');
