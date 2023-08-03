<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CestaController;

Route::get('/', [AuthController::class, 'index'] )->name('index');
Route::get('/login', [AuthController::class, 'login'] )->name('login');
Route::get('/register', [AuthController::class, 'registrar'])->name('registrar');
Route::post('/register/aSAsDaUcction_rYTAAgister', [AuthController::class, 'action_register'])->name('action.register');
Route::post('/login/action_login', [AuthController::class, 'action_login'])->name('action_login');
Route::get('/logout', [AuthController::class, 'logout'] )->name('logout');

Route::middleware(['auth'])->group(function(){
    Route::get('/home', [SiteController::class, 'home'])->name('home');
    Route::get('/home{id}', [SiteController::class, 'delete_produto'])->name('delete.produto');
});

Route::get('/add_info', [SiteController::class, 'add_cliente'])->name('add.cliente');
Route::get('/add_cliente_action', [SiteController::class, 'add_cliente_action'])->name('add.cliente.action');

Route::get('/add_info/add_carrinho', [CestaController::class, 'addItemCart'])->name('index.carrinho');
Route::get('/add_produtos', [CestaController::class, 'index'])->name('add.produtos');
Route::get('/del_produtos{id}', [CestaController::class, 'deleteItemCart'])->name('del.item.cart');



Route::get('/add_produtos/obrigado', [SiteController::class, 'obrigado'])->name('obrigado');

