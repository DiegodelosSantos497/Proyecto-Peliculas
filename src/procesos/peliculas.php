<?php
session_start();
require_once '../clases/Peliculas.php';
$obj = new Peliculas;

if (isset($_POST['Registrar'])) {
    $titulo = $_POST['titulo'];
    $sinopsis = $_POST['sinopsis'];
    $anio = $_POST['anio'];
    $duracion = $_POST['duracion'];
    $reparto = $_POST['reparto'];
    $urlPoster = $_POST['urlPoster'];
    $urlPelicula = $_POST['urlPelicula'];
    $generos = $_POST['generos'];

    if ($titulo == "" || $sinopsis == "" || $anio == "" || $duracion == "" || $reparto == "" || $urlPoster == "" || $urlPelicula == "" || empty($generos)) {
        $_SESSION['mensaje'] = '<p class="alert alert-danger">Debe completar todos los campos</p>';
        header("location:../peliculas_form.php");
    } elseif (!is_numeric($anio) || !is_numeric($duracion)) {
        $_SESSION['mensaje'] = '<p class="alert alert-danger">Verifique que los campos Año y Duración sean numéricos</p>';
        header("location:../peliculas_form.php");
    } else {
        foreach ($generos as $lista_genero) {
            $lista .= $lista_genero . ",";
        }
        $lista = trim($lista, ",");
        if ($obj->insertarPeliculas($titulo, $sinopsis, $anio, $duracion, $reparto, $urlPoster, $urlPelicula, $lista)) {
            $_SESSION['mensaje'] = '<p class="alert alert-success">Película registrada con éxito</p>';
            header("location:../peliculas_form.php");
        } else {
            $_SESSION['mensaje'] = '<p class="alert alert-danger">Error al registrar la nueva película</p>';
            header("location:../peliculas_form.php");
        }
    }


} elseif (isset($_POST['Actualizar'])) {


    $titulo = $_POST['titulo'];
    $sinopsis = $_POST['sinopsis'];
    $anio = $_POST['anio'];
    $duracion = $_POST['duracion'];
    $reparto = $_POST['reparto'];
    $urlPoster = $_POST['urlPoster'];
    $urlPelicula = $_POST['urlPelicula'];
    $generos = $_POST['generos'];
    $id_pelicula = $_POST['id_pelicula'];

    if ($titulo == "" || $sinopsis == "" || $anio == "" || $duracion == "" || $reparto == "" || $urlPoster == "" || $urlPelicula == "" || empty($generos) || $id_pelicula == "") {
        $_SESSION['mensaje'] = '<p class="alert alert-danger">Debe completar todos los campos</p>';
        header("location:../peliculas_form.php?id=$id_pelicula");
    } elseif (!is_numeric($anio) || !is_numeric($duracion)) {
        $_SESSION['mensaje'] = '<p class="alert alert-danger">Verifique que los campos Año y Duración sean numéricos</p>';
        header("location:../peliculas_form.php?id=$id_pelicula");
    } else {
        foreach ($generos as $lista_genero) {
            $lista .= $lista_genero . ",";
        }
        $lista = trim($lista, ",");
        if ($obj->actualizarPeliculas($titulo, $sinopsis, $anio, $duracion, $reparto, $urlPoster, $urlPelicula, $lista, $id_pelicula)) {
            $_SESSION['mensaje'] = '<p class="alert alert-success">Película registrada con éxito</p>';
            header("location:../peliculas_lista.php");
        } else {
            $_SESSION['mensaje'] = '<p class="alert alert-danger">Error al registrar la nueva película</p>';
            header("location:../peliculas_form.php?id=$id_pelicula");
        }
    }





} elseif (isset($_GET['accion']) && $_GET['accion'] == "Eliminar") {
    if ($obj->eliminarPeliculas($_GET['id'])) {
        $_SESSION['mensaje'] = '<p class="alert alert-success">Película eliminada con éxito</p>';
        header("location:../peliculas_lista.php");
    } else {
        $_SESSION['mensaje'] = '<p class="alert alert-danger">Error al eliminar la pelícukla</p>';
        header("location:../peliculas_lista.php");
    }
}
