<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Rotas para posts
Route::get('/posts', [PostController::class, 'index']); // Listar todos os posts
Route::get('/posts/{id}', [PostController::class, 'show']); // Mostrar detalhes de um post
Route::post('/posts', [PostController::class, 'store']); // Criar um novo post
Route::put('/posts/{id}', [PostController::class, 'update']); // Atualizar um post
Route::delete('/posts/{id}', [PostController::class, 'destroy']); // Excluir um post



// Rotas para categorias
Route::get('/categories', [CategoryController::class, 'index']); // Listar todas as categorias
Route::get('/categories/{id}', [CategoryController::class, 'show']); // Mostrar detalhes de uma categoria
Route::post('/categories', [CategoryController::class, 'store']); // Criar uma nova categoria
Route::put('/categories/{id}', [CategoryController::class, 'update']); // Atualizar uma categoria
Route::delete('/categories/{id}', [CategoryController::class, 'destroy']); // Excluir uma categoria