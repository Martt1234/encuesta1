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

function altpreg(){
	$this->load->view('vistas/headers');
	$this->load->view('vistas/agrepregunta');
}

function altapregunta(){
$this->Model_1->crearPregunta();
	  // redireccionamos a controlador1
      redirect("Controller1/altpreg");
}

function listapreg(){
	$data['result'] = $this->Model_1->obtenerDatos();
	$this->load->view('vistas/headers');
	$this->load->view('vistas/vaccpregunta',$data);
}


	function editarpreg($id){
		$data['row'] = $this->Model_1->getDato($id);
		 $this->load->view('vistas/headers');
     $this->load->view("vistas/veditpreg",$data);

	}//termina la funcion editar

	function actualizar($id){
      $data['row'] = $this->Model_1->actpreg($id);
      redirect("Controller1/listapreg");
	}//termina la funcion de actualizar








		function eliminar($id){
	    $this->Model_1->eliminarpregunta($id);
			redirect("Controller1/listapreg");
		}

 function cuestionario(){
      $this->load->view('vistas/headers');
      $this->load->view('vistas/vencuest');
   }

   function nuevoCuest(){
     $this->Model_1->crearCuestionario();
      redirect("Controller1/cuestionario");
   }


}//termina la clase controller1