<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Usuarios_model extends CI_Model{

	//Contructor correspondiente de la clase. Carga la base de datos.
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	//Hace un SELECT * FROM usuarios
	function getUsers(){
		$query = $this->db->get('usuarios');
		if($query->num_rows() > 0) return $query;
		else return NULL;
	}

	//Hace un SELECT * FROM usuarios WHERE id = $id
	function getUser($id){
		$this->db->where('id', $id);
		$query = $this->db->get('usuarios');
		if($query->num_rows() > 0) return $query;
		else return NULL;
	}

	//Hace un INSERT INTO usuarios VALUES datos = $data
	function newUser($data){
		$this->db->insert('usuarios', array(
											'nif' 		=> $data['nif'],
											'nombre' 	=> $data['nombre'],
											'apellidos' => $data['apellidos'],
											'email' 	=> $data['email'],
											'telefono' 	=> $data['telefono'],
											'fecha_nacimiento' 	=> $data['fecha_nacimiento'],
											'password' 		=> $data['password'],
											'localidad' 	=> $data['localidad']
										)
						);
	}

	//Hace un UPDATE usuarios SET datos = $data WHERE id = $id
	function updateUser($id, $data){
		$this->db->where('id', $id);
		$query = $this->db->update('usuarios', $data);
	}

	//Hace un DELETE FROM usuarios WHERE id = $id
	function deleteUser($id){
		$this->db->where('id', $id);
		$this->db->delete('usuarios');
	}

	function comentar($id, $data){
		$this->db->insert('comentario_usuario', array(
													'id_usuario_comentado' 	=> $data['id_usuario_comentado'],
													'titulo' 				=> $data['titulo'],
													'comentario' 			=> $data['comentario'],
													'anonimato' 			=> $data['anonimato']
												)
						);
	}
}