<?php 

class CatalogosModel
{
    private $db;
    private $conn;

    public function __construct()
    {
        $this->conn = new Conexion();
        $this->db = $this->conn->base();
    }

    public function obtenerTipos()
    {
        try{
            $stmt = $this->db->prepare("select ID_TIPO AS ID, DESCRIPCION AS DESCRIPCION FROM TB_TIPO_TELEFONO WHERE ESTADO = :estado");
            $estado = 'A';
            $stmt->bindParam(':estado', $estado);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }catch(PDOException $ex) {
            echo "error: " . $ex->getMessage();
          }
    }

/*prueba guardado de datos*/ 
    public function guardarDatos()
    {
        try{
            $stmt = $this->db->prepare("INSERT  TB_DATOS_PERSONA(ID_TELEFONO,NOMBRES,APELLIDOS,DIRECCION,CORREO,FECHA_NAC)
             VALUES(:id_telefono,:nombres,:apellidos,:direccion,:email,:fecha_nac)");
            
            $stmt->bindParam(':id_telefono', $id_telefono);
            $stmt->bindParam(':nombres', $nombres);
            $stmt->bindParam(':apellidos', $apellidos);
            $stmt->bindParam(':direccion', $direccion);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':fecha_nac', $fecha_nac);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }catch(PDOException $ex) {
            echo "error: " . $ex->getMessage();
          }
    }




}