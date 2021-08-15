<?php require_once './header.php'; ?>
<?php

$pelicula = $obj->obtenerid_Peliculas($_GET['id']);

?>
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header text-center">
                <h1> <?= $pelicula['titulo']; ?></h1>
            </div>
            <div class="card-body">

                <div class="row">
                    <div class="col-sm-5 text-center">
                        <img src="<?= $pelicula['urlPoster']; ?>" width="250">
                    </div>
                    <div class="col-sm-7">
                        <p class="card-text"><strong>Título Original:</strong> <?= $pelicula['titulo']; ?></p>
                        <p class="card-text"><strong>Sinopsis:</strong> <?= $pelicula['sinopsis']; ?></p>
                        <p class="card-text"><strong>Año:</strong> <?= $pelicula['anio']; ?></p>
                        <p class="card-text"><strong>Duración:</strong> <?= $pelicula['duracion']; ?> minutos</p>
                        <p class="card-text"><strong>Reparto:</strong> <?= $pelicula['reparto']; ?></p>
                        <p class="card-text"><strong>Géneros:</strong> <?= $pelicula['generos']; ?></p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <?= $pelicula['urlPelicula'] ?>
                    </div>
                </div>




            </div>
        </div>
    </div>
    <?php ?>
</div>

<?php require_once './footer.php'; ?>