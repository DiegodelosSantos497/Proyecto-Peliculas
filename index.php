<?php require_once './header.php'; ?>
<div class="row">
    <?php foreach ($obj->listarPeliculas() as $pelicula) { ?>
        <div class="col-sm-3 text-center">
            <div class="card">
                <div class="card-body">
                    <img class="mb-2" src="<?=$pelicula['urlPoster']?>" width="250">
                    <h5 class="card-title"><?=$pelicula['titulo']?></h5>
                    <p class="card-text m-0"><?=$pelicula['anio']?></p>
                    <a href="./detalles_pelicula.php?id=<?=$pelicula['id_pelicula']?>" class="btn btn-primary">Más Información</a>
                </div>
            </div>
        </div>
    <?php } ?>
</div>
<?php require_once './footer.php'; ?>