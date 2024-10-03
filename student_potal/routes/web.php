<?php

use App\Http\Controllers\attendanceController;
use App\Http\Controllers\dashbordController;
use App\Http\Controllers\LeaveRequestController;
use App\Http\Controllers\userController;
use App\Http\Controllers\userTableController;
use App\Http\Controllers\view_attendanceController;
use App\Http\Controllers\adminController;
use App\Http\Middleware\validUser;
use Illuminate\Support\Facades\Route;



Route::controller(UserController::class)->group(function () {
  Route::get('/register', 'index')->name('index');
  Route::post('/register-store', 'register')->name('register-store');
  Route::post('/login-store', 'login')->name('login-store');
  Route::get('/logout', 'logout')->name('logout');
});

Route::controller(attendanceController::class)->group(function () {
  Route::post('attendance-mark',  'markAttendance')->name('attendance-mark');
  Route::get('/dashbord/AttendanceTable',  'viewAttendanceTable')->name('viewAttendanceTable');
});


Route::controller(LeaveRequestController::class)->group(function () {
  Route::get('/leave',  'viewLeave')->name('leave')->middleware(validUser::class);
  Route::post('/leave-store',  'leaveStore')->name('leaveStore')->middleware(validUser::class);
  Route::get('/dashbord/leave',  'viewLeaveTable')->name('viewLeaveTable')->middleware(validUser::class);
  Route::post('/dashbord/{id}/leave-store',  'storeLeaveStatus')->name('storeLeaveStatus')->middleware(validUser::class);
});

Route::controller(userTableController::class)->group(function () {
  Route::get('/dashbord/user',  'viewUserTable')->middleware(validUser::class)->name('view_user');
  Route::get('/dashbord/{id}/editUser',  'editUserTable')->middleware(validUser::class)->name('editUser');
  Route::put('/dashbord/{id}/storUser', 'updateUserTable')->middleware(validUser::class)->name('storUser');
  Route::delete('/dashboard/{id}/deleteUser',  'deleteUser')->name("deleteUser");
});


Route::get('/view-attendence', [view_attendanceController::class, 'viewAttendance'])->name('attendance')->middleware(validUser::class);

Route::get('/dashbord', [dashbordController::class, 'viewDashbord'])->name('dashbord')->middleware(validUser::class);



Route::get('/', function () {
  return view('auth.login');
})->name('login');

Route::get('/home', function () {
  return view('pages.home');
})->name('home')->middleware(validUser::class);
