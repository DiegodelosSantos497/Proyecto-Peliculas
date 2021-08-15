<?php
require_once 'Conexion.php';
class Generos extends Conexion
{
    private  $id_genero;
    private  $nombre;
    private $tabla = "generos";
    private  $conn;

    public function __construct()
    {
        //herencia de la clase conexion
        $this->conn = $this->conectar();
    }

    public function listarGeneros()
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

    public function obtenerid_Generos($id)
    {
        try {
            $this->id_genero = $id;
            $stmt = $this->conn->prepare("SELECT * FROM $this->tabla WHERE id_genero = :id_genero");
            $stmt->bindValue(":id_genero", $this->id_genero, PDO::PARAM_INT);
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

    public function insertarGeneros($nombre)
    {
        try {
            $this->nombre = $nombre;
            $sql = "INSERT INTO $this->tabla(nombre) VALUES(:nombre)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindValue(":nombre", $this->nombre, PDO::PARAM_STR);
            if ($stmt->execute()) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function eliminarGeneros($id)
    {
        try {
            $this->id_genero = $id;
            $stmt = $this->conn->prepare("DELETE FROM $this->tabla WHERE id_genero = :id_genero");
            $stmt->bindValue(":id_genero", $this->id_genero, PDO::PARAM_INT);
            if ($stmt->execute()) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function actualizarGeneros($nombre, $id)
    {
        try {
            $this->nombre = $nombre;
            $this->id_genero = $id;
            $stmt = $this->conn->prepare("UPDATE $this->tabla SET nombre = :nombre WHERE id_genero = :id_genero");
            $stmt->bindValue(":nombre", $this->nombre, PDO::PARAM_STR);
            $stmt->bindValue(":id_genero", $this->id_genero, PDO::PARAM_INT);
            if ($stmt->execute()) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}
