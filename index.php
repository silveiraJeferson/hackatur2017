<?php include_once './partes_pagina/cabecalho.php'; ?>

<?php
require_once './classes/route.class.php';
include_once './divs/nav_topo.php';
include 'partes_pagina/div_esquerda.php';
?>

<div class="container">

    <?php
    if ($_GET['pag'] != NULL) {
        include_once 'partes_pagina/form_busca.php';
        include_once './divs/nav_hamb.php';
    }

    $pag = $_GET['pag'];
    if ($pag == NULL) {
        include_once 'paginas/login.php';
    } else {
        include_once "paginas/$pag.php";
    }
    ?>





</div>
<?php include_once './partes_pagina/rodape.php'; ?>
    