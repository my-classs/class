<?php defined('BASEPATH') OR exit('No direct script access allowed!');

class Category extends Admin_Controller{

	function __construct(){

		parent::__construct();
		$this->load->library(array('session','form_validation'));
		$this->load->model('adminmodel');

	}

	public function add_main_cat(){

		$this->form_validation->set_rules('cat_name','Category(myanmar)','trim|required');
		$this->form_validation->set_rules('cat_name_en','Category(English)','trim|required');

		if($this->form_validation->run() == false){

			redirect('admin-panel06');

		}
		else{

			if($this->adminmodel->add_main_cat() == true){

				$this->session->set_flashdata('admin-msg','<div class="alert alert-success text-center" > Successfully add ! </div>');

			}
			else{

				$this->session->set_flashdata('admin-msg','<div class="alert alert-danger text-center" > Fail add ! </div>');

			}
			redirect('admin-panel06');

		}

	}

	public function edit_main_cat(){

		$this->form_validation->set_rules('cat_name','Category(myanmar)','trim|required');
		$this->form_validation->set_rules('cat_name_en','Category(English)','trim|required');

		$id = $this->input->post('cat_id');

		if($this->form_validation->run() == false){

			redirect('admin-panel06');

		}
		else{

			if($this->adminmodel->edit_main_cat($id) == true){
				$this->session->set_flashdata('admin-msg','<div class="alert alert-success text-center">Successfully edit!</div>');
			}
			else{
				$this->session->set_flashdata('admin-msg','<div class="alert alert-danger text-center">Fail edit!</div>');
			}

			redirect('admin-panel06');

		}

	}

	public function add_sub_cat(){

		$this->form_validation->set_rules('sub_name','Category(myanmar)','trim|required');
		$this->form_validation->set_rules('sub_name_en','Category(English)','trim|required');
		$this->form_validation->set_rules('main_cat','Main Category','trim|required');

		if($this->form_validation->run() == false){

			redirect('admin-panel06/login');

		}
		else{

			if($this->adminmodel->add_sub_cat() == true){

				$this->session->set_flashdata('admin-msg','<div class="alert alert-success text-center" > Successfully add ! </div>');
				redirect('admin-panel06');

			}
			else{

				$this->session->set_flashdata('admin-msg','<div class="alert alert-danger text-center" > Fail add ! </div>');
				redirect('oecmyanmar-live');

			}

		}

	}

	public function edit_sub_cat(){

		$this->form_validation->set_rules('sub_name','Category(myanmar)','trim|required');
		$this->form_validation->set_rules('sub_name_en','Category(English)','trim|required');
		$this->form_validation->set_rules('main_cat','Main Title','trim|required');

		$id = $this->input->post('sub_id');

		if($this->form_validation->run() == false){

			redirect('admin-panel06');

		}
		else{

			if($this->adminmodel->edit_sub_cat($id) == true){
				$this->session->set_flashdata('admin-msg','<div class="alert alert-success text-center">Successfully edit!</div>');
			}
			else{
				$this->session->set_flashdata('admin-msg','<div class="alert alert-danger text-center">Fail edit!</div>');
			}

			redirect('admin-panel06');

		}

	}

}