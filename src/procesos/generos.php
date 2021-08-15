<?php
session_start();
require_once '../clases/Generos.php';
$obj = new Generos;

if (isset($_POST['Registrar'])) {
    $nombre = $_POST['nombre'];
    if ($nombre == "") {
        $_SESSION['mensaje'] = '<p class="alert alert-danger">Debe completar todos los campos</p>';
        header("location:../generos_form.php");
    } else {
        if ($obj->insertarGeneros($nombre)) {
            $_SESSION['mensaje'] = '<p class="alert alert-success">Categoria registrado con éxito</p>';
            header("location:../generos_form.php");
        } else {
            $_SESSION['mensaje'] = '<p class="alert alert-danger">Error al registrar la nueva categoria</p>';
            header("location:../generos_form.php");
        }
    }
} elseif (isset($_POST['Actualizar'])) {
    $id_genero = $_POST['id_genero'];
    $nombre = $_POST['nombre'];
    if ($nombre == "" ||  $id_genero == "") {
        $_SESSION['mensaje'] = '<p class="alert alert-danger">Debe completar todos los campos</p>';
        header("location:../generos_form.php?id=$id_genero");
    } else {
        if ($obj->actualizarGeneros($nombre, $id_genero)) {

            $_SESSION['mensaje'] = '<p class="alert alert-success">Categoria actualizada con éxito</p>';
            header("location:../generos_lista.php");
        } else {
            $_SESSION['mensaje'] = '<p class="alert alert-danger">Error al actualizar categoria</p>';
            header("location:../generos_lista.php?id=$id_genero");
        }
    }
} elseif (isset($_GET['accion']) && $_GET['accion'] == "Eliminar") {
    if ($obj->eliminarGeneros($_GET['id'])) {
        $_SESSION['mensaje'] = '<p class="alert alert-success">Categoria eliminada con éxito</p>';
        header("location:../generos_lista.php");
    } else {
        $_SESSION['mensaje'] = '<p class="alert alert-danger">Error al eliminar categoria</p>';
        header("location:../generos_lista.php");
    }
}
