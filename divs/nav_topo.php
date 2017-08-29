
<script>
    $(document).ready(function () {
        $(".button-collapse").sideNav();
    });

</script>
<?php if ($_GET['pag'] != null): ?>
    <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper #8e24aa purple darken-1">
                <a href="?pag=inicio" class="brand-logo"><img src="imagens/logo.png" alt="" width="120px"/></a>

                <a href="?pag=inicio" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                <div class="container">
                    <ul class="left hide-on-med-and-down">
                        <li class="active"><a href="?pag=inicio">Home</a></li>
                        <li><a class='dropdown-button btn #8e24aa purple darken-1' href='#' data-activates='dropdown1'>Serviços</a></li>
                        <li><a class=' btn #8e24aa purple darken-1' href="?pag=pontos_turisticos">Pontos Turisticos</a></li>
                        
                        <li><a class=' btn #8e24aa purple darken-1' href="?pag=hotel" >Hospedagem</a></li>
                        <li><a class=' btn #8e24aa purple darken-1' href="?pag=gastronomia">Gastronomia</a></li>
                    </ul>

                </div>
                <ul class="right hide-on-med-and-down">
                    <li> <a href="?pag=perfil"><i class="large material-icons">person</i></a></li>
                    <li> <a href="?pag="><i class="large material-icons">exit_to_app</i></a></li>


                </ul>

            </div>
        </nav>
    </div>
    <ul class="side-nav" id="mobile-demo">
        <li><a href="?pag=inicio">Home</a></li>
        <li><a href="?pag=pontos_turisticos">Pontos Turísticos</a></li>
        <li><a href="?pag=eventos">Eventos</a></li>
        <li><a href="?pag=servicos">Serviços</a></li>
        <li><a href="?pag=hotel">Hospedagem</a></li>
        <li><a href="?pag=gastronomia">Gastronomia</a></li>
        <li><a href="?pag=transporte">Transportes</a></li>
        <li><a href="?pag=perfil">Ver Perfil</a></li>
        <li><a href="?pag=">Sair</a></li>

    </ul>



    <ul id='dropdown1' class='dropdown-content'>
        <li><a href="#!">Mercados</a></li>
        <li><a href="?pag=local_hospitais">Hospitais</a></li>    
        <li><a href="#!">Delegacias</a></li>
        <li><a href="#!">Farmácias</a></li>

    </ul>
<?php else: ?>



    <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper #8e24aa purple darken-1">
                <a href="?pag=" class="brand-logo"><img src="imagens/logo.png" alt="" width="100px"/></a>

                <a href="?pag=inicio" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>


            </div>
        </nav>
    </div>
<?php endif; ?>