<?php
require_once './includes/header.php';
?>
<?php
require_once './clases/Usuarios.php';
$obj = new Usuarios;
if ($obj->obtenerid_Usuarios($_GET['id'])) {
    $usuario = $obj->obtenerid_Usuarios($_GET['id']);
} else {
    $usuario = null;
}
?>
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fas fa-home"></i> Usuários</h1>

        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fas fa-home"></i></li>
            <li class="breadcrumb-item"><a href="#">Usuários</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title"><?= is_null($usuario) ? "REGISTRAR NUEVO USUÁRIO" : "ACTUALIZAR USUÁRIO" ?></h3>
                <form action="./procesos/usuarios.php" method="post">
                    <div class="tile-body">
                        <input type="hidden" name="id_usuario" id="id_usuario" value="<?= $usuario['id_usuario'] ?>">
                        <div class="form-group">
                            <label class="control-label">Nombre Completo</label>
                            <input class="form-control" type="text" name="nombre" id="nombre" value="<?= $usuario['nombre'] ?>" placeholder="Ingrese su nombre completo">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Correo Electrónico</label>
                            <input class="form-control" type="email" name="correo" id="correo" value="<?= $usuario['correo'] ?>" placeholder="Ingrese su correo electrónico">
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <label class="control-label">Comtraseña</label>
                                <input class="form-control" type="password" name="contrasena" id="contrasena" value="<?= $usuario['contrasena'] ?>" placeholder="Ingrese su contraseña">
                            </div>
                            <div class="col-md-6">
                                <label class="control-label">Confirmar Contraseña</label>
                                <input class="form-control" type="password" name="contrasena2" id="contrasena2" placeholder="Confirmar contraseña">
                            </div>
                        </div>
                    </div>
                    <div class="tile-footer">
                            <?php
                            if (isset($_SESSION['mensaje'])) {
                                echo $_SESSION['mensaje'];
                                unset($_SESSION['mensaje']);
                            }
                            ?>
                        <button class="btn btn-primary" type="submit" name="<?= is_null($usuario) ? "Registrar" : "Actualizar" ?>"><i class="fas fa-check-circle"></i>&nbsp;<?= is_null($usuario) ? "Registrar" : "Actualizar" ?></button>&nbsp;&nbsp;&nbsp;<a class="btn btn-danger" href="./usuarios_lista.php"><i class="fas fa-times-circle"></i>&nbsp;Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
<?php require_once './includes/footer.php'; ?>