<?php

use App\Http\Controllers\UnidadeMedidaController;
use App\Http\Controllers\GrandezaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('{grandeza}/{unidadeorigem}/{unidadedestino}', [UnidadeMedidaController::class, 'converter']);
Route::get('grandezas', [GrandezaController::class, 'grandezas']);
Route::get('unidades/', [UnidadeMedidaController::class, 'unidades']);
// Route::get('{grandeza}/{unidadeorigem}/{unidadedestino}', function ($unidade, $posterior) {

//     echo $unidade . " " . $posterior;
// });
