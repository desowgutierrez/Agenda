<?php

class Controller
{

    protected function model(string $model)
    {
        $config = include './src/config/.config.php'; 

        if(file_exists("{$config['app']}src/model/{$model}Model.php")){
            require_once("{$config['app']}src/model/{$model}Model.php");
            $model = "{$model}Model";
            return new $model();
        }else{
            die('El modelo no existe');
        }
    }
/*funcion para optener variables de link y enviar el archivo  correcto para la vista y validar si existe o no
completa el html con header y footer para renderizar la vista correcta, tambien agrega o completa la carpeta principal donde se ubica el proyecto*/
    protected function render(string $view, array $data = [])
    {
        $config = include './src/config/.config.php';

        require_once("{$config['app']}src/views/inc/header.view.php");

            if(file_exists("{$config['app']}src/views/{$view}.view.php")){
                require_once("{$config['app']}src/views/{$view}.view.php");
            }else{
                echo 'La vista no existe';
            }
        require_once("{$config['app']}src/views/inc/footer.view.php");
    }


 
}