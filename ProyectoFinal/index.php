
<?php
session_start();
?>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>El arca del gusto</title>

        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom fonts for this template -->
        <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

        <!-- Plugin CSS -->
        <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

        <!-- Custom styles for this template -->
        <link href="css/freelancer.min.css" rel="stylesheet">
        <?php
        require_once __DIR__ . "../classDatos.php";
        ?>
    </head>

    <body id="page-top">

        <!-- Navigation -->
       <?php require __DIR__ . "../nav_bar.html.php"  ?>

        <!-- Header -->
        <header class="masthead bg-primary text-white text-center" >
            <div class="container">

                <h1 class="text-uppercase mb-0">El arca del gusto</h1>

                <h2 class="font-weight-light mb-0">Patrimonio alimenticio del Ecuador</h2>
            </div>
        </header>

        <!-- Productos primarios Grid Section -->
        <section class="portfolio" id="portfolioPrimarios">
            <div class="container">
                <h2 class="text-center text-uppercase text-secondary mb-0">Productos primarios</h2>
                <br>
                <br>

                <?php
                $sPrimarios = "primarios";
                $sSecundarios = "secundarios";
                $imprimirDatos = new Datos();
                $sPrimarioNombre = "SELECT priNombre FROM primarios";
                $sPrimarioDescripcion = "SELECT priDescripcion FROM primarios";
                $sSecundarioNombre = "SELECT secNombre FROM secundarios";
                $sSecundariosDescripcion = "SELECT secDescripcion FROM secundarios";
                $sImagenesPrimarias = "SELECT imgURL FROM imagenes WHERE imgRef=1";
                $sImagenesSecundarias = "SELECT imgURL FROM imagenes WHERE imgRef=2";
                $imprimirDatos->SeleccionTabla($pdo, $sPrimarioNombre, $sPrimarioDescripcion, $sImagenesPrimarias, $sSecundarioNombre, $sSecundariosDescripcion, $sImagenesSecundarias);
                $imprimirDatos->ImprimirThumbnailsPrimarios($sPrimarios);

                ?>



            </div>
            
                <?php
                
                if (isset($_SESSION['log_in'])) {
                    echo '
                           <a class="btn btn-primary btn-xl" href="ingresar_receta.html.php">Ingresar</a>
                        ';
                }
                ?>
        </div>
    </section>

    <!--Productos secundarios Section -->
    <section class = "portfolio" id = "portfolioSecundarios" style = "background-color: #6600cc">
        <div class = "container" >
            <h2 class = "text-center text-uppercase text-white mb-0">Productos Secundarios</h2>
            <br>
            <br>
            <?php
                $imprimirDatos->ImprimirThumbnailsSecundarios($sSecundarios)
                ?>

            </div>


                <?php

                
                if (isset($_SESSION['log_in'])) {
                    echo '
                           <a class="btn btn-primary btn-xl" style="background-color: white; color:#6600cc " href="ingresar_receta.html.php">Ingresar</a>
                        ';
                }
                ?>

        </div>
    </section>



    <!--Contact Section -->


    <!--Footer -->
    <footer class = "py-5 bg-dark">
        <br>
        <br>
        <br>
        <br>

        <div class = "container">
            <p class = "m-0 text-center text-white">Copyright &copy;
                Alexander Viteri, David Cevallos, Ignacio Vergara, Juan Diego Garzón</p>
        </div>
        <!--/.container -->
    </footer>



    <!--Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class = "scroll-to-top d-lg-none position-fixed ">
        <a class = "js-scroll-trigger d-block text-center text-white rounded" href = "#page-top">
            <i class = "fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- Primarios Modals -->
    <?php
        $imprimirDatos->ImprimirModalsPrimarios($sPrimarios);
        ?>

        <!-- Secundarios Modals -->
        <?php
        $imprimirDatos->ImprimirModalsSecundarios($sSecundarios);
        ?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/freelancer.min.js"></script>

</body>

</html>
