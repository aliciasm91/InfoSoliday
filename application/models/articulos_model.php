<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Articulos_model extends CI_Model{

	//Contructor correspondiente de la clase. Carga la base de datos.
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	//Hace un SELECT * FROM articulos
	function getArticulos(){
		$query = $this->db->get('articulos');
		if($query->num_rows() > 0) return $query;
		else return NULL;
	}

	//Hace un SELECT * FROM articulos WHERE id = $id
	function getArticulo($id){
		$this->db->where('id', $id);
		$query = $this->db->get('articulos');
		if($query->num_rows() > 0) return $query;
		else return NULL;
	}

	//Hace un SELECT * FROM articulos WHERE id_usuario = $id. El id es el usuario con sesion abierta
	function getArticuloUser($id_usuario){
		$this->db->where('id_usuario', $id_usuario);
		$consulta = $this->db->get('articulos');
		return $consulta->result();
	}

	
	//Hace un INSERT INTO articulos VALUES datos = $data
	function newArticulo($data){
		$this->db->insert('articulos', array(
										'imagen' 		=> $data['imagen'],
										'descripcion' 	=> $data['descripcion'],
										'id_usuario'=> $this->session->userdata('id'),
										'anonimato'		=> $data['anonimato']
										)
						);
		$last = $this->db->insert_id();

		if($data['id_categoria']){
			foreach ($data['id_categoria'] as $categoria){
				$this->db->insert('articulo_categoria', array(
															'id_articulo'	=> $last,
															'id_categoria'	=> $categoria
														)
								);
			}
		}
	}

	//Hace un UPDATE articulos SET datos = $data WHERE id = $id
	function updateArticulo($id, $data, $categorias){
		$this->db->where('id', $id);
		$query = $this->db->update('articulos', $data);

		$this->db->where('id_articulo', $id);
		$this->db->delete('articulo_categoria');
		if($categorias['id_categoria']){
			foreach ($categorias['id_categoria'] as $categoria){
				
				$this->db->insert('articulo_categoria', array(
														'id_articulo'	=> $id,
														'id_categoria'	=> $categoria
													)
								);
			}
		}
	}

	//Hace un DELETE FROM articulos WHERE id = $id
	function deleteArticulo($id){
		$this->db->where('id', $id);
		$this->db->delete('articulos');
	}

	function getCategoriesFromArticulo($id){
		$this->db->where('id_articulo', $id);
		$query = $this->db->get('articulo_categoria');
		if($query->num_rows() > 0) return $query;
		else return NULL;
	}

	function donate($id, $id_usuario, $anonimato){
		$this->db->insert('articulos_donados', array(
														'id_articulo'	=> $id,
														'id_usuario_receptor'	=> $id_usuario,
														'anonimato'		=> $anonimato
													)
								);
		$this->db->where('id', $id);
		$this->db->delete('articulos');
	}
}