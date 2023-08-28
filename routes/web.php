<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\AgentController;

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

//applying role middleware for admin
Route::middleware(['auth' , 'role:admin'])->group(function(){
    //for Admin
    Route::get('/admin/dashboard' , [AdminController::class , 'adminDashboard'])->name('admin.dashboard');
    Route::get('/admin/logout' , [AdminController::class , 'adminLogout'])->name('admin.logout');

});

//applying role middleware for agent
Route::middleware(['auth' , 'role:agent'])->group(function(){
    //for Agent
    Route::get('/agent/dashboard' , [AgentController::class , 'agentDashboard'])->name('agent.dashboard');
});

