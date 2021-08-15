<?php
require_once './src/clases/Peliculas.php';
$obj = new Peliculas;


?>


<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Estilos Propios -->
    <link rel="stylesheet" href="./public/css/estilos.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./public/css/bootstrap.min.css">

    <title>Peliculas</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #009688;">
        <a class="navbar-brand" href="./index.php">Peliculas</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menuUsuario" aria-controls="menuUsuario" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menuUsuario">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="./src/index.php"><i class="fas fa-sign-in-alt"></i>&nbsp; Acceder</a>
                </li>
                <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Disabled</a>
                </li> -->
            </ul>
            <form class="form-inline my-2 my-lg-0" action="./buscar_pelicula.php" method="POST">
                <input class="form-control mr-sm-2" type="text" name="buscar" placeholder="Buscar película" aria-label="Search">
                <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Buscar</button>
            </form>
        </div>
    </nav>