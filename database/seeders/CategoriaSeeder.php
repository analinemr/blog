<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{

    //Criação de tabela para teste (sem retorno de dados)
    public function run(): void
    {
        DB::table('Categorias')->insert([
            'nome' => 'Sapato',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('Categorias')->insert([
            'nome' => 'Meia',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('Categorias')->insert([
            'nome' => 'Tênis',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
