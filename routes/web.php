<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestingController;
use App\Http\Controllers\User\UserDashboardController;
use App\Http\Controllers\User\UserSendRequestController;
use App\Http\Controllers\User\UserHistoryController;
use App\Http\Controllers\User\UserCarRepairHistoryController;
use App\Http\Controllers\User\UserSettingsController;
use App\Http\Controllers\User\UserHelpController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminForApprovalController;
use App\Http\Controllers\Admin\AdminHistoryController;
use App\Http\Controllers\Admin\AdminCarRepairHistoryController;
use App\Http\Controllers\Admin\AdminSettingsController;
use App\Http\Controllers\Admin\AdminHelpController;
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

Route::get('/', function () {
    return view('auth/login');
});


//routes for the admin 

// Route::post('/testregister', [TestingController::class, 'update2'])->name('testregister');


Route::middleware(['auth'])->controller(AdminDashboardController::class)->group(function () {
    
    Route::get('/admin/dashboard', "index");
});

Route::middleware(['auth'])->controller(AdminForApprovalController::class)->group(function () {
    Route::get('/admin/for-approval', "index");
});

Route::middleware(['auth'])->controller(AdminHistoryController::class)->group(function () {
    Route::get('/admin/history', "index");
});

Route::middleware(['auth'])->controller(AdminCarRepairHistoryController::class)->group(function () {
    Route::get('/admin/car-repair-history', "index");
});

Route::middleware(['auth'])->controller(AdminSettingsController::class)->group(function () {
    Route::get('/admin/settings', "index");
});

Route::middleware(['auth'])->controller(AdminHelpController::class)->group(function () {
    Route::get('/admin/help', "index");
});

//routes for the user
Route::middleware(['auth'])->controller(UserDashboardController::class)->group(function () {
    Route::get('/user/dashboard', "index");
});

Route::middleware(['auth'])->controller(UserSendRequestController::class)->group(function () {
    Route::get('/user/send-request', "index");
});

Route::middleware(['auth'])->controller(UserHistoryController::class)->group(function () {
    Route::get('/user/history', "index");
});

Route::middleware(['auth'])->controller(UserCarRepairHistoryController::class)->group(function () {
    Route::get('/user/car-repair-history', "index");
});

Route::middleware(['auth'])->controller(UserSettingsController::class)->group(function () {
    Route::get('/user/settings', "index");
});

Route::middleware(['auth'])->controller(UserHelpController::class)->group(function () {
    Route::get('/user/help', "index");
});

require __DIR__.'/auth.php';
