<?php

use App\Models\Produto;
use App\Http\Controllers\ProdutosController;
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

// Listar todos os produtos
Route::get('/produtos', [ProdutosController::class, 'index']);

// adicionar produto
Route::post('/produtos', [ProdutosController::class, 'store']);

// atualizando produto por ID
Route::put('/produtos/{produtos}', [ProdutosController::class, 'update']);

// deletando produtos por ID
Route::delete('/produtos/{produtos}', [ProdutosController::class, 'destroy']);