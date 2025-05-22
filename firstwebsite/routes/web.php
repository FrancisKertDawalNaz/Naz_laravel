<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use Illuminate\Support\Facades\Mail;
use App\Mail\SampleMail;


Route::get('/', function () {
    return view('pages.welcome');
})->name('home');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/send-sample-email', function () {
    $details = [
        'subject' => 'Test Email',
        'body' => 'This is a test email.'
    ];
    Mail::to('nfranciskert@gmail.com')->send(new SampleMail($details));
    return 'Email sent!';
});

// Admin routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('products', AdminProductController::class);
});


