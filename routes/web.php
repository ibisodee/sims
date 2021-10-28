<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\ExamsController;
use App\Http\Controllers\Exams1Controller;
use App\Http\Controllers\FeeController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProgressController;
use App\Http\Controllers\PassportController;


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

//Landing Routes

Route::get('/', function () {
    return view('welcome');
});


//User Routes

Route::middleware(['auth:sanctum', 'verified'])->get('/user/fees', [FeeController::class, 'uindex']);

Route::middleware(['auth:sanctum', 'verified'])->get('/user/progress', [ProgressController::class, 'index']);

Route::middleware(['auth:sanctum', 'verified'])->get('/user/view_assessment', [ProgressController::class, 'assessmentindex']);

Route::middleware(['auth:sanctum', 'verified'])->get('/user/checkresult0', [ProgressController::class, 'resultindex0']);
Route::middleware(['auth:sanctum', 'verified'])->get('/user/checkresult', [ProgressController::class, 'resultindex']);
Route::middleware(['auth:sanctum', 'verified'])->get('/user/checkresult1', [ProgressController::class, 'resultindex1']);
Route::middleware(['auth:sanctum', 'verified'])->get('/user/checkresult2', [ProgressController::class, 'resultindex2']);

Route::middleware(['auth:sanctum', 'verified'])->get('/user/viewresult0/{id}', [ProgressController::class, 'resultedit0']);
Route::middleware(['auth:sanctum', 'verified'])->get('/user/viewresult/{id}', [ProgressController::class, 'resultedit']);
Route::middleware(['auth:sanctum', 'verified'])->get('/user/viewresult1/{id}', [ProgressController::class, 'resultedit1']);
Route::middleware(['auth:sanctum', 'verified'])->get('/user/viewresult2/{id}', [ProgressController::class, 'resultedit2']);


Route::middleware(['auth:sanctum', 'verified'])->get('/user/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/user/myprofile', function () {
    return view('profile2');
})->name('profile2');

//Admin Routes

Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->get('/admin/insert_result', function () {
    return view('admin.exams.create');
})->name('admin.insert_result');

Route::resource('/admin/exams', ExamController::class)->middleware(['auth:sanctum', 'verified', 'authadmin']);
Route::resource('/admin/exam', ExamsController::class)->middleware(['auth:sanctum', 'verified', 'authadmin']);
Route::resource('/admin/exam1', Exams1Controller::class)->middleware(['auth:sanctum', 'verified', 'authadmin']);


Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->get('/admin/insert_fees', [FeeController::class, 'index']);
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->post('/admin/insert_fees/create', [FeeController::class, 'create']);
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->get('/admin/edit_fees/{id}', [FeeController::class, 'edit']);
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->post('/admin/update_fees', [FeeController::class, 'update'])->name('update');
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->get('/admin/delete_fees/{id}', [FeeController::class, 'delete']);

Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->get('/admin/registered_student', [UsersController::class, 'index']);
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->get('/admin/edit_students/{id}', [UsersController::class, 'edit']);
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->post('/admin/update_students', [UsersController::class, 'update'])->name('update');
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->get('/admin/delete_student/{id}', [UsersController::class, 'delete']);

Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->get('/admin/passport', [PassportController::class, 'index']);
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->get('/admin/edit_passport/{id}', [PassportController::class, 'edit']);
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->post('/admin/update_passport', [PassportController::class, 'update'])->name('update1');
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->get('/admin/delete_passport/{id}', [PassportController::class, 'delete']);

Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->get('/admin/registered_admin', [UsersController::class, 'index1']);
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->get('/admin/edit_admins/{id}', [UsersController::class, 'edit1']);
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->post('/admin/update_admins', [UsersController::class, 'update1'])->name('update');

