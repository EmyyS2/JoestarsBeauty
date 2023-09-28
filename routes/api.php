<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProfissionalController;
use App\Http\Controllers\ServicoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//serviços
Route::post('servico',[ServicoController::class, 'Servico']);
Route::get('servico/nome',[ServicoController::class, 'pesquisarPorNome']);
Route::get('servico/descricao',[ServicoController::class, 'pesquisarPoDescricao']);
Route::delete('servico/delete/{id}',[ServicoController::class, 'excluir']);
Route::put('servico/update',[ServicoController::class, 'update']);

//Clientes
route::post('clientes', [ClienteController::class, 'clientes']);
route::get('clientes/nome', [ClienteController::class, 'pesquisarPorNome']);
route::get('clientes/cpf', [ClienteController::class, 'pesquisarPorCpf']);
route::get('clientes/celular', [ClienteController::class, 'pesquisarPorCelular']);
route::get('clientes/email', [ClienteController::class, 'pesquisarPorEmail']);
route::delete('clientes/delete/{id}', [ClienteController::class, 'excluir']);
route::put('clientes/update', [ClienteController::class, 'update']);

//Profissional
route::post('Profissional', [ProfissionalController::class, 'Profissional']);
route::get('Profissional/nome', [ProfissionalController::class, 'pesquisarPorNome']);
route::get('Profissional/cpf', [ProfissionalController::class, 'pesquisarPorCpf']);
route::get('Profissional/celular', [ProfissionalController::class, 'pesquisarPorCelular']);
route::get('Profissional/email', [ProfissionalController::class, 'pesquisarPorEmail']);
route::delete('Profissional/delete/{id}', [ProfissionalController::class, 'excluir']);
route::put('Profissional/update', [ProfissionalController::class, 'update']);

