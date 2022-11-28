<?php

class PruebaController extends Controller
{
    
    private $catalogosModel;

    public function __construct()
    {
        $this->catalogosModel = $this->model('Catalogos');
    }

    public function index()
    {
        $data = [
            'tipos' => $this->catalogosModel->obtenerTipos(),
        ];

        $this->render('contactos/busqueda', $data);
    }

    public function ver()
    {
        var_dump('Estoy en controlador de pruebas en el método ver');
    }

}