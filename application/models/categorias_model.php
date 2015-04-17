<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Categorias_model extends CI_Model{

	//Contructor correspondiente de la clase. Carga la base de datos.
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	//Hace un SELECT * FROM categorias
	function getCategories(){
		$query = $this->db->get('categorias');
		if($query->num_rows() > 0) return $query;
		else return NULL;
	}

	//Hace un SELECT * FROM categorias WHERE id = $id
	function getCategory($id){
		$this->db->where('id_cat', $id);
		$query = $this->db->get('categorias');
		if($query->num_rows() > 0) return $query;
		else return NULL;
	}

	//Hace un INSERT INTO categorias VALUES datos = $data
	function newCategory($data){
		$this->db->insert('categorias', array('nombre' => $data['nombre']));
	}

	/*//Hace un UPDATE categorias SET datos = $data WHERE id = $id
	function updateCategory($id, $data){
		$this->db->where('id_cat', $id);
		$query = $this->db->update('categorias', $data);
	}

	//Hace un DELETE FROM categorias WHERE id = $id
	function deleteCategory($id){
		$this->db->where('id_cat', $id);
		$this->db->delete('categorias');
	}*/
}