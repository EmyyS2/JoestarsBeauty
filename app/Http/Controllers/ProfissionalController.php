<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfissionalFormRequest;
use App\Http\Requests\ProfissionalFormRequestUpdate;
use App\Models\Profissional;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfissionalController extends Controller
{
    public function Profissional(ProfissionalFormRequest $request)
    {
        $Profissional = Profissional::create([
            'nome' => $request->nome,
            'celular' => $request->celular,
            'email' => $request->email,
            'cpf' => $request->cpf,
            'dataNascimento' => $request->dataNascimento,
            'cidade' => $request->cidade,
            'estado' => $request->estado,
            'pais' => $request->pais,
            'rua' => $request->rua,
            'numero' => $request->numero,
            'bairro' => $request->bairro,
            'cep' => $request->cep,
            'complemento' => $request->complemento,
            'senha' => Hash::make($request->senha),
            'salario' => $request->salario,
        ]);
        return response()->json([
            "success" => true,
            "message" => "Profissional cadastrado com sucesso",
            "data" => $Profissional
        ], 200);
    }
    public function pesquisarPorNome(Request $request)
    {
        $Profissional =  Profissional::where('nome', 'like', '%' . $request->nome . '%')->get();
        if (count($Profissional) > 0) {
            return response()->json([
                'status' => true,
                'data ' => $Profissional
            ]);
        }
        return response()->json([
            'status' => false,
            'message' => 'não há resultados para pesquisa.'
        ]);
    }

    public function pesquisarPorCpf(Request $request)
    {
        $Profissional=  Profissional::where('cpf', 'like', '%' . $request->cpf . '%')->get();
        if (count($Profissional) > 0) {
            return response()->json([
                'status' => true,
                'data ' => $Profissional
            ]);
        }
        return response()->json([
            'status' => false,
            'message' => 'não há resultados para pesquisa.'
        ]);
    }
    public function pesquisarPorCelular(Request $request)
    {
        $Profissional =  Profissional::where('celular', 'like', '%' . $request->celular . '%')->get();
        if (count($Profissional) > 0) {
            return response()->json([
                'status' => true,
                'data ' => $Profissional
            ]);
        }
        return response()->json([
            'status' => false,
            'message' => 'não há resultados para pesquisa.'
        ]);
    }
    public function pesquisarPorEmail(Request $request)
    {
        $Profissional =  Profissional::where('email', 'like', '%' . $request->email . '%')->get();
        if (count($Profissional) > 0) {
            return response()->json([
                'status' => true,
                'data ' => $Profissional
            ]);
        }
        return response()->json([
            'status' => false,
            'message' => 'não há resultados para pesquisa.'
        ]);
    }

    public function excluir($id)
    {
        $Profissional = Profissional::find($id);
        if (!isset($Profissional)) {
            return response()->json([
                "status" => false,
                "message" => "Profissional não encontrado"
            ]);
        }
        $Profissional->delete();

        return response()->json([
            'status' => false,
            'message' => 'Profissional excluido com sucesso'
        ]);
    }

    public function update(ProfissionalFormRequestUpdate $request)
    {
        $Profissional = Profissional::find($request->id);

        if (!isset($Profissional)) {
            return response()->json([
                "status" => false,
                "message" => "Profissional não encontrado"
            ]);
        }

        if (isset($request->nome)) {
            $Profissional->nome = $request->nome;
        }
        if (isset($request->celular)) {
            $Profissional->celular = $request->celular;
        }
        if (isset($request->email)) {
            $Profissional->email = $request->email;
        }
        if (isset($request->cpf)) {
            $Profissional->cpf = $request->cpf;
        }
        if (isset($request->dataNascimento)) {
            $Profissional->dataNascimento = $request->dataNascimento;
        }
        if (isset($request->cidade)) {
            $Profissional->cidade = $request->cidade;
        }
        if (isset($request->estado)) {
            $Profissional->estado = $request->estado;
        }
        if (isset($request->pais)) {
            $Profissional->pais = $request->pais;
        }
        if (isset($request->rua)) {
            $Profissional->rua = $request->rua;
        }
        if (isset($request->numero)) {
            $Profissional->numero = $request->numero;
        }
        if (isset($request->bairro)) {
            $Profissional->bairro = $request->bairro;
        }
        if (isset($request->cep)) {
            $Profissional->cep = $request->cep;
        }
        if (isset($request->complemento)) {
            $Profissional->complemento = $request->complemento;
        }
        if (isset($request->senha)) {
            $Profissional->senha = $request->senha;
        }

        $Profissional->update();

        return response()->json([
            "status" => false,
            "message" => "Profissional atualizado"
        ]);
    }
}
