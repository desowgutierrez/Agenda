<?php

class Conexion{

    private $config;

    public function base()
    {
        $config = include './src/config/.config.php';
        try {
            $conn = new PDO("mysql:host={$config['host']};dbname={$config['base']}", $config['user'],  $config['pass']);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
            //echo "Connected successfully";
          } catch(PDOException $ex) {
            echo "Connection failed: " . $ex->getMessage();
          }
    }

}

?>