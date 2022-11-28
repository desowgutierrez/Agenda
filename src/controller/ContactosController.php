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
        $data = [
            'tipos' => $this->catalogosModel->obtenerTipos(),
        ];

        $this->render('contactos/index', $data);
    }

    public function busqueda() /*funcion para optener busqueda.view.php y enviar datos al achivo correcto*/ 
    {
        $this->render('contactos/busqueda');
    }

    public function ingreso()  /*funcion para optener ingreso-datos.view.php y enviar datos al achivo correcto*/
    {
        $this->render('contactos/ingreso-datos');
    }
}