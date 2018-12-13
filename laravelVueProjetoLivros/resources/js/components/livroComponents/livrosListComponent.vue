<!-- TODO: criar componente, declarar no app.js e chamar na view -->
<script>

    export default {
        name: 'VueLivrosList',
        props: ['livros'],

        data () {
            return {
                books: JSON.parse(this.livros)
            }
        },
        methods: {

        },
        ready () {
            //TODO: posteriomente, vou preparar essa rota e refatorar o comopnente para ficar desse modo:
            //Exemplo de como poderia ser feita uma chamada ajax para alimentar o componente
            //de informações, puxando dados de uma rota no formato de api
            //Desta forma, sem depender que informações sejam enviadas pelo blade,
            //o componente fica mais independente
            //this.$http.get('/api/livros/index').then((req) => this.livros = req.data)
        }
    }

</script>


<template>
    <div>

        <!-- TODO: Fazer algum tratamento para quando não houver nenhum livro cadastrado a ser exibido -->

        <h1>LISTA DE LIVROS</h1>
        <br><br>

        <div class="table-responsive">   
            <table class="table">

                <thead class="thead-light">                
                    <th class="font-weight-bold ">TÍTULO</th>
                    <th class="font-weight-bold">AUTOR</th>
                    <th class="font-weight-bold">PAGINAS</th>
                    <th class="font-weight-bold">LANÇAMENTO</th>
                    <th class="font-weight-bold">EDITORA</th>
                    <th class="font-weight-bold">EDIÇÃO</th>
                    <th class="font-weight-bold">GENERO</th>
                    <th class="font-weight-bold">DESCRIÇÃO</th>
                    <th class="font-weight-light"> EDITAR </th>
                    <th class="font-weight-light"> EXCLUIR </th>
                </thead>

                <tbody> 
                    <tr v-for="livro in books" :key="livro.id">                    
                        <td class="align-middle">{{livro.titulo}}</td>
                        <td class="align-middle">{{livro.autor}}</td>
                        <td class="align-middle">{{livro.paginas}}</td>
                        <td class="align-middle">{{livro.anoLancamento}}</td>
                        <td class="align-middle">{{livro.editora}}</td>
                        <td class="align-middle">{{livro.edicao}}</td>
                        <td class="align-middle">{{livro.genero}}</td>
                        <td class="align-middle">{{livro.descricao}}</td>


                        <!--botão para editar livro -->
                        <td>
                            <a href="#">
                                <button class="btn btn-outline-secondary btn-sm">EDITAR</button>
                            </a>
                        </td>

                        <!--botão para excluir livro -->
                        <td>
                            <a href="#">
                                <button class="btn btn-outline-secondary btn-sm">EXCLUIR</button>
                            </a>
                        </td>

                    </tr>    
                </tbody>
            </table>    

        </div>
    </div>
</template>