<?php
session_start();
if (isset($_SESSION['usuario'])) {
  header("location:./inicio.php");
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Main CSS-->
  <link rel="stylesheet" type="text/css" href="../public/css/main.css">
  <title>Login - Películas</title>
</head>

<body>
  <section class="material-half-bg">
    <div class="cover"></div>
  </section>
  <section class="login-content">
    <div class="logo">
      <h1 id="logo_index">Películas</h1>
    </div>
    <div class="login-box">
      <form class="login-form" action="./procesos/login.php" method="POST">
        <h3 class="login-head"><i class="fas fa-user-lock"></i> &nbsp; Iniciar Sesión</h3>
        <div class="form-group">
          <label class="control-label">Correo Electrónico</label>
          <input class="form-control" type="text" name="correo" id="correo" placeholder="Correo Electrónico" autofocus>
        </div>
        <div class="form-group">
          <label class="control-label">Contraseña</label>
          <input class="form-control" type="password" name="contrasena" id="contrasena" placeholder="Contraseña">
        </div>
        <?php
        if (isset($_SESSION['mensaje'])) {
          echo $_SESSION['mensaje'];
          unset($_SESSION['mensaje']);
        }
        ?>
        <div class="form-group btn-container">
          <button class="btn btn-primary btn-block"><i class="fas fa-sign-in"></i>Iniciar Sesión</button>
        </div>
      </form>
    </div>
  </section>
  <!-- Essential javascripts for application to work-->
  <script src="../public/js/jquery-3.6.0.min.js"></script>
  <script src="../public/js/popper.min.js"></script>
  <script src="../public/js/bootstrap.min.js"></script>
  <script src="../public/js/main.js"></script>
  <!-- FontAwesome -->
  <script src="../public/js/fontawesome.js"></script>
  <!-- The javascript plugin to display page loading on top-->
  <script src="../public/js/pace.min.js"></script>

</body>

</html>