<?php

namespace laravelVueProjetoLivros\Http\Controllers;

use laravelVueProjetoLivros\livro;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    /**
     * Exibe a lista de itens salvos no banco
     */
    public function index(){
        //TODO
    }

    /**
     * Retorna a página que mostra o formulário
     * para cadastro de um novo item
     */
    public function create(){
        //TODO 
    }

    /**
     * Salva o item no banco
     */
    public function store(Request $request){
        //TODO
    }

    /**
     * Exibe o item solicitado
     */
    public function show(Livro $livro){
        //TODO
    }

    /**
     * Exibe o formulário para edição de um item
     */
    public function edit(Livro $livro){
        //TODO
    }

    /**
     * Atualiza o item no banco 
     */
    public function update(Request $request, Livro $livro) {
        //TODO
    }

    /**
     *   Apaga o recurso do banco
     */
    public function destroy(Livro $livro)
    {
        //TODO
    }
}
