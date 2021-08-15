<?php
require_once './includes/header.php';
?>
<?php
require_once './clases/Generos.php';
$obj = new Generos;
if ($obj->obtenerid_Generos($_GET['id'])) {
    $genero = $obj->obtenerid_Generos($_GET['id']);
} else {
    $genero = null;
}
?>
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fas fa-home"></i> Generos</h1>

        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fas fa-home"></i></li>
            <li class="breadcrumb-item"><a href="#">Generos</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title"><?= is_null($genero) ? "REGISTRAR NUEVA GÉNERO" : "ACTUALIZAR GÉNERO" ?></h3>
                <form action="./procesos/generos.php" method="post">
                    <div class="tile-body">
                        <input type="hidden" name="id_genero" id="id_genero" value="<?= $genero['id_genero'] ?>">
                        <div class="form-group">
                            <label class="control-label">Nombre</label>
                            <input class="form-control" type="text" name="nombre" id="nombre" value="<?= $genero['nombre'] ?>" placeholder="Ingrese su nombre completo">
                        </div>
                    </div>
                    <div class="tile-footer">
                        <?php
                        if (isset($_SESSION['mensaje'])) {
                            echo $_SESSION['mensaje'];
                            unset($_SESSION['mensaje']);
                        }
                        ?>
                        <button class="btn btn-primary" type="submit" name="<?= is_null($genero) ? "Registrar" : "Actualizar" ?>"><i class="fas fa-check-circle"></i>&nbsp;<?= is_null($genero) ? "Registrar" : "Actualizar" ?></button>&nbsp;&nbsp;&nbsp;<a class="btn btn-danger" href="./generos_lista.php"><i class="fas fa-times-circle"></i>&nbsp;Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
<?php require_once './includes/footer.php'; ?>