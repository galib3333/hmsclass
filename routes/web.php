<?php

use App\Http\Controllers\Backend\AuthenticationController as auth;
use App\Http\Controllers\Backend\BackendController as backend;
use App\Http\Controllers\Backend\UserController as user;
use App\Http\Controllers\Backend\PatientController as patient;
use App\Http\Controllers\Backend\DoctorController as doctor;
use App\Http\Controllers\Backend\DepartmentController as department;
use App\Http\Controllers\Backend\DesignationController as designation;
use App\Http\Controllers\Backend\RoomCatController as roomCat;
use App\Http\Controllers\Backend\RoomListController as roomList;
use App\Http\Controllers\Backend\InvestListController as invest;
use App\Http\Controllers\Backend\ShiftController as shift;
use App\Http\Controllers\Backend\DayController as day;
use App\Http\Controllers\Backend\ScheduleController as schedule;
use App\Http\Controllers\Backend\InvestCatController as investCat;
use App\Http\Controllers\Backend\TestController as test;
use App\Http\Controllers\Backend\TestDetailController as testDetail;
use App\Http\Controllers\Backend\PatientAdmitController as patientAdmit;
use App\Http\Controllers\Backend\EmployBasicController as employee;
use App\Http\Controllers\Backend\BloodController as blood;
use App\Http\Controllers\Frontend\FrontendController as frontend;
use App\Http\Controllers\Frontend\AboutController as about;
use App\Http\Controllers\Frontend\BlogController as blog;
use App\Http\Controllers\Frontend\ContactController as contact;
use App\Http\Controllers\Backend\RoleController as role;
use App\Http\Controllers\Backend\PermissionController as permission;
use App\Http\Controllers\Backend\PrescriptionController as prescription;

// use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Route;

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
Route::get('/register', [auth::class, 'signUpForm'])->name('register');
Route::post('/register', [auth::class, 'signUpStore'])->name('register.store');
Route::get('/login', [auth::class, 'signInForm'])->name('login');
Route::post('/login', [auth::class, 'signInCheck'])->name('login.check');
Route::get('/logout', [auth::class, 'signOut'])->name('logOut');


// Route::get('/auth/github/redirect', function () {
//   return Socialite::driver('github')->redirect();
// });

// Route::get('/auth/github/callback', function () {
//   $user = Socialite::driver('github')->user();

//   dd($user->getName(), $user->getEmail(), $user->getId());
// });

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware(['checkrole'])->prefix('admin')->group(function () {
  Route::resource('user', user::class);
  Route::resource('role', role::class);
  Route::get('permission/{role}', [permission::class, 'index'])->name('permission.list');
  Route::post('permission/{role}', [permission::class, 'save'])->name('permission.save');
  Route::resource('/patients', patient::class);
  Route::resource('/user', user::class);
  Route::resource('/employees', employee::class);
  Route::resource('/blood', blood::class);
  Route::resource('/department', department::class);
  Route::resource('/designation', designation::class);
  Route::resource('/doctor', doctor::class);
  Route::resource('/roomCat', roomCat::class);
  Route::resource('/roomList', roomList::class);
  Route::resource('/pAdmit', patientAdmit::class);
  Route::resource('/shift', shift::class);
  Route::resource('/day', day::class);
  Route::resource('/schedule', schedule::class);
  Route::resource('/investCat', investCat::class);
  Route::resource('/invest', invest::class);
  Route::resource('/test', Test::class);
  Route::resource('/testDetail', testDetail::class);
  Route::get('/userProfile', [auth::class, 'userProfile'])->name('userProfile');
  Route::get('/doctorProfile', [doctor::class, 'doctorProfile'])->name('doctorProfile');
  Route::get('/prescription', [prescription::class, 'prescription'])->name('prescription');
});


Route::middleware(['checkauth'])->prefix('admin')->group(function () {
  Route::get('/dashboard', [backend::class, 'index'])->name('dashboard');
});


Route::get('/', [frontend::class, 'index'])->name('home');
Route::get('/about', [about::class, 'index'])->name('about');
Route::get('/blog', [blog::class, 'index'])->name('blog');
Route::get('/contact', [contact::class, 'index'])->name('contact');

// Route::get('/dashboard', function () {
//     return view('welcome');
// })->name('dashboard');

// Route::get('/registration', function () {
//   return view('frontend.patientregistration');
// });
// Route::get('/userprofiles', function () {
//   return view('backend.profiles.userProfile');
// });
