<?php 
require_once './includes/header.php'; 
require_once './clases/Generos.php';
$obj = new Generos;
$generos = $obj->listarGeneros();
?>
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fas fa-home"></i> Géneros &nbsp;&nbsp; <a href="./generos_form.php" class="btn btn-primary"><i class="fas fa-plus"></i>&nbsp; Nuevo</a></h1>

        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fas fa-home"></i></li>
            <li class="breadcrumb-item"><a href="#">Géneros</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h4 class="tile-title">Lista de Géneros</h4>
                <table class="table table-hover table-striped text-center">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($generos as $genero) {
                        ?>
                            <tr>
                                <td>
                                    <?= $genero['id_genero']  ?>
                                </td>
                                <td>
                                    <?= $genero['nombre'] ?>
                                </td>
                                <td>
                                    <a href="./generos_form.php?id=<?= $genero['id_genero'] ?>" class="btn btn-warning" title="Editar Género">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                    <a href="./procesos/generos.php?id=<?= $genero['id_genero'] ?>&accion=Eliminar" class="btn btn-danger" title="Eliminar Género" onclick="return confirm('Realmente desea eliminar el registro '+<?= $genero['id_genero'] ?>+ ' ?')">
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