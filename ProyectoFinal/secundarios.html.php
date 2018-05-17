<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>3 Col Portfolio - Start Bootstrap Template</title>

        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/3-col-portfolio.css" rel="stylesheet">

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

    <body>
        <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
            <div class="container-fluid">
                <a class="navbar-brand js-scroll-trigger" href="index.php">El arca del gusto</a>
                <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fa fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.php">Productos Primarios</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger active" href="index.php">Productos secundarios</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="estudiantes.html.php" >Recetas Estudiantes</a>
                        </li>

                        <?php
                        if (isset($_SESSION['log_in']) || isset($_SESSION["log_inEstud"])) {
                            echo '<li class="nav-item mx-0 mx-lg-1">
                           <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="close_session.php" >Log Out</a>
                        </li>';
                        } else {
                            echo '<li class="nav-item mx-0 mx-lg-1">
                           <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="login.html.php" >Log In</a>
                        </li>';
                        }
                        ?>

                    </ul>
                </div>
            </div>
        </nav>
        <br>
        <br>
        <br>
        <br>
        <br>

        <!-- Page Content -->
        <div class="container">

            <!-- Page Heading -->
            <h1 class="my-4">Productos Secundarios
            </h1>
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
            $sEstudiantesNombre = "SELECT estNombre FROM estudiantes";
            $sEstudiantesDescripcion = "SELECT estDescripcion FROM estudiantes";
            $sImagenesEstudiantes = "SELECT imgURL FROM imagenes WHERE imgRef=3";
            $imprimirDatos->SeleccionTabla($pdo, $sPrimarioNombre, $sPrimarioDescripcion, $sImagenesPrimarias, $sSecundarioNombre, $sSecundariosDescripcion, $sImagenesSecundarias, $sEstudiantesNombre, $sEstudiantesDescripcion, $sImagenesEstudiantes);
            $imprimirDatos->ImprimirSecundarios();
            ?>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->
    <br>
    <br>

    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
        </div>
        <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>

