<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use Illuminate\Support\Facades\Mail;
use App\Mail\SampleMail;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Login;
use Illuminate\Support\Facades\Auth;


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

Route::post('/login', function(Request $request) {
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    $user = Login::where('email', $request->email)->first();
    if ($user && Hash::check($request->password, $user->password)) {
        // Optionally, set session or auth here
        return redirect('/main');
    } else {
        return back()->with('error', 'Invalid email or password.');
    }
});

Route::post('/logout', function() {
    // Optionally clear session or use Auth::logout() if using Laravel Auth
    session()->flush();
    return redirect('/');
});

Route::get('/main', function() {
    return view('pages.main');
})->name('main');
