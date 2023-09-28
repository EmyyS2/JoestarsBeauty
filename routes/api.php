<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ServicoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//serviços
Route::post('servico',[ServicoController::class, 'Servico']);
Route::get('nome S',[ServicoController::class, 'pesquisarPorNome']);
Route::get('descricao',[ServicoController::class, 'pesquisarPoDescricao']);
Route::delete('delete S/{id}',[ServicoController::class, 'excluir']);
Route::put('atualizar',[ServicoController::class, 'update']);

//Clientes
route::post('clientes', [ClienteController::class, 'clientes']);
route::get('nome C', [ClienteController::class, 'pesquisarPorNome']);
route::get('cpf', [ClienteController::class, 'pesquisarPorCpf']);
route::get('celular', [ClienteController::class, 'pesquisarPorCelular']);
route::get('email', [ClienteController::class, 'pesquisarPorEmail']);
route::delete('deleteC/{id}', [ClienteController::class, 'excluir']);
route::put('update C', [ClienteController::class, 'update']);