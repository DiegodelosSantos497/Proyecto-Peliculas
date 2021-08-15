<?php
require_once 'Conexion.php';
class Peliculas extends Conexion
{
    private  $id_pelicula;
    private  $titulo;
    private  $sinopsis;
    private  $anio;
    private  $duracion;
    private  $reparto;
    private  $urlPoster;
    private  $urlPelicula;
    private  $generos;
    private  $tabla = "peliculas";
    private  $conn;

    public function __construct()
    {
        //herencia de la clase conexion
        $this->conn = $this->conectar();
    }

    public function listarPeliculas()
    {
        try {
            $stmt = $this->conn->prepare("SELECT * FROM $this->tabla");
            $stmt->execute();
            $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $resultado;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function obtenerid_Peliculas($id)
    {
        try {
            $this->id_pelicula = $id;
            $stmt = $this->conn->prepare("SELECT * FROM $this->tabla WHERE id_pelicula = :id_pelicula");
            $stmt->bindValue(":id_pelicula", $this->id_pelicula, PDO::PARAM_INT);
            $stmt->execute();
            if ($stmt->rowCount() > 0) {
                return $stmt->fetch(PDO::FETCH_ASSOC);
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function insertarPeliculas($titulo,  $sinopsis,  $anio, $duracion, $reparto, $urlPoster, $urlPelicula, $generos)
    {
        try {
            $this->titulo = $titulo;
            $this->sinopsis = $sinopsis;
            $this->anio = $anio;
            $this->duracion = $duracion;
            $this->reparto = $reparto;
            $this->urlPoster = $urlPoster;
            $this->urlPelicula = $urlPelicula;
            $this->generos = $generos;
            $sql = "INSERT INTO $this->tabla(titulo, sinopsis, anio, duracion, reparto, urlPoster, urlPelicula, generos) VALUES(:titulo, :sinopsis, :anio, :duracion, :reparto, :urlPoster, :urlPelicula, :generos)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindValue(":titulo", $this->titulo, PDO::PARAM_STR);
            $stmt->bindValue(":sinopsis", $this->sinopsis, PDO::PARAM_STR);
            $stmt->bindValue(":anio",  $this->anio, PDO::PARAM_INT);
            $stmt->bindValue(":duracion",  $this->duracion, PDO::PARAM_INT);
            $stmt->bindValue(":reparto",  $this->reparto, PDO::PARAM_STR);
            $stmt->bindValue(":urlPoster",  $this->urlPoster, PDO::PARAM_STR);
            $stmt->bindValue(":urlPelicula",  $this->urlPelicula, PDO::PARAM_STR);
            $stmt->bindValue(":generos",  $this->generos, PDO::PARAM_STR);
            if ($stmt->execute()) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function eliminarPeliculas($id)
    {
        try {
            $this->id_pelicula = $id;
            $stmt = $this->conn->prepare("DELETE FROM $this->tabla WHERE id_pelicula = :id_pelicula");
            $stmt->bindValue(":id_pelicula", $this->id_pelicula, PDO::PARAM_INT);
            if ($stmt->execute()) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function actualizarPeliculas($titulo,  $sinopsis,  $anio, $duracion, $reparto, $urlPoster, $urlPelicula, $generos, $id)
    {
        try {
            $this->titulo = $titulo;
            $this->sinopsis = $sinopsis;
            $this->anio = $anio;
            $this->duracion = $duracion;
            $this->reparto = $reparto;
            $this->urlPoster = $urlPoster;
            $this->urlPelicula = $urlPelicula;
            $this->generos = $generos;
            $this->id_pelicula = $id;
            $stmt = $this->conn->prepare("UPDATE $this->tabla SET titulo = :titulo, sinopsis = :sinopsis, anio = :anio, duracion = :duracion, reparto = :reparto, urlPoster = :urlPoster, urlPelicula = :urlPelicula, generos = :generos WHERE id_pelicula = :id_pelicula");
            $stmt->bindValue(":titulo", $this->titulo, PDO::PARAM_STR);
            $stmt->bindValue(":sinopsis", $this->sinopsis, PDO::PARAM_STR);
            $stmt->bindValue(":anio",  $this->anio, PDO::PARAM_INT);
            $stmt->bindValue(":duracion",  $this->duracion, PDO::PARAM_INT);
            $stmt->bindValue(":reparto",  $this->reparto, PDO::PARAM_STR);
            $stmt->bindValue(":urlPoster",  $this->urlPoster, PDO::PARAM_STR);
            $stmt->bindValue(":urlPelicula",  $this->urlPelicula, PDO::PARAM_STR);
            $stmt->bindValue(":generos",  $this->generos, PDO::PARAM_STR);
            $stmt->bindValue(":id_pelicula", $this->id_pelicula, PDO::PARAM_INT);
            if ($stmt->execute()) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function buscarPelicula($buscar)
    {
        try {
            $this->titulo = $buscar;
            $stmt = $this->conn->prepare("SELECT * FROM $this->tabla WHERE titulo LIKE '%$buscar%'");
            $stmt->execute();
            $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $resultado;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }










    /*  public function listarGeneros()
    {
        try {
            $stmt = $this->conn->prepare("SELECT * FROM generos");
            $stmt->execute();
            $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $resultado;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    } */
}
