<?php include_once "../layout/heard.php"; ?>

<div class="container">

    <?php

    if (isset($_GET['p'])) {

        $pagina = $_GET['p'];


        switch ($pagina) {
            case 'home':
                //include_once "../php/cliente.php";
                break;
            case 'usuario':
                include_once "../php/usuario.php";
                break;
            case 'empresa':
                include_once "../php/empresa.php";
                break;
            case 'setor':
                include_once "../php/setor.php";
                break;
            case 'funcao':
                include_once "../php/funcao.php";
                break;

            case 'sub':
                include_once "../php/subgrupo.php";
                break;
            case 'grupo':
                include_once "../php/grupo.php";
                break;

            case 'logaut/':
                $Cliente->logaut();
                break;
            default:

                break;
        }
    }



    ?>



</div>

<?php include_once "../layout/footer.php"; ?>