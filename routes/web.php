<?php

use App\Http\Controllers\{
	EquipmentController,
	ElementController,
};
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::prefix('admin')->name('admin.')->group(function() {
	Route::resource('equipments', EquipmentController::class);
	Route::resource('elements', ElementController::class);

});