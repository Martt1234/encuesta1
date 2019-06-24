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

function obtenerDatos(){
//se le asigna auna variable query los resultados de la
	//consulta select from
$query = $this->db->query("SELECT * FROM  preguntas");

return $query->result();
}//termina funcion obetener dATOS

function getDato($id){
	//asignamos al query lo que se obtenga de la consulta
	//donde los id coincidan
$query = $this->db->query('SELECT * FROM preguntas WHERE `id` =' .$id);
return $query->row();
}//termina funcion getDato


function updatepregunta($id){
 $data=  array('descripcion' => $this->input->post('descripcion'));
 
  $this->db->where('id',$id);
 $this->db->update('preguntas',$data);
	}

function eliminarPregunta($id){
$this->db->where('id', $id);
$this->db->delete('preguntas');
}


}//termina la clase modelo
