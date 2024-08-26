<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\VillageController;
use App\Http\Controllers\WasteController;
use App\Http\Controllers\GarbageController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\EmployeeController; // Import the EmployeeController
use App\Http\Controllers\ExpenseController;

// เส้นทางสาธารณะ
Route::get('/', function () {
    return redirect()->route('login');
});

// เส้นทางการยืนยันตัวตน
Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');

    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');

    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

// เส้นทางสำหรับผู้ใช้ที่เข้าสู่ระบบแล้ว
Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // เส้นทางสำหรับ Village
    Route::controller(VillageController::class)->prefix('villages')->group(function () {
        Route::get('', 'index')->name('villages.index');
        Route::get('create', 'create')->name('villages.create');
        Route::post('store', 'store')->name('villages.store');
        Route::get('show/{village_id}', 'show')->name('villages.show');
        Route::get('edit/{village_id}', 'edit')->name('villages.edit');
        Route::put('update/{village_id}', 'update')->name('villages.update');
        Route::delete('destroy/{village_id}', 'destroy')->name('villages.destroy');
    });

    // เส้นทางสำหรับ Waste
    Route::controller(WasteController::class)->prefix('wastes')->group(function () {
        Route::get('', 'index')->name('wastes.index');
        Route::get('create', 'create')->name('wastes.create');
        Route::post('store', 'store')->name('wastes.store');
        Route::get('show/{id}', 'show')->name('wastes.show');
        Route::get('edit/{id}', 'edit')->name('wastes.edit');
        Route::put('update/{id}', 'update')->name('wastes.update');
        Route::delete('destroy/{id}', 'destroy')->name('wastes.destroy');
    });

    // เส้นทางสำหรับ Garbage
    Route::controller(GarbageController::class)->prefix('garbages')->group(function () {
        Route::get('', 'index')->name('garbages.index');
        Route::get('create', 'create')->name('garbages.create');
        Route::post('store', 'store')->name('garbages.store');
        Route::get('show/{id}', 'show')->name('garbages.show');
        Route::get('edit/{id}', 'edit')->name('garbages.edit');
        Route::put('update/{id}', 'update')->name('garbages.update');
        Route::delete('destroy/{id}', 'destroy')->name('garbages.destroy');
    });

    // เส้นทางสำหรับ Vehicles
    Route::controller(VehicleController::class)->prefix('vehicles')->group(function () {
        Route::get('', 'index')->name('vehicles.index');
        Route::get('create', 'create')->name('vehicles.create');
        Route::post('store', 'store')->name('vehicles.store');
        Route::get('show/{id}', 'show')->name('vehicles.show');
        Route::get('edit/{id}', 'edit')->name('vehicles.edit');
        Route::put('update/{id}', 'update')->name('vehicles.update');
        Route::delete('destroy/{id}', 'destroy')->name('vehicles.destroy');
    });

    // เส้นทางสำหรับ Employees
    Route::controller(EmployeeController::class)->prefix('employees')->group(function () {
        Route::get('', 'index')->name('employees.index');
        Route::get('create', 'create')->name('employees.create');
        Route::post('store', 'store')->name('employees.store');
        Route::get('show/{id}', 'show')->name('employees.show');
        Route::get('edit/{id}', 'edit')->name('employees.edit');
        Route::put('update/{id}', 'update')->name('employees.update');
        Route::delete('destroy/{id}', 'destroy')->name('employees.destroy');
    });

     // เส้นทางสำหรับ Expenses
     Route::controller(ExpenseController::class)->prefix('expenses')->group(function () {
        Route::get('', 'index')->name('expenses.index');
        Route::get('create', 'create')->name('expenses.create');
        Route::post('store', 'store')->name('expenses.store');
        Route::get('show/{id}', 'show')->name('expenses.show');
        Route::get('edit/{id}', 'edit')->name('expenses.edit');
        Route::put('update/{id}', 'update')->name('expenses.update');
        Route::delete('destroy/{id}', 'destroy')->name('expenses.destroy');
    });

    // เส้นทางสำหรับโปรไฟล์
    Route::get('/profile', [AuthController::class, 'profile'])->name('profile');
});
