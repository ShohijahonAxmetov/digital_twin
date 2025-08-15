<?php

use App\Http\Controllers\{
	EquipmentController,
	ElementController,
	DowntimeReasonController,
	DowntimeController,
	RepairController,
};
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::prefix('admin')->name('admin.')->group(function() {
	Route::resource('equipments', EquipmentController::class);
	Route::resource('elements', ElementController::class);
	Route::resource('downtime_reasons', DowntimeReasonController::class);
	Route::resource('downtimes', DowntimeController::class);
	Route::resource('repairs', RepairController::class);

});