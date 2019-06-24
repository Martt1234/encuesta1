<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller1 extends CI_Controller {

    //se crea mi funcion constructor
	function __construct(){
			parent::__construct();
			//se carga el modelo
		  $this->load->model('Model_1');
			
		}//finaliza el constructor

	public function index()
	{
		$this->load->view('vistas/headers');
		$this->load->view('vistas/vgeneral');
	}

function preguntas(){
$this->load->view('vistas/headers');
$this->load->view('vistas/vpreguntas');
}//termina la funcion preguntas

function altapregunta(){
$this->Model_1->crearPregunta();
	  // redireccionamos a controlador1
      redirect("Controller1/preguntas");
}

function actualizarpregunta(){
}//termina la funcion de eliminar preguntas


function eliminarpregunta(){
}//termina la funcion de eliminar preguntas

}//termina la clase controller1