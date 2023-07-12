<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CarrierPacketController;
use App\Http\Controllers\Api\LinkedDispatcherController;
use App\Http\Controllers\Api\LinkedDriverController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::get('packets', [CarrierPacketController::class, 'index']);

// Route::post('packets', [CarrierPacketController::class, 'add']);

Route::apiResource('carrier_packets', CarrierPacketController::class);
Route::post('carrier_packets/{carrier_packet}/linked_dispatchers', [LinkedDispatcherController::class, 'store']);
Route::put('carrier_packets/{carrier_packet}/linked_dispatchers/{linked_dispatcher}', [LinkedDispatcherController::class, 'update']);
Route::delete('carrier_packets/{carrier_packet}/linked_dispatchers/{linked_dispatcher}', [LinkedDispatcherController::class, 'destroy']);

Route::post('carrier_packets/{carrier_packet}/linked_drivers', [LinkedDriverController::class, 'store']);
Route::put('carrier_packets/{carrier_packet}/linked_drivers/{linked_driver}', [LinkedDriverController::class, 'update']);
Route::delete('carrier_packets/{carrier_packet}/linked_drivers/{linked_driver}', [LinkedDriverController::class, 'destroy']);