<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Login_controller extends CI_Controller{

	//Constructor de la clase. Carga el modelo correspondiente.
	function __construct(){
		parent::__construct();
		$this->load->model('login_model');
	}

	//Destruye la sesion activa y carga el formulario de login
	function index(){
		isset($this->session->userdata['habilitado'])?   
	   		$this->closeSession() : $this->load->view('form_login');
	}

	//Comprueba los datos del formulario login y guarda en session los datos que pueden hacer falta
	function login(){
		$formulario = array(
						'nif' 		=> $this->input->post('nif'),
						'password' 	=> $this->input->post('password')
					);
		$data['usuarios'] = $this->login_model->login($formulario);
		if($data['usuarios'] != NULL){
			$usuario = array(
							'id'				=> $data['usuarios']->result()[0]->id,
							'nif'				=> $data['usuarios']->result()[0]->nif,
							'nombre'			=> $data['usuarios']->result()[0]->nombre,
							'apellidos'			=> $data['usuarios']->result()[0]->apellidos,
							'email'				=> $data['usuarios']->result()[0]->email,
							'telefono'			=> $data['usuarios']->result()[0]->telefono,
							'localidad'			=> $data['usuarios']->result()[0]->localidad,	
							'fecha_nacimiento'	=> $data['usuarios']->result()[0]->fecha_nacimiento
						);
			$this->session->set_userdata($usuario);

			$info_usuario=array('habilitado' =>TRUE);
			$this->session->set_userdata($info_usuario); // configuramos la variable de sessión 'habilitado'

	 		redirect('usuarios_controller', 'refresh');
 		}
 		$message['error'] = 'Correo o contraseña incorrecto.';
 		$this->load->view('form_login', $message);
	}

	//Quita el acceso y destruye la variable session
	function closeSession(){
		$this->session->unset_userdata('habilitado');
		$this->session->sess_destroy();
		$this->load->view('form_login');
	}

	//Funcion auxiliar para llamar al formulario que coge el email desde formulario.
	function password(){
		$this->load->view('form_password');
	}

	/*//Recoge el email escrito en el form, realiza una consulta para obtener la contraseña, si existe le envia un correo.
	function getPassword(){
		$configuraciones['smpt'] = 'gmail';
		$this->email->initialize($configuraciones);

		$mail = $this->input->post('mail');
		$data['usuario'] = $this->login_model->getPassword($mail);

		if($data['usuario'] != NULL){

			$this->email->from('dadcuentadeprueba@gmail.com', 'Administrador');
			$this->email->to($mail);
			$this->email->subject('Recuperación de Contraseña');
			$this->email->message('Tu contraseña es: '.$data['usuario']->result()[0]->password);
			$this->email->send();
			$this->email->print_debugger();

			$message['error'] = 'Mensaje enviado,';
 			$this->load->view('form_login', $message);
		}else{
			$message['error'] = 'El correo especificado no existe.';
 			$this->load->view('form_login', $message);
		}
	}*/
}
?>