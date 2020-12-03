<?php


require_once "APIView.php";

abstract class ApiController {
    protected $model; // lo instancia el hijo
    protected $view;

    private $data; 

    public function __construct() {
        $this->view = new APIView();

        //trae todo lo que tiene en el input
        $this->data = file_get_contents("php://input"); 
    }

    function getData(){ 

        //convierte a json
        return json_decode($this->data); 
    }  
}
