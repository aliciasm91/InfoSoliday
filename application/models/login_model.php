<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model{

	//Contructor correspondiente de la clase. Carga la base de datos.
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	//Hace un SELECT * FROM usuarios WHERE mail = $mail AND password = $password
	function login($formulario){
		$this->db->where('nif', $formulario['nif']);
		$this->db->where('password', $formulario['password']);
		$query = $this->db->get('usuarios');
		if($query->num_rows() > 0) return $query;
		else return NULL;
	}

	//Hace un SELECT * FROM usuarios WHERE mail = $mail
	function getPassword($email){
		$this->db->where('email', $email);
		$query = $this->db->get('usuarios');
		if($query->num_rows() > 0) return $query;
		else return NULL;
	}

	
	//Envia un correo electronico.
	function sendEmail($from, $name, $to, $subject, $message){
		$configuraciones['smpt'] = 'gmail';
		$this->email->initialize($configuraciones);
		$this->email->from($from, $name);
		$this->email->to($to);
		$this->email->subject($subject);
		$this->email->message($message);
		$this->email->send();
		$this->email->print_debugger();
	}
}
?>