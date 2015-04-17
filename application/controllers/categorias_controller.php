<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Categorias_controller extends CI_Controller{

	//Constructor de la clase. Carga el modelo correspondiente.
	function __construct(){
		parent::__construct();
		$this->load->model('categorias_model');
		!isset($this->session->userdata['habilitado'])?   
	   		redirect('login_controller', 'refresh') : '';
	}

	//Lista todas las categorias, excepto la default.
	function index(){
		$data['categorias'] = $this->categorias_model->getCategories();
		$this->load->view('categorias/categorias', $data);
	}

	//Lista una categoria en concreto. Se pasa el id por parametro.
	function getCategory(){
		$data['id'] = $this->uri->segment(4);
		if(!$data['id']){
			$data['categorias'] = $this->categorias_model->getCategories();
		}else{
			$data['categorias'] = $this->categorias_model->getCategory($data['id']);
		}
		$this->load->view('categorias/categorias', $data);
	}
	
	//Lleva a la vista con el formulario para rellenar los datos de una nueva categoria.
	function newCategory(){
		$this->load->view('categorias/form_new');
	}

	//Almacena los datos del formulario (newCategory()) en un array para pasarselos al modelo y añadirlo a la BD.
	function getNewCategory(){
		$data = array('nombre' => $this->input->post('nombre'));
		$this->categorias_model->newCategory($data);
		$this->index();
	}

	/*//Lleva a la vista con el formulario para modificar los datos. Mientras no sea id 0 que es la default.
	function updateCategory(){
		if($this->session->userdata['rol'] != 0)
	   		redirect('login_controller', 'refresh');

		$data['id'] = $this->uri->segment(4);
		if($data['id']){
			$data['categoria'] = $this->categorias_model->getCategory($data['id']);
		}
		if($data['categoria'] != null)
			$this->load->view('categorias/form_update', $data);
		else
			$this->load->view('categorias/form_new', $data);
	}

	//Modifica los datos de una categoria cuyo id se pasa por parametro. Mientras no sea id 0 que es la default.
	function getUpdateCategory(){
		if($this->session->userdata['rol'] != 0)
	   		redirect('login_controller', 'refresh');

		$data = array('nombre_cat' => $this->input->post('nombre'));
		$this->categorias_model->updateCategory($this->uri->segment(4), $data);
		$this->index();
	}

	//Elimina la categoria con el id pasado por parametro. Mientras no sea id 0 que es la default.
	function deleteCategory(){
		if($this->session->userdata['rol'] != 0)
	   		redirect('login_controller', 'refresh');
	   	
		$id = $this->uri->segment(4);
		if($id){
			$this->categorias_model->deleteCategory($id);
		}
		$this->index();
	}*/
}
?>