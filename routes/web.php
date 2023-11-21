<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\backend\JobController;
use App\Http\Controllers\Backend\EmployeeController;
use App\Http\Controllers\Backend\DashboardController;

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

Route::get('/', [AuthController::class, 'index'])->name('login');
Route::get('forgot_password', [AuthController::class, 'forgot_password']);
Route::get('register', [AuthController::class, 'register']);
Route::post('register_user', [AuthController::class, 'register_user']); //
Route::post('checkemail', [AuthController::class, 'CheckEmail']);
Route::post('login_user', [AuthController::class, 'login_user']);

//Admin 
Route::group(['middleware' => 'admin'], function () {
    Route::get('admin/dashboard', [DashboardController::class, 'dashboard']);

    Route::get('admin/employees', [EmployeeController::class, 'index']);
    Route::get('admin/create_employee', [EmployeeController::class, 'create']);
    Route::post('createEmp', [EmployeeController::class, 'createEmp']);
    Route::post('chekEmpExists', [EmployeeController::class, 'chekEmpExists']);
    Route::get('admin/employees/view/{id}', [EmployeeController::class, 'viewEmployee']);
    Route::get('admin/employees/edit/{id}', [EmployeeController::class, 'editEmployee']);
    Route::post('admin/employees/edit/{id}', [EmployeeController::class, 'updateEmployee']);
    Route::get('admin/employees/delete/{id}', [EmployeeController::class, 'deleteEmployee']);
    //jobs
    Route::get('admin/jobs', [JobController::class, 'index']);
    Route::get('admin/create_job', [JobController::class, 'create_job']);
    Route::post('createJob', [JobController::class, 'createJob']);
    Route::get('admin/jobs/edit/{id}', [JobController::class, 'editJob']);
    Route::post('admin/jobs/edit/{id}', [JobController::class, 'updateJob']);
    Route::get('admin/jobs/delete/{id}', [JobController::class, 'deleteJob']);
});


Route::get('logout', [AuthController::class, 'logout']);
