<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){

		parent::__construct();
		$this->load->library(array('session','form_validation'));
		$this->load->database();
		$this->load->helper('url');
		$this->load->model('homemodel');

	}

	
	public function index()
	{
		$data['classes'] = $this->get_class();
		$this->load->view('index',$data);
	}

	public function contact_us(){
		$this->load->view('contact_us');
	}

	public function get_class(){
		$result =  $this->homemodel->get_class();
		return $result;
	}

	public function test(){
		$this->load->view('test');
	}

}
