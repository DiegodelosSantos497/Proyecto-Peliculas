<?php require_once './includes/header.php'; ?>
<?php
require_once './clases/Usuarios.php';
$obj = new Usuarios;
$usuarios = $obj->listarUsuarios();
?>
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fas fa-home"></i> Usuários &nbsp;&nbsp; <a href="./usuarios_form.php" class="btn btn-primary"><i class="fas fa-plus"></i>&nbsp; Nuevo</a></h1>

        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fas fa-home"></i></li>
            <li class="breadcrumb-item"><a href="#">Usuários</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h4 class="tile-title">Lista de Usuários</h4>
                <table class="table table-hover table-striped text-center">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Correo Electrónico</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($usuarios as $usuario) {
                        ?>
                            <tr>
                                <td>
                                    <?= $usuario['id_usuario']  ?>
                                </td>
                                <td>
                                    <?= $usuario['nombre'] ?>
                                </td>
                                <td>
                                    <?= $usuario['correo'] ?>
                                </td>
                                <td>
                                    <a href="./usuarios_form.php?id=<?= $usuario['id_usuario'] ?>" class="btn btn-warning" title="Editar Usuário">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                    <a href="./procesos/usuarios.php?id=<?= $usuario['id_usuario'] ?>&accion=Eliminar" class="btn btn-danger" title="Eliminar Usuário" onclick="return confirm('Realmente desea eliminar el registro '+<?= $usuario['id_usuario'] ?>+ ' ?')">
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