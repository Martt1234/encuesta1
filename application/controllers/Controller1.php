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

function actualizarpreg(){
	$data['result'] = $this->Model_1->obtenerDatos();
	$this->load->view('vistas/headers');
	$this->load->view('vistas/vactpregunta',$data);

}//termina la funcion que muesta la vista de actulializar preguntas
	function updatepreg($id){
      $data['row'] = $this->Model_1->updatepregunta($id);
      redirect("Controller1/actualizarpreg");
	}//termina la funcion de que actualiza la pregunta

function editarpregunta($id){

		$data['row'] = $this->Model_1->getDato($id);
		 $this->load->view('vistas/headers');
     $this->load->view("vistas/veditpregunta",$data);
} //termina funcion que muestra la respuesta seleccionada en la 
//ventana de editar pregunta


function borrarpreg(){
	$data['result'] = $this->Model_1->obtenerDatos();
	$this->load->view('vistas/headers');
	$this->load->view('vistas/velimpregunta',$data);
}//termina la funcion que carga la vista eliminar pregunta

function borrarPregunta($id){
	$this->Model_1->eliminarpregunta($id);
	redirect("Controller1/borrarpreg");

}//termina la funcion que elimina la pregunta

 function cuestionario(){
      $this->load->view('vistas/headers');
      $this->load->view('vistas/vencuest');
   }

   function nuevoCuest(){
     $this->Model_1->crearCuestionario();
      redirect("Controller1/cuestionario");
   }


}//termina la clase controller1