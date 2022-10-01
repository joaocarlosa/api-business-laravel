<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\CollaboratorController;

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
/*
Route::apiResources([
    'testamento' => TestamentoController::class,
    'livro' => LivroController::class,
    'versiculo' => VersiculoController::class
]);

*/

#Route::apiResource('colaborador', [ColaboradorController::class, 'index']);


Route::get('/company/all', [CompanyController::class, 'index']);
Route::get('/company/{id}', [CompanyController::class, 'show']);
Route::post('/company', [CompanyController::class, 'store']);

Route::get('/collaborators/all', [CollaboratorController::class, 'index']);
Route::get('/collaborators/{id}', [CollaboratorController::class, 'show']);
Route::post('/collaborators', [CollaboratorController::class, 'store']);
Route::delete('/collaborators/{id}', [CollaboratorController::class, 'destroy']);

Route::get('/manager/all', [ManagerController::class, 'index']);
Route::get('/manager/{id}', [ManagerController::class, 'show']);
Route::post('/manager', [ManagerController::class, 'store']);
Route::delete('/manager/{id}', [ManagerController::class, 'destroy']);



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
