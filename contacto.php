<?php
require_once('conexion.php');

class Contacto
{  public $clave;
    public $nombre;
    public $descripcion;

    public function encontrarTodos()
    {
        try
        {
            $resultado = array();
            $conexion = new Conexion();
            if(!$conexion->conectar())
            {
                throw new Exception($conexion->getError());
            }
            $sql = "SELECT * FROM tproductos";
            if ($result = $conexion->mysqli->query($sql))
            {
                if ($result->num_rows > 0) 
                {
                     while($row = $result->fetch_assoc())
                     {
                         $resultado[] = $row;
                     }
                }
            }
            $conexion->cerrar();
            return $resultado;
        }
        catch(Exception $e)
        {
            return array();
        } 
    }

    
    public function nuevo()
    {


  
        try
        {
            $conexion = new Conexion();
            if(!$conexion->conectar())
            {
                throw new Exception($conexion->getError());
            }
            $sql = "INSERT INTO `tproductos` ".
                "(`clave`,`nombre`,`descripcion`)".
                "VALUES ".
                "('$this->clave','$this->nombre','$this->descripcion');";
            $resultado = $conexion->mysqli->query($sql);
            $conexion->cerrar();
            return $resultado;
        }
        catch(Exception $e)
        {
            return false;
        } 
    }

}
 ?>