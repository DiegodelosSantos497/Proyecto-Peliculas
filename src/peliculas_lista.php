<?php require_once './includes/header.php'; ?>
<?php
require_once './clases/Peliculas.php';
$obj = new Peliculas;
$peliculas = $obj->listarPeliculas();
?>
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fas fa-home"></i> PELÍCULAS &nbsp;&nbsp; <a href="./peliculas_form.php" class="btn btn-primary"><i class="fas fa-plus"></i>&nbsp; Nuevo</a></h1>

        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fas fa-home"></i></li>
            <li class="breadcrumb-item"><a href="#">PELÍCULAS</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h4 class="tile-title">Lista de PELÍCULAS</h4>
                <table class="table table-hover table-striped text-center">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Título</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($peliculas as $pelicula) {
                        ?>
                            <tr>
                                <td>
                                    <?= $pelicula['id_pelicula']  ?>
                                </td>
                                <td>
                                    <?= $pelicula['titulo'] ?>
                                </td>
                                <td>
                                    <a href="./peliculas_detalles.php?id=<?= $pelicula['id_pelicula'] ?>" class="btn btn-info" title="Detalles Película">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="./peliculas_form.php?id=<?= $pelicula['id_pelicula'] ?>" class="btn btn-warning" title="Editar Película">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                    <a href="./procesos/peliculas.php?id=<?= $pelicula['id_pelicula'] ?>&accion=Eliminar" class="btn btn-danger" title="Eliminar Película" onclick="return confirm('Realmente desea eliminar el registro '+<?= $pelicula['id_pelicula'] ?>+ ' ?')">
                                        <i class="fas fa-trash"></i>
                                    </a>

                                </td>
                            </tr>
                        <?php }
                        ?>
                    </tbody>
                    
                    <tfoot>
                        <?php
                        if (isset($_SESSION['mensaje'])) {
                            echo $_SESSION['mensaje'];
                            unset($_SESSION['mensaje']);
                        }
                        ?>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</main>
<?php require_once './includes/footer.php'; ?>