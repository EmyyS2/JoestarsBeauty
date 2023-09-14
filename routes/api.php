<?php
use App\Http\Controllers\ServicoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post(
    'servico',
    [ServicoController::class, 'Servico']
);

Route::post(
    'nome',
    [ServicoController::class, 'pesquisarPorNome']
);

Route::delete(
    'delete/{id}',
    [ServicoController::class, 'excluir']
);

Route::put(
    'atualizar',
    [ServicoController::class, 'update']
);
