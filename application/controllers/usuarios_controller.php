<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Usuarios_controller extends CI_Controller{

	//Constructor de la clase. Carga el modelo correspondiente.
	function __construct(){
		parent::__construct();
		$this->load->model('usuarios_model');
	}

	//Lista todos los usuarios
	function index(){
		if(!isset($this->session->userdata['habilitado'])){
	   		redirect('login_controller', 'refresh');
	   	}
		/*$data['usuarios'] = $this->usuarios_model->getUsers();
		$this->load->view('usuarios/usuarios', $data);*/

		$data['id'] = $this->session->userdata('id');
		if(!$data['id']){
			$data['usuarios'] = $this->usuarios_model->getUsers();
		}else{
			$data['usuarios'] = $this->usuarios_model->getUser($data['id']);
		}
		$this->load->view('usuarios/usuarios', $data);
	}

	//Lista un usuario en concreto. Se pasa el id por parametro.
	/*function getUsuario(){
		$data['id'] = $this->uri->segment(4);
		if(!$data['id']){
			$data['usuarios'] = $this->usuarios_model->getUsers();
		}else{
			$data['usuarios'] = $this->usuarios_model->getUser($data['id']);
		}
		$this->load->view('usuarios/usuarios', $data);
	}*/
	
	//Lleva a la vista con el formulario para rellenar los datos de un nuevo usuario.
	function newUser(){
		$this->load->view('usuarios/form_new');
	}

	//Almacena los datos del formulario (newUser()) en un array para pasarselos al modelo y añadirlo a la BD.
	function getNewUser(){
		$data = array(
				'nif' 			=> $this->input->post('nif'),
				'nombre' 		=> $this->input->post('nombre'),
				'apellidos' 	=> $this->input->post('apellidos'),
				'email' 		=> $this->input->post('email'),
				'telefono' 		=> $this->input->post('telefono'),
				'fecha_nacimiento' => $this->input->post('fecha_nacimiento'),
				'password' 		=> $this->input->post('password'),
				'localidad' 	=> $this->input->post('localidad')
			);
		$this->usuarios_model->newUser($data);

		//$this->load->model('login_model');
		/*$this->login_model->sendEmail(
										$this->session->userdata['mail'], 
										$this->session->userdata['nombre'],
										$data['mail'],
										'Nueva alta',
										'Nombre de usuario: '.$data['nombre'].', correo: '.$data['mail'].' contraseña: '.$data['password']
									);*/

		//$this->index();
		redirect('login_controller', 'refresh');
	}

	//Lleva  a la vista con el formulario para modificar los datos.
	function updateUser(){
		if(!isset($this->session->userdata['habilitado'])){
	   		redirect('login_controller', 'refresh');
	   	}
		$data['id'] = $this->session->userdata('id');
		if($data['id']){
			$data['usuario'] = $this->usuarios_model->getUser($data['id']);
		}

		if($data['id'] != null)
			$this->load->view('usuarios/form_update', $data);
		else
			$this->load->view('usuarios/form_new', $data);
	}

	//Modifica los datos de un usuario cuyo id se pasa por parametro.
	function getUpdateUser(){
		if(!isset($this->session->userdata['habilitado'])){
	   		redirect('login_controller', 'refresh');
	   	}
		$data = array(
				'nif' 			=> $this->input->post('nif'),
				'nombre' 		=> $this->input->post('nombre'),
				'apellidos' 	=> $this->input->post('apellidos'),
				'email' 		=> $this->input->post('email'),
				'telefono' 		=> $this->input->post('telefono'),
				'fecha_nacimiento' => $this->input->post('fecha_nacimiento'),
				'password' 		=> $this->input->post('password'),
				'localidad' 	=> $this->input->post('localidad')
			);
		$this->usuarios_model->updateUser($this->session->userdata('id'), $data);
		$this->index();
	}

	//Elimina el usuario con el id pasado por parametro.
	function deleteUser(){
		$id = $this->session->userdata('id');
		if($id){
			$this->usuarios_model->deleteUser($id);
		}
		redirect('login_controller', 'refresh');
	}

	function comentar(){
		if(!isset($this->session->userdata['habilitado'])){
	   		redirect('login_controller', 'refresh');
	   	}
	   	$this->load->view('usuarios/comentar');
	}

	function getComentar(){
		$data = array(
				'id_usuario_comentado' 	=> $this->input->post('id_usuario_comentado'),
				'titulo' 				=> $this->input->post('titulo'),
				'comentario' 			=> $this->input->post('comentario'),
				'anonimato' 			=> $this->input->post('anonimato')
			);

		$this->usuarios_model->comentar($this->session->userdata('id'), $data);
		$this->index();
	}
}
?>