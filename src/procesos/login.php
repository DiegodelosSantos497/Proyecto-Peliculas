<?php
session_start();
require_once '../clases/Usuarios.php';
$obj = new Usuarios;

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

if ($correo == "" || $contrasena == "") {
    $_SESSION['mensaje'] = '<p class="alert alert-danger">Debe completar todos los campos</p>';
    header("location:../index.php");
} else {
    if ($obj->loginUsuarios($correo, $contrasena)) {
        $_SESSION['usuario'] = $login = $obj->loginUsuarios($correo, $contrasena);
        header("location:../inicio.php");
    } else {
        $_SESSION['mensaje'] = '<p class="alert alert-danger">Correo y/o contraseña incorrectos</p>';
        header("location:../index.php");
    }
}
