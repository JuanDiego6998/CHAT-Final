
<nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
            <div class="container-fluid">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">El arca del gusto</a>
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
                            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="estudiantes.html.php" >Recetas Estudiantes</a>
                        </li>

                        <?php
                if (isset($_SESSION['log_in']) || isset($_SESSION['log_inEstud']) ) {
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