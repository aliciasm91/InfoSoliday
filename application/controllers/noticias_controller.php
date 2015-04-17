<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Noticias_controller extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('noticias_model');
	}

	//Lista todos los noticias
	function index(){
		$data['noticias'] = $this->noticias_model->getNoticias();
		$this->load->view('noticias', $data);
	}

	function getNoticias(){
		$data['articulos'] = $this->articulos_model->getArticulo($data['id']);
		$this->index();
	}
}
?>