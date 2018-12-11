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
        <!-- por enquanto, feito um mínimo apenas para testar -->
        <!-- TODO: terminar a página -->
        <h1>LISTA DE LIVROS</h1>
        <br><br>

        <table class="table">

            <thead>                
                <th>Título</th>
                <!-- TODO: falta colocar os itens corretos. Isso aqui é só teste -->
            </thead>

            <tbody> 
                <tr v-for="livro in books" :key="livro.id">                    
                    <td>{{livro.titulo}}</td>
                    <!-- TODO: falta colocar os itens corretos. Isso aqui é só teste -->
                    <!-- TODO: falta incluir também os botões para editar e excluir -->
                </tr>    
            </tbody>


        </table>    
    </div>
</template>