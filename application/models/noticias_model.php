<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Noticias_model extends CI_Model{

	//Contructor correspondiente de la clase. Carga la base de datos.
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	//Hace un SELECT * FROM noticias
	function getNoticias(){
		$query = $this->db->get('noticias');
		if($query->num_rows() > 0) return $query;
		else return NULL;
	}
}