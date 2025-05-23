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
            'nome' => 'Anéis',
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

        DB::table('Categorias')->insert([
            'nome' => 'Bolsa',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('Categorias')->insert([
            'nome' => 'Mochila',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('Categorias')->insert([
            'nome' => 'Calça',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('Categorias')->insert([
            'nome' => 'Sandália',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('Categorias')->insert([
            'nome' => 'Botas',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('Categorias')->insert([
            'nome' => 'Carteira',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('Categorias')->insert([
            'nome' => 'Cintos',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('Categorias')->insert([
            'nome' => 'Meias',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('Categorias')->insert([
            'nome' => 'Chinelos',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('Categorias')->insert([
            'nome' => 'Sacolas',
            'created_at' => now(),
            'updated_at' => now()
        ]);

    }
}
