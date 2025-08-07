<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CollectionsController;
use App\Http\Controllers\DepartmentsController;
use App\Http\Controllers\GovernorsController;
use App\Http\Controllers\HistoriesController;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\TreasurersController;
use App\Http\Controllers\YearsController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::controller(CollectionsController::class) -> group(function(){

});
Route::controller(DepartmentsController::class) -> group(function(){

});

Route::controller(GovernorsController::class) -> group(function(){

});
Route::controller(CollectionsController::class) -> group(function(){

});
Route::controller(HistoriesController::class) -> group(function(){

});
Route::controller(PaymentsController::class) -> group(function(){

});
Route::controller(StudentsController::class) -> group(function(){

});
Route::controller(TreasurersController::class) -> group(function(){

});
Route::controller(YearsController::class) -> group(function(){

});





