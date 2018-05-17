<?php

try {
    $pdo = new PDO('mysql:host=localhost; dbname=chat; charset=utf8', 'chatAdmin', 'chat1234'); // conecccion a la base de datos, llamada chat bajo las credenciales especificadas
    //echo "Conectado";
} catch (Exception $ex) {
    echo "No conectado" . $ex;
}

class Datos {

    private $aImagenesPrimarias = array(),
            $aImagenesSecundarias = array(),
            $aNombrePrimario = array(),
            $aNombreSecundario = array(),
            $aDescripcionPrimario = array(),
            $aDescripcionSecundario = array(),
            $aNombreEstudiantes = array(),
            $aDescripcionEstudiantes = array(),
            $aImagenesEstudiantes = array();

    public function ImprimirThumbnailsPrimarios($sSeccion) {
        echo '<div class="row">';
        if (sizeof($this->aNombrePrimario) <= 6) {
            for ($i = 0; $i < sizeof($this->aNombrePrimario); $i++) {
                echo '<div class="col-md-6 col-lg-4">
                                <a class="portfolio-item d-block mx-auto" href="#' . $sSeccion . '-modal-' . ($i + 1) . '">
                                    <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                                        <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                                            <i class="fa fa-search-plus fa-3x"></i>
                                        </div>
                                    </div>

                                    <img class="img-fluid" src="' . $this->aImagenesPrimarias[$i] . '" alt="">

                                </a>
                            </div>';
            }
        } else {
            for ($i = 0; $i < 6; $i++) {
                echo '<div class="col-md-6 col-lg-4">
                                <a class="portfolio-item d-block mx-auto" href="#' . $sSeccion . '-modal-' . ($i + 1) . '">
                                    <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                                        <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                                            <i class="fa fa-search-plus fa-3x"></i>
                                        </div>
                                    </div>
                                    <img class="img-fluid" src="' . $this->aImagenesPrimarias[$i] . '" alt="">
                                </a>
                            </div>';
            }
        }
    }

    public function ImprimirThumbnailsSecundarios($sSeccion) {
        echo '<div class="row">';
        if (sizeof($this->aNombreSecundario) <= 6) {
            for ($i = 0; $i < sizeof($this->aNombreSecundario); $i++) {
                echo '<div class="col-md-6 col-lg-4">
                                <a class="portfolio-item d-block mx-auto" href="#' . $sSeccion . '-modal-' . ($i + 1) . '">
                                    <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                                        <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                                            <i class="fa fa-search-plus fa-3x"></i>
                                        </div>
                                    </div>
                                    <img class="img-fluid" src="' . $this->aImagenesSecundarias[$i] . '" alt="">
                                </a>
                            </div>';
            }
        } else {
            for ($i = 0; $i < 6; $i++) {
                echo '<div class="col-md-6 col-lg-4">
                                <a class="portfolio-item d-block mx-auto" href="#' . $sSeccion . '-modal-' . ($i + 1) . '">
                                    <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                                        <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                                            <i class="fa fa-search-plus fa-3x"></i>
                                        </div>
                                    </div>
                                    <img class="img-fluid" src="' . $this->aImagenesSecundarias[$i] . '" alt="">
                                </a>
                            </div>';
            }
        }
    }

    public function ImprimirModalsPrimarios($Seccion) {
        for ($i = 0; $i < sizeof($this->aNombrePrimario); $i++) {
            echo '<div class="portfolio-modal mfp-hide" id="' . $Seccion . '-modal-' . ($i + 1) . '">
            <div class="portfolio-modal-dialog bg-white">
                <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
                    <i class="fa fa-3x fa-times"></i>
                </a>
                <div class="container text-center">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <h2 class="text-secondary text-uppercase mb-0">' . $this->aNombrePrimario[$i] . '</h2>

                            <hr class="star-dark mb-5">

                            <img class="img-fluid mb-5" src="' . $this->aImagenesPrimarias[$i] . '" alt="">

                            <p class="mb-5">' . $this->aDescripcionPrimario[$i] . '</p>
                            <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                                <i class="fa fa-close"></i>
                                Close Project</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>';
        }
    }

    public function ImprimirModalsSecundarios($Seccion) {
        for ($i = 0; $i < sizeof($this->aNombreSecundario); $i++) {
            echo '<div class="portfolio-modal mfp-hide" id="' . $Seccion . '-modal-' . ($i + 1) . '">
            <div class="portfolio-modal-dialog bg-white">
                <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
                    <i class="fa fa-3x fa-times"></i>
                </a>
                <div class="container text-center">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <h2 class="text-secondary text-uppercase mb-0">' . $this->aNombreSecundario[$i] . '</h2>
                            <hr class="star-dark mb-5">
                            <img class="img-fluid mb-5" src="' . $this->aImagenesSecundarias[$i] . '" alt="">
                            <p class="mb-5">' . $this->aDescripcionSecundario[$i] . '</p>
                            <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                                <i class="fa fa-close"></i>
                                Close Project</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>';
        }
    }

    public function ImprimirPrimarios() {
        echo '<div class="row">';
        for ($i = 0; $i < sizeof($this->aNombrePrimario); $i++) {
            echo '<div class="col-lg-4 col-sm-6 portfolio-item">
                    <div class="card h-100">
                    <img class="card-img-top" src="'. $this->aImagenesPrimarias[$i] . '"alt="">
                        <div class="card-body">
                        <h4 class="card-title">'. $this->aNombrePrimario[$i] . '
                        </h4>
                        <p class="card-text">'. $this->aDescripcionPrimario[$i] .'</p>
                        </div>
                    </div>
                </div>';
        }
    }
    
    public function ImprimirSecundarios(){
        echo '<div class="row">';
        for ($i = 0; $i < sizeof($this->aNombreSecundario); $i++) {
            echo '<div class="col-lg-4 col-sm-6 portfolio-item">
                    <div class="card h-100">
                    <img class="card-img-top" src="'. $this->aImagenesSecundarias[$i] . '"alt="">
                        <div class="card-body">
                        <h4 class="card-title">'. $this->aNombreSecundario[$i] . '
                        </h4>
                        <p class="card-text">'. $this->aDescripcionSecundario[$i] .'</p>
                        </div>
                    </div>
                </div>';
        }
    }
    
    public function ImprimirEstudiantes(){
        echo '<div class="row">';
        for ($i = 0; $i < sizeof($this->aNombreEstudiantes); $i++) {
            echo '<div class="col-lg-4 col-sm-6 portfolio-item">
                    <div class="card h-100">
                    <img class="card-img-top" src="'. $this->aImagenesEstudiantes[$i] . '"alt="">
                        <div class="card-body">
                        <h4 class="card-title">'. $this->aNombreEstudiantes[$i] . '
                        </h4>
                        <p class="card-text">'. $this->aDescripcionEstudiantes[$i] .'</p>
                        </div>
                    </div>
                </div>';
        }
    }

    public function SeleccionTabla($pdo, $sPrimariosNombre, $sPrimariosDescripcion, $sImagenesPrimarias, $sSecundariosNombre, $sSecundariosDescripcion, $sImagenesSecundarias, $sNombreEstudiantes, $sDescripcionEstudiantes, $sImagenesEstudiantes) {
        $this->aNombrePrimario = $pdo->query($sPrimariosNombre)->fetchAll(PDO::FETCH_COLUMN);
        $this->aDescripcionPrimario = $pdo->query($sPrimariosDescripcion)->fetchAll(PDO::FETCH_COLUMN);
        $this->aImagenesPrimarias = $pdo->query($sImagenesPrimarias)->fetchAll(PDO::FETCH_COLUMN);
        $this->aNombreSecundario = $pdo->query($sSecundariosNombre)->fetchAll(PDO::FETCH_COLUMN);
        $this->aDescripcionSecundario = $pdo->query($sSecundariosDescripcion)->fetchAll(PDO::FETCH_COLUMN);
        $this->aImagenesSecundarias = $pdo->query($sImagenesSecundarias)->fetchAll(PDO::FETCH_COLUMN);
        $this->aNombreEstudiantes = $pdo->query($sNombreEstudiantes)->fetchAll(PDO::FETCH_COLUMN);
        $this->aDescripcionEstudiantes = $pdo->query($sDescripcionEstudiantes)->fetchAll(PDO::FETCH_COLUMN);
        $this->aImagenesEstudiantes = $pdo->query($sImagenesEstudiantes)->fetchAll(PDO::FETCH_COLUMN);
    }

}
