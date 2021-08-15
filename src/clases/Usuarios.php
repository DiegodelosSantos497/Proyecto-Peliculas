<?php
require_once 'Conexion.php';
class Usuarios extends Conexion
{
    private  $id_usuario;
    private  $nombre;
    private  $correo;
    private  $contrasena;
    private $tabla = "usuarios";
    private  $conn;

    public function __construct()
    {
        //herencia de la clase conexion
        $this->conn = $this->conectar();
    }

    public function listarUsuarios()
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

    public function loginUsuarios($correo,  $contrasena)
    {
        try {
            $this->correo = $correo;
            $this->contrasena = $contrasena;
            $stmt = $this->conn->prepare("SELECT * FROM $this->tabla WHERE correo = :correo AND contrasena = :contrasena");
            $stmt->bindValue(":correo", $this->correo, PDO::PARAM_STR);
            $stmt->bindValue(":contrasena",  $this->contrasena, PDO::PARAM_STR);
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

    public function obtenerid_Usuarios($id)
    {
        try {
            $this->id_usuario = $id;
            $stmt = $this->conn->prepare("SELECT * FROM $this->tabla WHERE id_usuario = :id_usuario");
            $stmt->bindValue(":id_usuario", $this->id_usuario, PDO::PARAM_INT);
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

    public function insertarUsuarios($nombre,  $correo,  $contrasena)
    {
        try {
            $this->nombre = $nombre;
            $this->correo = $correo;
            $this->contrasena = $contrasena;
            $sql = "INSERT INTO $this->tabla(nombre, correo, contrasena) VALUES(:nombre, :correo, :contrasena)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindValue(":nombre", $this->nombre, PDO::PARAM_STR);
            $stmt->bindValue(":correo", $this->correo, PDO::PARAM_STR);
            $stmt->bindValue(":contrasena",  $this->contrasena, PDO::PARAM_STR);
            if ($stmt->execute()) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function eliminarUsuarios($id)
    {
        try {
            $this->id_usuario = $id;
            $stmt = $this->conn->prepare("DELETE FROM $this->tabla WHERE id_usuario = :id_usuario");
            $stmt->bindValue(":id_usuario", $this->id_usuario, PDO::PARAM_INT);
            if ($stmt->execute()) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function actualizarUsuarios($nombre,  $correo,  $contrasena, $id)
    {
        try {
            $this->nombre = $nombre;
            $this->correo = $correo;
            $this->contrasena = $contrasena;
            $this->id_usuario = $id;
            $stmt = $this->conn->prepare("UPDATE $this->tabla SET nombre = :nombre, correo = :correo, contrasena = :contrasena WHERE id_usuario = :id_usuario");
            $stmt->bindValue(":nombre", $this->nombre, PDO::PARAM_STR);
            $stmt->bindValue(":correo", $this->correo, PDO::PARAM_STR);
            $stmt->bindValue(":contrasena",  $this->contrasena, PDO::PARAM_STR);
            $stmt->bindValue(":id_usuario", $this->id_usuario, PDO::PARAM_INT);
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
