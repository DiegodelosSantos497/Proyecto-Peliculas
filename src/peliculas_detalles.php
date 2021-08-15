<?php
require_once './includes/header.php';
?>
<?php
require_once './clases/Peliculas.php';
$obj = new Peliculas;
if ($obj->obtenerid_Peliculas($_GET['id'])) {
    $pelicula = $obj->obtenerid_Peliculas($_GET['id']);
} else {
    $pelicula = null;
}

?>
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fas fa-home"></i> PELÍCULAS</h1>

        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fas fa-home"></i></li>
            <li class="breadcrumb-item"><a href="#">PELÍCULAS</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h1 class="text-center"><?= $pelicula['titulo'] ?></h1>
                <div class="tile-body">
                    <div class="row">
                        <div class="col-md-12">
                            <label class="detalles_label" for="">Sinopsis</label>
                            <p class="detalles_info"><?= $pelicula['sinopsis'] ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label class="detalles_label" for="">Año</label>
                            <p class="detalles_info"><?= $pelicula['anio'] ?></p>
                        </div>
                        <div class="col-md-6">
                            <label class="detalles_label" for="">Dración</label>
                            <p class="detalles_info"><?= $pelicula['duracion'] ?> minutos</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label class="detalles_label" for="">Reparto</label>
                            <p class="detalles_info"><?= $pelicula['reparto'] ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label class="detalles_label" for="">Url del Poster</label><br>
                            <img class="detalles_info" src="<?= $pelicula['urlPoster'] ?>" alt="">
                        </div>
                        <div class="col-md-6">
                            <label class="detalles_label" for="">Película</label><br>
                            <div class="videos"><?= $pelicula['urlPelicula'] ?></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label class="detalles_label" for="">Géneros</label>
                            <p class="detalles_info"><?= $pelicula['generos'] ?></p>
                        </div>
                    </div>
                </div>
                <div class="tile-footer">
                    <a class="btn btn-danger" href="./peliculas_lista.php"><i class="fas fa-times-circle"></i>&nbsp;Volver</a>
                </div>
            </div>
        </div>
    </div>

</main>
<?php require_once './includes/footer.php'; ?>