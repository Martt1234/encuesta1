<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller1 extends CI_Controller {

	
	public function index()
	{
		$this->load->view('vistas/headers');
		$this->load->view('vistas/vgeneral');
	}

function preguntas(){
	$this->load->view('vistas/headers');
$this->load->view('vistas/vpreguntas');
}//termina la funcion preguntas

function actualizarpregunta(){
$this->load->view('vistas/headers');
	$this->load->view('vistas/vactpregunta');
}

}//termina la clase controller1