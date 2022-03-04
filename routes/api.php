<?php

use App\Models\Produto;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\CidadeController;
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

// Listar Cidades
Route::get('/cidade', [CidadeController::class, 'index']);

// adicionar cidade
Route::post('/cidade', [CidadeController::class, 'store']);

// atualizando produto por ID
Route::put('/cidade/{cidade}', [CidadeController::class, 'update']);

// deletando produtos por ID
Route::delete('/cidade/{cidade}', [CidadeController::class, 'destroy']);