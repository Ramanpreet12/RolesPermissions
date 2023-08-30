<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\AgentController;
use App\Http\Controllers\Backend\PropertyTypeController;
use App\Http\Controllers\Backend\AmenitiesController;
use App\Http\Controllers\Backend\RoleController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('admin/login' , [AdminController::class , 'adminLogin'])->name('admin.login');
//applying role middleware for admin
Route::middleware(['auth' , 'role:admin'])->group(function(){

    Route::prefix('admin/')->name('admin.')->group(function(){
        //for Admin settings
        Route::controller(AdminController::class)->group(function(){
            Route::get('dashboard' , 'adminDashboard')->name('dashboard');
            Route::get('profile' , 'adminProfile')->name('profile');
            Route::post('profile/store' ,'adminProfileStore')->name('profile.store');
            Route::get('change-password' , 'adminChangePassword')->name('change-password');
            Route::post('update-password' ,'adminUpdatePassword')->name('update-password');
            Route::get('slogout' , 'adminLogout')->name('logout');
        });

        //for property types

        Route::resources(['all-types' => PropertyTypeController::class]);
        Route::get('all-types/delete/{id}' , [PropertyTypeController::class , 'typeDelete'])->name('all-types.delete');

        //for amenities
        Route::resources(['amenities' => AmenitiesController::class]);
        Route::get('amenities/delete/{id}' , [AmenitiesController::class , 'amenityDelete'])->name('amenities.delete');

         //for Role  & permission
         Route::resources(['permissions' => RoleController::class]);
         Route::get('permissions/delete/{id}' , [RoleController::class , 'PermissionDelete'])->name('permissions.delete');
         Route::get('permission/import' , [RoleController::class , 'PermissionImport'])->name('permission.import');
         Route::get('permission/export' , [RoleController::class , 'export'])->name('permission.export');
         Route::post('permission/import' , [RoleController::class , 'import'])->name('permission.import');

    });




});

//applying role middleware for agent
Route::middleware(['auth' , 'role:agent'])->group(function(){
    //for Agent
    Route::get('/agent/dashboard' , [AgentController::class , 'agentDashboard'])->name('agent.dashboard');
});

