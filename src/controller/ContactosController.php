<?php
/*class se tipo contactos controller con extencion a controller para ver las cunciones dento de la misma*/ 
class ContactosController extends Controller
{

    private $catalogosModel;

    public function __construct()
    {
        $this->catalogosModel = $this->model('Catalogos');
    }
/*funciones para saber a que archivo ir segun protect funcion que estan en controller*/ 


    public function index()  /*funcion para optener index.view.php y enviar datos al achivo correcto*/ 
    {
        $this->render('contactos/index');
    }

    public function busqueda() /*funcion para optener busqueda.view.php y enviar datos al achivo correcto*/ 
    {
        $modelo   = $this->model('Agenda');
        $busqueda = $modelo->buscara($_POST);


        $this->render('contactos/busqueda', $busqueda);   
    }

    public function ingreso()  /*funcion para optener ingreso-datos.view.php y enviar datos al achivo correcto*/
    {
        $data = [
            'tipos' => $this->catalogosModel->obtenerTipos(),
        ];

        $this->render('contactos/ingreso-datos', $data);
    }

    public function request()
    {
        
        $msg = [];
        $submit = $_POST['submit']??0;
        $telefono = $_POST['id_telefono']??0;
        $modelo   =  $this->model('Agenda');

        $telefono = $this->limpiarCadenas($telefono);

        if(!intval($submit)){
            header("location: http://localhost/agenda/?c=Contactos&m=index");
        }
        
        if(!intval($telefono)){
            $msg['msg-telefono'] = "Ingrese Número télefonico, este es requerido.";
        }


        if(empty($msg)){

            $_POST['id_telefono'] = $telefono;
            $editar = $_POST['editar']??0;
            $action = false;
            $msgp = '';

            if(intval($editar)){
                $action = $modelo->actualizarDatos($_POST);
                $msgp = 'actualizado';
            }
            if(!intval($editar)){
                $action = $modelo->guardarDatos($_POST);
                $msgp = 'guardado';
            }
            

            if($action){
                $msg['msg-request'] = "Registro {$msgp} correctamente";
            }
            if(!$action){
                $msg['msg-request'] = "Ups! Lo sentimos, por favor vuelve a intentarlo.";
            }
        }


        $data = [
            'tipos' => $this->catalogosModel->obtenerTipos(),
            'msg' => $msg
        ];

        $this->render('contactos/ingreso-datos', $data);
    
    }


    public function editar()
    {
        $data = [
            'tipos' => $this->catalogosModel->obtenerTipos(),
            'editar' => true,
        ];

        $this->render('contactos/ingreso-datos', $data);
    }

    private function limpiarCadenas(string $string)
    {
        $string = trim($string);
        $string = stripslashes($string);
        $string = preg_replace("/[^a-zA-Z0-9]+/", "", html_entity_decode($string, ENT_QUOTES));
        return $string;
    }
}