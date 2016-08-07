<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Classuser extends CI_Controller {

	function __construct(){

		parent::__construct();
		$this->load->library(array('session','form_validation'));
		$this->load->database();
		$this->load->helper('url');
		$this->load->model('classusermodel');

	}

	public function index($name,$id)
	{

		$data['infos'] = $this->classusermodel->get_class_user();
		$this->load->view('class_user',$data);

	}

	public function edit_class_user(){

		$this->form_validation->set_rules('name','Name','trim|required');
		$this->form_validation->set_rules('email','Email','trim|required|valid_email');
		$this->form_validation->set_rules('phone','Phone','trim|required');
		$this->form_validation->set_rules('user','User Type','trim|required');

		$user = $this->input->post('user');

		if($user === 'class owner'){
			$this->form_validation->set_rules('class-name','Class Name','trim|required');
		}

		if($this->form_validation->run() == false){
			redirect($_SESSION['url']);
		}
		else{
			$this->classusermodel->edit_class_user();
		}

	}

}