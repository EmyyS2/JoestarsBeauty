<?php
use App\Http\Controllers\ServicoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post(
    'servico',
    [ServicoController::class, 'Servico']
);

Route::get(
    'nome',
    [ServicoController::class, 'pesquisarPorNome']
);

Route::get(
    'descricao',
    [ServicoController::class, 'pesquisarPoDescricao']
);

Route::delete(
    'delete/{id}',
    [ServicoController::class, 'excluir']
);

Route::put(
    'atualizar',
    [ServicoController::class, 'update']
);
