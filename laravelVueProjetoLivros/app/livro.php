<?php

namespace laravelVueProjetoLivros;

use Illuminate\Database\Eloquent\Model;

class livro extends Model
{
    protected $fillable = array('isbn','titulo','autor', 'paginas', 'anoLancamento', 'editora', 'edicao', 'genero', 'descricao');



}
