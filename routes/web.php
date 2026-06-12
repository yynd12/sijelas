<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentClassController;
use App\Http\Controllers\ClassTeacherController;
use App\Http\Controllers\AnnouncementsController;
use App\Http\Controllers\CashBillsController;
use App\Http\Controllers\CashesController;
use App\Http\Controllers\NotificationsController;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\PiketSchedulesController;
use App\Http\Controllers\PiketReportsController;
use App\Http\Controllers\ReadingsController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\TasksController;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.process');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

/*
|--------------------------------------------------------------------------
| Protected Routes
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // User Management
    Route::resource('users', UserController::class);

    // Student Management
    Route::resource('students', StudentsController::class);

    // Class Management
    Route::resource('student-classes', StudentClassController::class);

    // Class Teacher
    Route::resource('class-teachers', ClassTeacherController::class);

    // Announcements
    Route::resource('announcements', AnnouncementsController::class);

    // Tasks
    Route::resource('tasks', TasksController::class);

    // Notifications
    Route::resource('notifications', NotificationsController::class);

    // Cash
    Route::resource('cashes', CashesController::class);

    // Cash Bills
    Route::resource('cash-bills', CashBillsController::class);

    // Payments
    Route::resource('payments', PaymentsController::class);

    // Piket Schedules
    Route::resource('piket-schedules', PiketSchedulesController::class);

    // Piket Reports
    Route::resource('piket-reports', PiketReportsController::class);

    // Readings
    Route::resource('readings', ReadingsController::class);
});

