<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\AdminController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/register',[AccountController::class,'registration'])->name('account.registration');
Route::post('/proces-register',[AccountController::class,'registrationProcess'])->name('account.registrationProcess');
Route::get('/donate',[AccountController::class,'donate'])->name('account.donate');
Route::post('/donate-book',[AccountController::class,'saveBookDonation'])->name('account.donationProcess');
Route::get('/login',[AccountController::class,'login'])->name('account.login');

Route::post('/admin-authenticate',[AdminController::class,'authenticateAdmin'])->name('account.authenticateAdmin');
Route::get('/admin-login',[AdminController::class,'adminLogin'])->name('admin.adminlogin');
Route::get('/admin-dashboard',[AdminController::class,'dashboard'])->name('admin.adminDashboard');
Route::get('/manage-users',[AdminController::class,'showUser'])->name('admin.manageUsers');
Route::post('/user/destroy/{user_id}', [AdminController::class, 'destroy'])->name('users.destroy');
Route::get('/manage-centerss',[AdminController::class,'showCenters'])->name('admin.manageCenters');



Route::get('/centers',[AccountController::class,'centers'])->name('account.centers');

Route::post('/authenticate',[AccountController::class,'authenticate'])->name('account.authenticate');
Route::get('/logout',[AccountController::class,'logout'])->name('account.logout');
Route::get('/forgot-password',[AccountController::class,'forgotpassword'])->name('account.forgotpassword');
Route::get('/allbooks',[AccountController::class,'allbooks'])->name('account.allbooks');
Route::get('/isuuebooks',[AccountController::class,'issuebooks'])->name('account.issuebooks');
Route::get('/returnbooks',[AccountController::class,'returnbooks'])->name('account.returnbooks');
Route::get('/renewbooks',[AccountController::class,'renewbooks'])->name('account.renewbooks');
Route::get('/referral',[AccountController::class,'referral'])->name('account.referral');
Route::get('/damage',[AccountController::class,'damage'])->name('account.damage');