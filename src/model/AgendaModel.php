<?php 

class AgendaModel
{
    private $db;
    private $conn;

    public function __construct()
    {
        $this->conn = new Conexion();
        $this->db = $this->conn->base();
    }

/*prueba guardado de datos*/ 
    public function guardarDatos(array $post)
    {
        try{
            $this->db->beginTransaction();

            $stmt = $this->db->prepare("INSERT TB_DATOS_PERSONA(ID_TELEFONO
                                                                ,NOMBRES
                                                                ,APELLIDOS
                                                                ,DIRECCION
                                                                ,CORREO
                                                                ,FECHA_NAC)
                                            VALUES(:id_telefono,:nombres,:apellidos,:direccion,:email,:fecha_nac)");
            
            $stmt->bindParam(':id_telefono', $post['id_telefono']);
            $stmt->bindParam(':nombres', $post['nombres']);
            $stmt->bindParam(':apellidos', $post['apellidos']);
            $stmt->bindParam(':direccion', $post['direccion']);
            $stmt->bindParam(':email', $post['email']);
            $stmt->bindParam(':fecha_nac', $post['fecha_nac']);
            
           $stmt->execute();


           $stmt = $this->db->prepare ("INSERT TB_TELEFONO (ID_TELEFONO,TELEFONO_ID,TIPO_TELEFONO,RFECHA) VALUES (:id_telefono,:telefono,:tipo,CURRENT_TIMESTAMP)");

           $stmt->bindParam(':id_telefono', $post['id_telefono']);
           $stmt->bindParam(':telefono', $post['id_telefono']);
           $stmt->bindParam(':tipo', $post['tipo']);

           $stmt->execute();
           
           $this->db->commit();

           return true;
        }catch(PDOException $ex) {
            $this->db->rollback();
            die($ex->getMessage());
          }
    }

    public function actualizarDatos(array $post){
        var_dump($_POST);
        return true;
    }


    public function buscara(array $post)
    {
        try{
            $stmt = $this->db->prepare("SELECT a.ID_TELEFONO
                                                , a.NOMBRES
                                                , a.APELLIDOS
                                                , a.DIRECCION
                                                , a.CORREO
                                                , a.FECHA_NAC
                                                , b.TIPO_TELEFONO
                                                , c.DESCRIPCION
                                            FROM tb_datos_persona a 
                                                inner JOIN tb_telefono b 
                                                    on a.ID_TELEFONO = b.ID_TELEFONO 
                                                INNER JOIN tb_tipo_telefono c 
                                                    on b.TIPO_TELEFONO = c.ID_TIPO 
                                            WHERE a.ID_TELEFONO = :id_telefono 
                                                OR a.NOMBRES = :nombres
                                                OR a.APELLIDOS = :apellidos") ;
           
            $stmt->bindParam(':id_telefono', $post['id_telefono']); /*limpiar la variable */
            $stmt->bindParam(':nombres', $post['nombres']); 
            $stmt->bindParam(':apellidos', $post['apellidos']);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }catch(PDOException $ex) {
            echo "error: " . $ex->getMessage();
          }
    }





}