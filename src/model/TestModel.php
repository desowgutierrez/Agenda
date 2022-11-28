<?php 

class TestModel
{
    private $db;
    private $conn;

    public function __construct()
    {
        $this->conn = new Conexion();
        $this->db = $this->conn->base();
    }

    public function obtenerTiposInactivos()
    {
        try{
            $stmt = $this->db->prepare("select ID_TIPO AS ID, DESCRIPCION AS DESCRIPCION FROM TB_TIPO_TELEFONO WHERE ESTADO = :estado");
            $estado = 'I';
            $stmt->bindParam(':estado', $estado);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }catch(PDOException $ex) {
            echo "error: " . $ex->getMessage();
          }
    }
}