<?php
require_once './includes/header.php';
?>
<?php
require_once './clases/Peliculas.php';
$obj = new Peliculas;
if ($obj->obtenerid_Peliculas($_GET['id'])) {
    $pelicula = $obj->obtenerid_Peliculas($_GET['id']);
} else {
    $pelicula = null;
}

?>
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fas fa-home"></i> PELÍCULAS</h1>

        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fas fa-home"></i></li>
            <li class="breadcrumb-item"><a href="#">PELÍCULAS</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title"><?= is_null($pelicula) ? "REGISTRAR NUEVA PELÍCULA" : "ACTUALIZAR PELÍCULA" ?></h3>
                <form action="./procesos/peliculas.php" method="post">
                    <div class="tile-body">
                        <input type="hidden" name="id_pelicula" id="id_pelicula" value="<?= $pelicula['id_pelicula'] ?>">
                        <div class="form-group">
                            <label class="control-label">Nombre Completo</label>
                            <input class="form-control" type="text" name="titulo" id="titulo" value="<?= $pelicula['titulo'] ?>" placeholder="Ingrese su título completo">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Sinopsis</label>
                            <textarea class="form-control" name="sinopsis" id="sinopsis" cols="30" rows="2" placeholder="Ingrese la sinopsis de la pelicula"><?= $pelicula['sinopsis'] ?></textarea>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <label class="control-label">Año</label>
                                <input class="form-control" type="text" name="anio" id="anio" value="<?= $pelicula['anio'] ?>" placeholder="Ingrese el año">
                            </div>
                            <div class="col-md-6">
                                <label class="control-label">Duración en minutos</label>
                                <input class="form-control" type="number" name="duracion" id="duracion" value="<?= $pelicula['duracion'] ?>" placeholder="Ingrese la duración de la pelicula en minutos">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Reparto</label>
                            <input class="form-control" type="text" name="reparto" id="reparto" value="<?= $pelicula['reparto'] ?>" placeholder="Ingrese el reparto de la pelicula">
                        </div>
                        <div class="form-row">
                            <div class="col-md-12">
                                <label class="control-label">Poster</label>
                                <input class="form-control" type="text" name="urlPoster" id="urlPoster" value="<?= $pelicula['urlPoster'] ?>" placeholder="Ingrese la url del poster de la pelicula ">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12">
                                <label class="control-label">Pelicula</label>
                                <textarea class="form-control" name="urlPelicula" id="urlPelicula" cols="30" rows="2"><?= $pelicula['urlPelicula'] ?></textarea>
                            </div>
                        </div>

                        <br>

                        <span>Géneros</span>
                        <?php $lista = explode(",", $pelicula['generos']); ?>
                        <div class="form-row mt-2">
                            <div class="col-md-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Acción" name="generos[]" <?= in_array("Acción", $lista) ? "checked" : "" ?> id="Acción">
                                    <label class="form-check-label" for="Acción">
                                        Acción
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Animación" name="generos[]" <?= in_array("Animación", $lista) ? "checked" : "" ?> id="Animación">
                                    <label class="form-check-label" for="Animación">
                                        Animación
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Anime" name="generos[]" <?= in_array("Anime", $lista) ? "checked" : "" ?> id="Anime">
                                    <label class="form-check-label" for="Anime">
                                        Anime
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" name="generos[]" <?= in_array("Artes Marciales", $lista) ? "checked" : "" ?> id="Artes marciales">
                                    <label class="form-check-label" for="Artes marciales">
                                        Artes Marciales
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Asesinos en Serie" name="generos[]" <?= in_array("Asesinos en Serie", $lista) ? "checked" : "" ?>>
                                    <label class="form-check-label" for="defaultCheck1">
                                        Asesinos en serie
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Aventura" name="generos[]" <?= in_array("Aventura", $lista) ? "checked" : "" ?>>
                                    <label class="form-check-label" for="defaultCheck1">
                                        Aventura
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Baile" name="generos[]" <?= in_array("Baile", $lista) ? "checked" : "" ?>>
                                    <label class="form-check-label" for="defaultCheck1">
                                        Baile
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Bélico" name="generos[]" <?= in_array("Bélico", $lista) ? "checked" : "" ?>>
                                    <label class="form-check-label" for="defaultCheck1">
                                        Bélico
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Biográfico" name="generos[]" <?= in_array("Biográfico", $lista) ? "checked" : "" ?>>
                                    <label class="form-check-label" for="defaultCheck1">
                                        Biográfico
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Catástrofe" name="generos[]" <?= in_array("Catástrofe", $lista) ? "checked" : "" ?>>
                                    <label class="form-check-label" for="defaultCheck1">
                                        Catástrofe
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Ciencia Ficción" name="generos[]" <?= in_array("Ciencia Ficción", $lista) ? "checked" : "" ?>>
                                    <label class="form-check-label" for="defaultCheck1">
                                        Ciencia Ficción
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Cine Adolescente" name="generos[]" <?= in_array("Cine Adolescente", $lista) ? "checked" : "" ?>>
                                    <label class="form-check-label" for="defaultCheck1">
                                        Cine Adolescente
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Cine Negro" name="generos[]" <?= in_array("Cine Negro", $lista) ? "checked" : "" ?>>
                                    <label class="form-check-label" for="defaultCheck1">
                                        Cine Negro
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Clásicas" name="generos[]" <?= in_array("Clásicas", $lista) ? "checked" : "" ?>>
                                    <label class="form-check-label" for="defaultCheck1">
                                        Clásicas
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Comedia" name="generos[]" <?= in_array("Comedia", $lista) ? "checked" : "" ?>>
                                    <label class="form-check-label" for="defaultCheck1">
                                        Comedia
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Comedia Negra" name="generos[]" <?= in_array("Comedia Negra", $lista) ? "checked" : "" ?>>
                                    <label class="form-check-label" for="defaultCheck1">
                                        Comedia Negra
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Crímen" name="generos[]" <?= in_array("Crímen", $lista) ? "checked" : "" ?>>
                                    <label class="form-check-label" for="defaultCheck1">
                                        Crímen
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="DC Comics" name="generos[]" <?= in_array("DC Comics", $lista) ? "checked" : "" ?>>
                                    <label class="form-check-label" for="defaultCheck1">
                                        DC Comics
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Deportes" name="generos[]" <?= in_array("Deportes", $lista) ? "checked" : "" ?>>
                                    <label class="form-check-label" for="defaultCheck1">
                                        Deportes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Disney" name="generos[]" <?= in_array("Disney", $lista) ? "checked" : "" ?>>
                                    <label class="form-check-label" for="defaultCheck1">
                                        Disney
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Documental" name="generos[]" <?= in_array("Documental", $lista) ? "checked" : "" ?>>
                                    <label class="form-check-label" for="defaultCheck1">
                                        Documental
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Drama" name="generos[]" <?= in_array("Drama", $lista) ? "checked" : "" ?>>
                                    <label class="form-check-label" for="defaultCheck1">
                                        Drama
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Erótico" name="generos[]" <?= in_array("Erótico", $lista) ? "checked" : "" ?>>
                                    <label class="form-check-label" for="defaultCheck1">
                                        Erótico
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Familiar" name="generos[]" <?= in_array("Familiar", $lista) ? "checked" : "" ?>>
                                    <label class="form-check-label" for="defaultCheck1">
                                        Familiar
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Fantasía" name="generos[]" <?= in_array("Fantasía", $lista) ? "checked" : "" ?>>
                                    <label class="form-check-label" for="defaultCheck1">
                                        Fantasía
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Historia" name="generos[]" <?= in_array("Historia", $lista) ? "checked" : "" ?>>
                                    <label class="form-check-label" for="defaultCheck1">
                                        Historia
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Horror" name="generos[]" <?= in_array("Horror", $lista) ? "checked" : "" ?>>
                                    <label class="form-check-label" for="defaultCheck1">
                                        Horror
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Humor" name="generos[]" <?= in_array("Humor", $lista) ? "checked" : "" ?>>
                                    <label class="form-check-label" for="defaultCheck1">
                                        Humor
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Humor Negro" name="generos[]" <?= in_array("Humor Negro", $lista) ? "checked" : "" ?>>
                                    <label class="form-check-label" for="defaultCheck1">
                                        Humor Negro
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Infantil" name="generos[]" <?= in_array("Infantil", $lista) ? "checked" : "" ?>>
                                    <label class="form-check-label" for="defaultCheck1">
                                        Infantil
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Marvel Comics" name="generos[]" <?= in_array("Marvel Comics", $lista) ? "checked" : "" ?>>
                                    <label class="form-check-label" for="defaultCheck1">
                                        Marvel Comics
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Misterio" name="generos[]" <?= in_array("Misterio", $lista) ? "checked" : "" ?>>
                                    <label class="form-check-label" for="defaultCheck1">
                                        Misterio
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Musical" name="generos[]" <?= in_array("Musical", $lista) ? "checked" : "" ?>>
                                    <label class="form-check-label" for="defaultCheck1">
                                        Músical
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Policial" name="generos[]" <?= in_array("Policial", $lista) ? "checked" : "" ?>>
                                    <label class="form-check-label" for="defaultCheck1">
                                        Policial
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Romance" name="generos[]" <?= in_array("Romance", $lista) ? "checked" : "" ?>>
                                    <label class="form-check-label" for="defaultCheck1">
                                        Romance
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Secuestro" name="generos[]" <?= in_array("Secuestro", $lista) ? "checked" : "" ?>>
                                    <label class="form-check-label" for="defaultCheck1">
                                        Secuestro
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Sobrenatural" name="generos[]" <?= in_array("Sobrenatural", $lista) ? "checked" : "" ?>>
                                    <label class="form-check-label" for="defaultCheck1">
                                        Sobrenatural
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Suspenso" name="generos[]" <?= in_array("Suspenso", $lista) ? "checked" : "" ?>>
                                    <label class="form-check-label" for="defaultCheck1">
                                        Suspenso
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Terror" name="generos[]" <?= in_array("Terror", $lista) ? "checked" : "" ?>>
                                    <label class="form-check-label" for="defaultCheck1">
                                        Terror
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Thriller" name="generos[]" <?= in_array("Thriller", $lista) ? "checked" : "" ?>>
                                    <label class="form-check-label" for="defaultCheck1">
                                        Thriller
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Western" name="generos[]" <?= in_array("Western", $lista) ? "checked" : "" ?>>
                                    <label class="form-check-label" for="defaultCheck1">
                                        Western
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Zombie" name="generos[]" <?= in_array("Zombie", $lista) ? "checked" : "" ?>>
                                    <label class="form-check-label" for="defaultCheck1">
                                        Zombie
                                    </label>
                                </div>
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
                        <button class="btn btn-primary" type="submit" name="<?= is_null($pelicula) ? "Registrar" : "Actualizar" ?>"><i class="fas fa-check-circle"></i>&nbsp;<?= is_null($pelicula) ? "Registrar" : "Actualizar" ?></button>&nbsp;&nbsp;&nbsp;<a class="btn btn-danger" href="./peliculas_lista.php"><i class="fas fa-times-circle"></i>&nbsp;Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
<?php require_once './includes/footer.php'; ?>