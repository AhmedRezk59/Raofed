<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\SendMessageController;
use App\Http\Controllers\UserAuth\LoginController as UserAuthLoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Models\Job;
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

Route::group(['prefix' => LaravelLocalization::setLocale()], function () {

    Route::view('/', 'welcome',['jobs' => Job::all()])->name('main');
    Route::middleware('guest:admin')->group(function () {
        Route::view('login', 'auth.login');
        Route::post('login', [LoginController::class, 'login'])->name('login');
    });
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');

    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::post('/user_login', [UserAuthLoginController::class, 'login'])->name('user_login');
    Route::post('/user_logout', [UserAuthLoginController::class, 'logout'])->name('user_logout');
    Route::name('dashboard.')->group(function () {
        Route::resource('users', UserController::class)->except('show');
        Route::resource('admins', AdminController::class)->except('show');
        Route::resource('jobs', JobController::class);
        Route::post('/job/{id}/apply',[JobController::class , 'apply'])->name('apply_to_job');
        Route::get('/job/{id}/candidates', [JobController::class , 'show_candidates'])->name('show_candidates');

        Route::post('/send/message' , [SendMessageController::class, 'send'])->name('send_message');
        Route::post('/mark/as/read', [SendMessageController::class , 'mark_as_read'])->name('mark_as_read');
    });
});
