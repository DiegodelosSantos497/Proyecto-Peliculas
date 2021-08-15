<?php
 session_start();
 if(!isset($_SESSION['usuario'])){
     header("location:./index.php");
 }
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta name="description" content="">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Estilos Propios -->
    <link rel="stylesheet" href="../public/css/estilos.css">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="../public/css/main.css">
    <title>PELICULAS</title>
</head>

<body class="app sidebar-mini">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="./inicio.php">Peliculas</a>
        <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
        <!-- Navbar Right Menu-->
        <ul class="app-nav">
           <!--  <li class="app-search">
                <form action="./buscar_pelicula.php" method="post">
                    <input class="app-search__input" type="search" name="buscar_pelicula" id="buscar_pelicula" placeholder="Buscar...">
                    <button type="submit" class="app-search__button"><i class="fas fa-search"></i></button>
                </form>
            </li> -->

            <!-- Notificaciones-->
           <!--  <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fas fa-bell"></i></a>
                <ul class="dropdown-menu settings-menu dropdown-menu-right">
                    <li><a class="dropdown-item menu_superior" href=""><i class="fas fa-cogs"></i> &nbsp; Settings</a></li>
                    <li><a class="dropdown-item menu_superior" href=""><i class="fas fa-user"></i> &nbsp; Profile</a></li>
                    <li><a class="dropdown-item menu_superior" href=""><i class="fas fa-power-off"></i> &nbsp; Logout</a></li>
                </ul>
            </li> -->

            <!-- User Menu-->
            <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fas fa-user"></i></a>
                <ul class="dropdown-menu settings-menu dropdown-menu-right">
                    <!-- <li><a class="dropdown-item menu_superior" href="page-user.html"><i class="fas fa-cogs"></i> &nbsp; Settings</a></li>
                    <li><a class="dropdown-item menu_superior" href="./perfil.php"><i class="fas fa-user"></i> &nbsp; Perfil</a></li> -->
                    <li><a class="dropdown-item menu_superior" href="./logout.php" onclick="return confirm('Desea cerrar sesión?')"><i class="fas fa-power-off"></i> &nbsp; Logout</a></li>
                </ul>
            </li>
        </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
        <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://w7.pngwing.com/pngs/81/570/png-transparent-profile-logo-computer-icons-user-user-blue-heroes-logo-thumbnail.png" alt="User Image">
            <div>
                <p class="app-sidebar__user-name"><?=$_SESSION['usuario']['nombre']?></p>
                <!-- <p class="app-sidebar__user-designation"><i class="fas fa-circle rol"></i>&nbsp; Administrador</p> -->
            </div>
        </div>
        <ul class="app-menu">
            <li><a class="app-menu__item" href="./inicio.php"><i class="app-menu__icon fas fa-home"></i><span class="app-menu__label">Inicio</span></a></li>
            <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fas fa-film"></i><span class="app-menu__label">Películas</span><i class="treeview-indicator fas fa-angle-right"></i></a>
                <ul class="treeview-menu">
                    <li><a class="treeview-item" href="./peliculas_lista.php"><i class="icon far fa-circle"></i> Películas</a></li>
                    <li><a class="treeview-item" href="./generos_lista.php"><i class="icon far fa-circle"></i> Géneros</a></li>
                </ul>
            </li>

            <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fas fa-users"></i><span class="app-menu__label">Usuários</span><i class="treeview-indicator fas fa-angle-right"></i></a>
                <ul class="treeview-menu">
                    <li><a class="treeview-item" href="./usuarios_lista.php"><i class="icon far fa-circle"></i> Lista de Usuários</a></li>
                    <li><a class="treeview-item" href="./usuarios_form.php"><i class="icon far fa-circle"></i> Nuevo Usuário</a></li>
                </ul>
            </li>
            <li><a class="app-menu__item" href="../index.php"><i class="app-menu__icon fas fa-globe-americas"></i><span class="app-menu__label">Ver Sitio</span></a></li>
           
        </ul>
    </aside>