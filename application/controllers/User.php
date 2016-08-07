<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct(){

		parent::__construct();
		$this->load->library(array('session','form_validation'));
		$this->load->database();
		$this->load->helper('url');
		$this->load->model('usermodel');

	}

	public function index()
	{
		$this->load->view('register');
	}

	public function register(){

		$this->form_validation->set_rules('user','User Type','trim|required');
		$this->form_validation->set_rules('name','Name','trim|required');
		$this->form_validation->set_rules('email','Email','trim|required|valid_email');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('phone','Phone','trim|required');

		$password = $this->input->post('password');
		$repassword = $this->input->post('repassword');
		$type = $this->input->post('user');

		if($type === 'class owner'){
			$this->form_validation->set_rules('class-name','Class Name','trim|required');
		}

		if($this->form_validation->run() == FALSE){
			$this->index();
		}
		else{
			if($password === $repassword){
				if($this->usermodel->register() == TRUE){
					$this->session->set_flashdata('register','<div class="alert alert-success">You register is successfully ! <a href="login.html">click here</a> to login</div>');
				}
				else{
					$this->session->set_flashdata('register','<div class="alert alert-danger">You cant not register now !</div>');
				}
			}
			else{
				$this->session->set_flashdata('register','<div class="alert alert-danger">Your password do not match !</div>');
			}
			redirect('register.html');
		}

	}

	public function login(){

		$this->form_validation->set_rules('email','Email','trim|required|valid_email');
		$this->form_validation->set_rules('password','Password','trim|required');

		if($this->form_validation->run() == FALSE){
			$this->load->view('login');
		}
		else{

			$this->usermodel->login();
		}

	}

	public function logout(){

        unset($_SESSION['user_id']);
        redirect('login.html');

    }


	public function dashboard($name,$id){

		if(!empty($_SESSION['user_id'])){

			$data['infos'] = $this->usermodel->get_user_profile($id);

			if(@$_SESSION['user_id']){
				$this->load->view('dashboard',$data);
			}
			else{
				$this->load->view('login.html');
			}
		}
		else{
			redirect('login.html');
		}

	}

	public function edit_user_profile(){

		$this->form_validation->set_rules('name','Name','trim|required');
		$this->form_validation->set_rules('email','Email','trim|required|valid_email');
		$this->form_validation->set_rules('phone','Phone','trim|required');
		$this->form_validation->set_rules('class-name','Class Name','trim|required');

		$user_type = $this->input->post('user');

		if($user_type === 'class owner'){
			$this->form_validation->set_rules('user','User Type','trim|required');
		}

		if($this->form_validation->run() == FALSE){

			redirect($_SESSION['url']);

		}
		else{

			if($this->usermodel->edit_user_profile($_SESSION['user_id']) == TRUE){

				$user = $this->input->post('user');
				if($user === 'class finder'){
					$url_name = strtolower(str_replace(' ', '-', $this->input->post('name')));
					$id = $_SESSION['user_id'];
					$url = 'class-user/'.$url_name.'/'.md5($id);
				}
				else{
					$class = strtolower(str_replace(' ', '-', $this->input->post('class-name')));
					$id = $_SESSION['user_id'];
					$url = 'dashboard/'.$class.'/'.md5($id);
				}

				$this->session->set_flashdata('update-user','<div class="alert alert-success text-center">Successfully Update Your data !</div>');
				redirect($url);
			}
			else{
				$this->session->set_flashdata('update-user','<div class="alert alert-danger text-center">Something went worng !</div>');
				redirect($_SESSION['url']);
			}
		}
	}


}
