<?php

use Illuminate\Support\Facades\Route;
// For Admin
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PlanController;


// For User
use App\Http\Controllers\Front\SubscriptionController;
use App\Http\Controllers\Front\CarLoanCalculator;
use App\Http\Controllers\Front\LongTermInvestmentCaculator;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();






Route::controller(\App\Http\Controllers\Auth\AuthController::class)->group(function () {

   route::get('login','user_login')->name('login')->middleware('guest');
   route::post('loginAdminProcess','loginAdminProcess')->name('loginAdminProcess') ;

   route::get('user-register','userRegister')->name('user-register')->middleware('guest');
   route::post('user-register-process','RegisterProcess')->name('user-register-process');

   Route::get('forgot-password', 'forgotPasswords')->name('forgot-password');
   Route::post('forgotPassword', 'forgotPassword')->name('forgotPassword');

   Route::get('verify-code', 'verify')->name('verify');
   Route::post('verify-code', 'verifyCode')->name('verify-code');

   Route::post('updatePassword', 'updatePassword')->name('updatePassword');
   route::get('resetpassword','resetpassword')->name('resetpassword');

});



Route::resource('plan', PlanController::class);
Route::middleware(['auth','can:isAdmin'])->prefix('admin')->group(function()
{
    Route::resource('users', UserController::class);
    Route::get('user-change-status', [UserController::class,'change_status'])->name('admin-user-change-status');
    Route::controller(AdminController::class)->group(function ()
    {
        Route::get('dashboard', 'dashboard')->name('admin.dashboard');
        Route::get('profile', 'profile')->name('admin.profile');
        route::post('profile-update','profileUpdate')->name('profile-update');
    });
});

Route::middleware(['auth','can:isUser'])->prefix('user')->group(function(){


});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout');

// subscription
    Route::get('plans', [SubscriptionController::class, 'index']);
    Route::get('plans/{plan}', [SubscriptionController::class, 'show'])->name("plans.show");
    Route::post('subscription', [SubscriptionController::class, 'subscription'])->name("subscription.create");

    // Car Laon Calculator
    Route::get('car-loan-calculator', [CarLoanCalculator::class, 'index'])->name('car-loan-calculator');
    Route::post('car-loan-calculator/calculate', [CarLoanCalculator::class, 'calCarLoan'])->name('calculate.car.loan');

    // Investment Calculator
    Route::get('investment-calculator', [LongTermInvestmentCaculator::class, 'index'])->name('investment.calculator');
    Route::post('investment/calculate', [LongTermInvestmentCaculator::class, 'calInvestment'])->name('calculate.investment');


