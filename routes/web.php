<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\TopSectionController;
use App\Http\Controllers\Admin\StaffController;
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

Route::get('/',[HomeController:: class, 'index'])->name('/');

//Route::group(['logoutCheck'],function (){
Route::get('login', [LoginController::class, 'index']);
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
//});


//Route::group(['middleware' =>'auth'],function (){

    Route::prefix('admin')->group(function () {

        Route::controller(DashboardController::class)->group(function (){
            Route::get('/dashboard',  'index')->name('dashboard');
        });
        Route::controller(UserController::class)->group(function (){
            Route::get('/profile',  'userProfile')->name('profile');
            Route::get('/change-password',  'changePassword')->name('change.password');
            Route::put('/update-password',  'updatePassword')->name('update.password');
            Route::post('update-profile/{id}','updateProfile')->name('update.profile');
        });

        Route::controller(TopSectionController::class)->group(function (){
            Route::get('/top-section','index')->name('top.section');
            Route::post('/section-top-store','store')->name('store.top.section');
            Route::get('/top-section-all','show')->name('show.top.section');
            Route::delete('/section-top-destroy/{id}','destroy')->name('destroy.top.section');
            Route::get('/top-section-edit/{id}','edit')->name('edit.top.section');
            Route::post('/section-top-update/{id_protfolio}', 'updated')->name('update.top.section');

        });
        Route::get('roles', [RoleController::class, 'index'])->name('admin.roles');
        Route::get('create-role', [RoleController::class, 'create'])->name('admin.create.role');
        Route::get('role-all',[RoleController::class,'show'])->name('show.role');
        Route::post('store-role', [RoleController::class, 'store'])->name('admin.store.role');
        Route::get('delete/roles/{id}', [RoleController::class, 'delete'])->name('admin.delete.role');
        Route::get('edit-role/{id}', [RoleController::class, 'edit'])->name('admin.edit.role');
        Route::put('update-role', [RoleController::class, 'update'])->name('admin.update.role');


        Route::get('staffs',[StaffController::class, 'index'])->name('admin.staffs');
        Route::get('create-staff',[StaffController::class,'create'])->name('admin.staffs.create');
        Route::post('create-staff',[StaffController::class,'store'])->name('admin.staffs.store');
//        Route::delete('delete/staff/{id}', [CommonController::class, 'delete'])->name('admin.staffs.delete')->middleware('PermissionCheck:staff_delete');
        Route::get('edit-staff/{id}', [StaffController::class, 'edit'])->name('admin.staffs.edit');
        Route::post('update-staff/{id}', [StaffController::class, 'update'])->name('admin.staffs.update');
        Route::get('delete-staff/{id}', [StaffController::class, 'destroy'])->name('admin.staffs.delete');
        Route::get('change-role', [StaffController::class, 'changeRole'])->name('change.role');


    });
//});
