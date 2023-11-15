<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController as auth;
use App\Http\Controllers\FrontendController as frontend;
use App\Http\Controllers\BackendController as backend;
use Laravel\Socialite\Facades\Socialite;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/register', [auth::class,'signUpForm'])->name('register');
Route::post('/register', [auth::class,'signUpStore'])->name('register.store');
Route::get('/login', [auth::class,'signInForm'])->name('login');
Route::post('/login', [auth::class,'signInCheck'])->name('login.check');
Route::get('/logout', [auth::class,'singOut'])->name('logOut');

Route::get('/auth/github/redirect', function () {
  return Socialite::driver('github')->redirect();
});

Route::get('/auth/github/callback', function () {
  $user = Socialite::driver('github')->user();

  dd($user->getName(), $user->getEmail(), $user->getId());
});

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[frontend::class, 'index'])->name('home');
Route::get('/dashboard',[backend::class, 'index'])->name('dashboard');



// Route::get('/dashboard', function () {
//     return view('welcome');
// })->name('dashboard');

// Route::get('/', function () {
//     return view('frontend.home');
// });