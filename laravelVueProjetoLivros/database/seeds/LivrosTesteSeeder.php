<?php

use Illuminate\Database\Seeder;

class LivrosTesteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        DB::table('livros')->insert(
            [
                'isbn' => '9788580416824',
                'titulo' => 'JARDINS DA LUA',
                'autor' => 'Steven Erikson',      
                'paginas' => '608',
                'anoLancamento' => '2017',    
                'editora' => 'Arqueiro',
                'edicao' => '1',
                'genero' => 'Grimdark Fantasy',
                'descricao' => 'descricao exemplo'
            ],
            [
                'isbn' => '9788580411874',
                'titulo' => 'O Poder da Espada',
                'autor' => 'Joe Abercrombie',
                'paginas' => '480',
                'anoLancamento' => '2014',
                'editora' => 'Arqueiro',
                'edicao' => '2',
                'genero' => 'Grimdark Fantasy',
                'descricao' => 'descricao exemplo'

            ],
            [
                'isbn' => '9788567296340',
                'titulo' => 'A Filha do Império',
                'autor' => 'Raymond E. Feist',
                'paginas' => '464',
                'anoLancamento' => '2016',
                'editora' => 'Arqueiro',
                'edicao' => '1',
                'genero' => 'Fantasy',
                'descricao' => 'descricao exemplo'
            ]
        );
    
        



    }
}
