<?php

//namespace App\Http\Controllers;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;


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

Route::get('/', [PrincipalController::class, 'principal']);

Route::get('/about', [AboutController::class,'about']);

Route::get('/contact', [ContactController::class, 'contact']);

//Novas rotas teste
Route::get('/login', function (){
    return 'Login';
});

Route::get('/clientes', function (){
    return 'Clientes';
});

Route::get('/fornecedores', function (){
    return 'Fornecedores';
});

Route::get('/produtos', function (){
    return 'Produtos';
});

//Fins de teste
/*Route::get('/contact/{nome}/{categoria_id}', function (string $nome, int $categoria_id = 1){
    echo "$nome  $categoria_id";
})->where('categoria_id', '[0-9]+')->where('nome', '[A-Za-z]+');*/
