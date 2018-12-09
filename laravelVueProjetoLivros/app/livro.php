<?php

namespace laravelVueProjetoLivros;

use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    protected $fillable = array('isbn','titulo','autor', 'paginas', 'anoLancamento', 'editora', 'edicao', 'genero', 'descricao');



}
