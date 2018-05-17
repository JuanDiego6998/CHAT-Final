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

    </head>
    <body id="page-top">

        <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="index.php">El arca del gusto</a>
                <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fa fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolioPrimarios">Productos Primarios</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolioSecundarios">Productos secundarios</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="login.html.php" >Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <section id="contact">
            <br>
            <br>
            <br>
            <div class="container-">
                <h2 class="text-center text-uppercase text-secondary mb-0">Nueva Receta</h2>
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                        <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                        <form name="Registro"  action="" method="POST" enctype="multipart/form-data">
                            <?php
                            require __DIR__ . "../ingresoPrimario_baseDatos.php";
                            $iRef = 2;
                            $secundariosNombre = "secNombre";
                            $secundariosDescripcion = "secDescripcion";
                            $tabla = "secundarios";
                            if(isset($_POST["ingresar"])){
                            $test = new insertToDB($pdo);
                            $test->Insert($_POST["nombre"],$_POST["descripcion"], $secundariosNombre, $secundariosDescripcion, $tabla);
                            $test->InsertURL($sNombreFoto, $iRef);
                            }
                            ?>
                                    
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label for="userName">Ingresar Nombre</label>
                                    <input class="form-control" name="nombre" type="text" placeholder="Nombre: Receta" required="required" data-validation-required-message="por favor ingresar Nombre de la receta.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Password</label>
                                    <input class="form-control" name="descripcion" type="Descripcion" placeholder="Descripcion" required="required" data-validation-required-message="Por favor ingresar descripcion.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                Select image to upload:
                                <input type="file" name="file" id="fileToUpload">
                            </div>
                            <br>
                            <div id="success"></div>
                            <div class="form-group">
                                <button type="submit" name='ingresar' class="btn btn-primary btn-xl">Ingresar</button>

                            </div>

                        </form>


                    </div>
                </div>
            </div>
        </section>
    </body>

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
</html>
