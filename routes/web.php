<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\SignupController;
use App\Http\Controllers\Auth\SigninController;
use App\Http\Controllers\DogAdoptionController;
use App\Http\Controllers\UserDashboardController;

/*
|--------------------------------------------------------------------------
| Public Pages
|--------------------------------------------------------------------------
*/

// Landing Page
Route::get('/', [UserDashboardController::class, 'home'])->name('home');

// Sign In Page
Route::get('/signin', function () {
    return view('landing-page.signin');
})->name('signin');
Route::get('/signup', function () {
    return view('landing-page.signup');
})->name('signup');

/*
|--------------------------------------------------------------------------
| Authentication (POST)
|--------------------------------------------------------------------------
*/

// Sign Up Submit
Route::post('/signup-submit', [SignupController::class, 'submit'])->name('signup.submit');

// Sign In Submit
Route::post('/signin-submit', [SigninController::class, 'submit'])->name('signin.submit');

// Logout
Route::post('/logout', [SigninController::class, 'logout'])->name('logout');
// Submit adoption request
Route::post('/dogadoption-submit', [DogAdoptionController::class, 'submit'])->name('dogadoption.submit');

// My Adoptions page
Route::get('/my-adoptions', [DogAdoptionController::class, 'myAdoptions'])->name('my-adoptions');
/*
|--------------------------------------------------------------------------
| Dog Adoption Submission
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {
    Route::post('/dogadoption-submit', [DogAdoptionController::class, 'submit'])->name('dogadoption.submit');
});

/*
|--------------------------------------------------------------------------
| Protected Pages (Need Login)
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {

    // Dashboard
    Route::get('/user-dashboard', [UserDashboardController::class, 'dashboard'])->name('user-dashboard');



    // Community
    Route::get('/community', [UserDashboardController::class, 'community'])->name('community');

    // Dog Adoptions
   Route::get('/dogadoptions', [UserDashboardController::class, 'dogAdoptions'])->name('dogadoptions');
});
