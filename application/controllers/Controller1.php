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


function borrarpreg(){
	$data['result'] = $this->Model_1->obtenerDatos();
	$this->load->view('vistas/headers');
	$this->load->view('vistas/velimpregunta',$data);
}//termina la funcion de eliminar preguntas

function borrarPregunta($id){
	$this->Model_1->eliminarpregunta($id);
	redirect("Controller1/borrarpreg");

}

}//termina la clase controller1