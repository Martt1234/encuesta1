<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_1 extends CI_Model {
  public function __construct(){
  	//se carga la base de datos
 	$this->load->database();
 }//termina la funcion del constructor
	
function crearPregunta(){

	$data=  array('descripcion' => $this->input->post('descripcion'));
	$this->db->insert('preguntas',$data);

}//termina la funcion alta pregunta

	
}//termina la clase modelo
