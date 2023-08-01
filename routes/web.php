<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\ProdutosController;

use App\Http\Controllers\UsuariosController;

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

Route::get('/', [HomeController::class, 'home'])->name ('home');

Route::get('produtos/inserir', [ProdutosController::class, 'create'])->name('produtos.inserir');
   // return "Pagina de inserir produto";

Route::get('produtos/{id}', [ProdutosController::class, 'show'])->name('produtos.descricao');
//alteraçao da rota a cima passando apenas id e nao 2 valores como a de baixo nome e valor.
//Route::get('produtos/{nome}/{valor?}', [ProdutosController::class, 'show'])->name('produtos.descricao');



Route::get('produtos', [ProdutosController::class, 'index'])->name('produtos');
//Route::resource('produtos', ProdutosController::class);

Route::post('produtos', [ProdutosController::class, 'insert'])->name('produtos.insert');
//a rota é a msm porem o metodo é difernete muda de get para post index para insert e produto para produtos insert na hora da chamada muda

Route::get('produtos/{produto}/edit', [ProdutosController::class, 'edit'])->name('produtos.edit');
//sempre preciso colocar a diferença de uma para outra se nao da conflito

Route::put('produtos/{produto}', [ProdutosController::class, 'editar'])->name('produtos.editar');

Route::get('produtos/{produto}/delete', [ProdutosController::class, 'modal'])->name('produtos.modal');

Route::delete('produtos/{produto}', [ProdutosController::class, 'delete'])->name('produtos.delete');

Route::post('login', [UsuariosController::class, 'login'])->name('login');
//rota criada para o usuario controler parte do login bem ao final

Route::get('logout', [UsuariosController::class, 'logout'])->name('usuarios.logout');
//rota para deslogar.
