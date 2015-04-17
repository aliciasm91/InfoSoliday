<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Articulos_controller extends CI_Controller{

	//Constructor de la clase. Carga el modelo correspondiente.
	function __construct(){
		parent::__construct();
		$this->load->model('articulos_model');
		!isset($this->session->userdata['habilitado'])?   
	   		redirect('login_controller', 'refresh') : '';
	}

	//Lista todos los articulos
	function index(){
		$data['articulos'] = $this->articulos_model->getArticulos();
		$this->load->view('articulos/articulos', $data);
	}

	//Lista un poi en concreto. Se pasa el id por parametro.
	function getArticulo(){
		$data['id'] = $this->uri->segment(4);
		if(!$data['id']){
			$data['articulos'] = $this->articulos_model->getArticulos();
		}else{
			$data['articulos'] = $this->articulos_model->getArticulo($data['id']);
		}
		$this->load->view('articulos/articulos', $data);
	}

	//Lista los articulos del usuario con la sesion abierta
	function getArticuloUser(){
		$id_usuario = $this->session->userdata('id');
		$data['articulos'] = $this->articulos_model->getArticuloUser($id_usuario);
	}
	
	//Lleva a la vista con el formulario para rellenar los datos de un nuevo articulo.
	function newArticulo(){
		$this->load->model('categorias_model');
        $data['categorias'] = $this->categorias_model->getCategories();

		$this->load->view('articulos/form_new', $data);
	}

	//Almacena los datos del formulario (newArticulo()) en un array para pasarselos al modelo y añadirlo a la BD.
	function getNewArticulo(){
		$data = array(
				'imagen' 		=> $this->input->post('imagen'),
				'descripcion'	=> $this->input->post('descripcion'),
				'anonimato'		=> $this->input->post('anonimato'),

				'id_categoria'	=> $this->input->post('id_categoria')
			);
		$this->articulos_model->newArticulo($data);
		$this->index();
	}

	//Lleva a la vista con el formulario para modificar los datos.
	function updateArticulo(){
		$data['id'] = $this->uri->segment(3);

		$this->load->model('categorias_model');
        $data['categorias'] = $this->categorias_model->getCategories();

        $this->load->model('categorias_model');
        $data['categorias_poi'] = $this->articulos_model->getCategoriesFromArticulo($data['id']);

		if($data['id']){
			$data['articulo'] = $this->articulos_model->getArticulo($data['id']);
		}

		if($data['articulo'] != null)
			$this->load->view('articulos/form_update', $data);
		else
			$this->load->view('articulos/form_new', $data);
	}

	//Modifica los datos de un poi cuyo id se pasa por parametro.
	function getUpdateArticulo(){
		$data = array(
				'imagen' 		=> $this->input->post('imagen'),
				'descripcion'	=> $this->input->post('descripcion'),
				'anonimato'		=> $this->input->post('anonimato')
			);

		$categorias['id_categoria'] = $this->input->post('id_categoria');

		$this->articulos_model->updateArticulo($this->uri->segment(3), $data, $categorias);
		$this->index();
	}

	//Elimina el poi con el id pasado por parametro.
	function deleteArticulo(){
		$id = $this->uri->segment(3);
		if($id){
			$this->articulos_model->deleteArticulo($id);
		}
		$this->index();
	}

	function donate(){
		$id = $this->uri->segment(3);
		if($id){
			//$this->articulos_model->donate($id, $id_usuario, $anonimato);
			$this->articulos_model->donate($id, 2, null);
		}
		$this->index();
	}
}
?>