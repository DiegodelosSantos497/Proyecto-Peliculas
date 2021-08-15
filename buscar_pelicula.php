<?php require_once './header.php'; ?>
<?php $buscar = $obj->buscarPelicula($_POST['buscar']); ?>


<div class="row mt-2">
    <div class="col-sm-12 text-center">
        <h2 class="text-danger">Resultado:</h2>
        <h1 class=""><?= $_POST['buscar'] ?></h1>
    </div>
</div>

<div class="row">
<?php if ($buscar != "") {
    foreach ($buscar as $busqueda) { ?>
            <div class="col-sm-3 text-center">
                <div class="card">
                    <div class="card-body">
                        <img class="mb-2" src="<?= $busqueda['urlPoster'] ?>" width="250">
                        <h5 class="card-title"><?= $busqueda['titulo'] ?></h5>
                        <p class="card-text m-0"><?= $busqueda['anio'] ?></p>
                        <a href="./detalles_pelicula.php?id=<?= $busqueda['id_pelicula'] ?>" class="btn btn-primary">Más Información</a>
                    </div>
                </div>
            </div>
            <?php   }
}  ?>
</div>

<?php require_once './footer.php'; ?>