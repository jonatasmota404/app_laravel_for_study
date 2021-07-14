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

Route::get('/', [PrincipalController::class, 'principal'])->name('site.index');

Route::get('/about', [AboutController::class,'about'])->name('site.about');

Route::get('/contact', [ContactController::class, 'contact'])->name('site.contact');

//Novas rotas teste
Route::get('/login', function (){
    return 'Login';
})->name('site.login');

Route::prefix('/app')->group(function (){

    Route::get('/clientes', function (){
        return 'Clientes';
    })->name('app.clientes');

    Route::get('/fornecedores', function (){
        return 'Fornecedores';
    })->name('app.fornecedores');

    Route::get('/produtos', function (){
        return 'Produtos';
    })->name('app.produtos');
});

//Rotas para teste de redirecionamento
Route::get('/rota1', function (){
    echo 'Rota 1';
})->name('site.rota1');

Route::get('/rota2', function (){
    return redirect()->route('site.rota1');
})->name('site.rota2');

Route::fallback(function (){
    echo 'Essa rota não existe <a href="'.route('site.index').'">Clique aqui para retornar</a>';
});
//Route::redirect('/rota2', '/rota1');
//Fins de teste
/*Route::get('/contact/{nome}/{categoria_id}', function (string $nome, int $categoria_id = 1){
    echo "$nome  $categoria_id";
})->where('categoria_id', '[0-9]+')->where('nome', '[A-Za-z]+');*/
