<?php

//namespace App\Http\Controllers;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\TesteController;
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

Route::get('/', [PrincipalController::class, 'principal'])->name('site.index');

Route::get('/about', [AboutController::class,'about'])->name('site.about');

Route::get('/contact', [ContactController::class, 'contact'])->name('site.contact');

Route::post('/contact', [ContactController::class, 'salvar'])->name('site.contact');

//Novas rotas teste
Route::get('/login', function (){
    return 'Login';
})->name('site.login');

Route::prefix('/app')->group(function (){

    Route::get('/clientes', function (){
        return 'Clientes';
    })->name('app.clientes');

    Route::get('/fornecedores', [FornecedorController::class, 'index'])->name('app.fornecedores');

    Route::get('/produtos', function (){
        return 'Produtos';
    })->name('app.produtos');
});

//Rotas para teste de redirecionamento
Route::get('/teste/{p1}/{p2}', [TesteController::class, 'teste'])->name('teste');


Route::fallback(function (){
    echo 'Essa rota não existe <a href="'.route('site.index').'">Clique aqui para retornar</a>';
});
