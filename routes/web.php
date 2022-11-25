<?php

use Illuminate\Support\Facades\Route;

//mandar a llamar los controladores
use App\Http\Controllers\UserController;
use App\Http\Controllers\AcountController;
use App\Http\Controllers\BusController;
use App\Http\Controllers\CenterController;
use App\Http\Controllers\CuatrimestreController;
use App\Http\Controllers\DetailAcountController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\DirectionController;
use App\Http\Controllers\TrajectoryController;
use App\Http\Controllers\TruckStopController;

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

Route::get('/', function () {
    return view('welcome');
});
//redireccioner en view
Route::get('/funcion', function () {
   echo'<h1>Soy una ruta</h1>';
});



Route::resource('user', UserController::class);
Route::resource('Acount',AcountController::class);
Route::resource('BusView',BusController::class);
Route::resource('CenterView',CenterController::class);
Route::resource('CuatrimestreView',CuatrimestreController::class);
Route::resource('DetailAcountView',DetailAcountController::class);
Route::resource('DetailView',DetailController::class);
Route::resource('DirectionView', DirectionController::class);
Route::resource('DriverView', DriverController::class);
Route::resource('TrajectoryView', TrajectoryController::class);
Route::resource('TruckStopView', TruckStopController::class); //