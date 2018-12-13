
<!-- 
No bootstrap, as barras de navegação precisam estar dentro de algum
invólucro que utilize a classe "navbar" 
-->
<!-- 
Por padrão, as barras de navegação do bootstrap são verticais.
Essa clase "navbar-expand-sm" está dizendo que é desejado expandir a navbar,
ou seja, a navbar vai ficar na horizontal. 
O "sm" indica a exceção, que seriam as telas pequenas ("sm" é de small) 
-->
<nav class="navbar navbar-expand-sm fixed-top navbar-dark bg-dark ">

    <!-- Essa classe "navbar-brand" pode ser usada para um logotipo ou título na navbar -->
    <!-- TODO: colocar um link para a home page -->
    <a class="navbar-brand" href="/">LOGOTIPO</a>


    <!-- botão que agrupa a lista de itens da barra de navegação, no caso de telas pequenas -->
    <button class="navbar-toggler" data-target="#navbartopo" type="button" data-toggle="collapse" aria-controls="navbartopo" aria-expanded="false" aria-label="Botão de navegação">
        <span class="navbar-toggler-icon"></span>
    </button>


    
    <!-- lista de itens da barra de navegação, que pode ser colapsada pelo navbar-toggler -->
    <div class="collapse navbar-collapse" id="navbartopo">

        <!-- Canto esquerdo da barra de navegação -->
        <ul class="navbar-nav mr-auto" >
            <li class="nav-item">                
                <a class="nav-link" href="{{route('livros.index')}}">Livros</a>
            </li>

            <li class="nav-item">                 
                <a class="nav-link" href="#">Autores</a>
            </li>

            <li class="nav-item">                
                <a class="nav-link" href="#">Sobre</a>
            </li>

        </ul>

        <!-- TODO: canto direito da barra de navegação -->
        <!--    
        <ul class="navbar-nav ml-auto" >
        </ul>        
        --> 
        

    </div>
</nav>