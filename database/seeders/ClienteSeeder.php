<?php

namespace Database\Seeders;

use App\Models\cliente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class clienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i=0; $i< 100; $i++){
        cliente::create([
            'nome' => 'Teste'.$i,
            'email' => 'teste'.$i.'@gmail.com.br',
            'cpf' => rand(00000000001, 99999999999),
            'celular' => rand(00000000001, 99999999999),
            'dataNascimento'=> '1111-12-11',
            'cidade'=> 'cidadeTeste',
            'estado'=> 'sp',
            'pais'=> 'brasil',
            'rua'=> 'teste',
            'numero'=> '1222',
            'bairro'=> 'teste',
            'cep'=> '12345678',
            'complemento'=> 'teste',
            'password' => Hash::make('123456'),
        ]);
    }
}
}