<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServicoFormRequest;
use App\Models\Servico;
use Illuminate\Http\Request;

class Servicocontroller extends Controller
{
    public function Servico(ServicoFormRequest $request)
    {
        $servico = Servico::create([
            'nome' => $request->nome,
            'descricao'=>$request->descricao,
            'duracao'=>$request->duracao,
            'preco'=>$request->preco,

        ]);
        return response()->json([
            "sucess"=>true,
            "message"=> "Servico Cadastrado com sucesso",
        "data"=> $servico
        ]);

    }
    public function pesquisarPorNome(Request $request)
    {
        $servico = Servico::where('nome', 'like', '%' . $request->nome . '%')->get();

        if (count($servico) > 0) {

            return response()->json([
                'status' => true,
                'data' => $servico
            ]);
        }

        return response()->json([
            'status' => false,
            'message' => 'Não há resultados para pesquisa.'
        ]);
    }
}

