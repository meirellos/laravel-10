<?php

use App\Http\Controllers\ClientesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\VendasController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return redirect()->route('login.index');
});

Route::prefix('login')->group(function () {
    Route::get('/', [LoginController::class, 'index'])->name('login.index');
    Route::post('/login', [LoginController::class, 'store'])->name('login.store');
    Route::get('/register', [LoginController::class, 'register'])->name('login.register');
    Route::post('/register', [LoginController::class, 'register'])->name('login.register');

    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});


Route::middleware(['auth'])->group(function () {
    Route::prefix('dashboard')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
    });

    //localhost:8989/produtos
    Route::prefix('produtos')->group(function () {
        Route::get('/', [ProdutosController::class, 'index'])->name('produto.index');

        Route::get('/adicionarProduto', [ProdutosController::class, 'adicionarProduto'])->name('adicionar.produto');
        Route::post('/adicionarProduto', [ProdutosController::class, 'adicionarProduto'])->name('adicionar.produto');

        Route::get('/atualizarProduto/{id}', [ProdutosController::class, 'atualizarProduto'])->name('atualizar.produto');
        Route::put('/atualizarProduto/{id}', [ProdutosController::class, 'atualizarProduto'])->name('atualizar.produto');

        Route::delete('/delete', [ProdutosController::class, 'delete'])->name('produto.delete');
    });

    Route::prefix('clientes')->group(function () {
        Route::get('/', [ClientesController::class, 'index'])->name('cliente.index');

        Route::get('/adicionarCliente', [ClientesController::class, 'adicionarCliente'])->name('adicionar.cliente');
        Route::post('/adicionarCliente', [ClientesController::class, 'adicionarCliente'])->name('adicionar.cliente');

        Route::get('/atualizarCliente/{id}', [ClientesController::class, 'atualizarCliente'])->name('atualizar.cliente');
        Route::put('/atualizarCliente/{id}', [ClientesController::class, 'atualizarCliente'])->name('atualizar.cliente');

        Route::delete('/delete', [ClientesController::class, 'delete'])->name('cliente.delete');
    });

    Route::prefix('vendas')->group(function () {
        Route::get('/', [VendasController::class, 'index'])->name('venda.index');

        Route::get('/adicionarVenda', [VendasController::class, 'adicionarVenda'])->name('adicionar.venda');
        Route::post('/adicionarVenda', [VendasController::class, 'adicionarVenda'])->name('adicionar.venda');

        Route::get('/enviaComprovanteEmail/{id}', [VendasController::class, 'enviaComprovanteEmail'])->name('enviaComprovanteEmail.venda');

        Route::delete('/delete', [VendasController::class, 'delete'])->name('venda.delete');
    });

    Route::prefix('usuarios')->group(function () {
        Route::get('/', [UsuariosController::class, 'index'])->name('usuario.index');

        Route::get('/adicionarUsuario', [UsuariosController::class, 'adicionarUsuario'])->name('adicionar.usuario');
        Route::post('/adicionarUsuario', [UsuariosController::class, 'adicionarUsuario'])->name('adicionar.usuario');

        Route::get('/atualizarUsuario/{id}', [UsuariosController::class, 'atualizarUsuario'])->name('atualizar.usuario');
        Route::put('/atualizarUsuario/{id}', [UsuariosController::class, 'atualizarUsuario'])->name('atualizar.usuario');

        Route::delete('/delete', [UsuariosController::class, 'delete'])->name('usuario.delete');
    });
});
