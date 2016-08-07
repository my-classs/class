<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->library(array('session','form_validation'));
		$this->load->database();
		$this->load->helper('url');
		$this->load->model('dashboardmodel');
	}

	function index(){

		if(!empty($_SESSION['user_id'])){

			$id = $_SESSION['user_id'];
			$data['class_info'] = $this->dashboardmodel->get_user_class_info($id);
			$this->load->view('add_class_info',$data);

		}
		else{
			redirect('login.html');
		}
	}

	function add_class_info(){

		if(isset($_SESSION['user_id'])){

			$this->form_validation->set_rules('class-name','Class Name','trim|required');
			$this->form_validation->set_rules('contact-phone','Contact Phone','trim|required');
			$this->form_validation->set_rules('contact-address','Contact Address','trim|required');
			$this->form_validation->set_rules('contact-email','Contact Email','trim|required|valid_email');
			$this->form_validation->set_rules('desc','Description','trim|required');
			$this->form_validation->set_rules('main-cat','Main Category','trim|required');
			$this->form_validation->set_rules('region','Region','trim|required');

			if($this->form_validation->run() == false){

				$this->load->view('add_class_info');

			}
			else{

				$class_name = strtolower($this->input->post('class-name'));
				//set preferences
		        $config['upload_path'] = './upload/class-logo';
		        $config['allowed_types'] = 'jpg|png|jpeg';
		        $config['max_size']    = '1024';
		        $file_name = date('YmdHms').'.jpg';
				$config['file_name'] = $file_name;

		        //load upload class library
		        $this->load->library('upload', $config);

		        if (!$this->upload->do_upload('logo'))
		        {
		            // case - failure
		            $upload_error = array('error' => $this->upload->display_errors());
		            $this->load->view('add_class_info', $upload_error);
		        }
		        else{

		        	$post = $this->input->post('class-info');

		        	if($post == 'Save'){
			        	if($this->dashboardmodel->add_class_info($file_name) == true){

						$this->session->set_flashdata('add-class','<div class="alert alert-success text-center">Successfully Save Data !</div>');

						}
						else{

							$this->session->set_flashdata('add-class','<div class="alert alert-danger text-center">Something Worng ! Try again!</div>');

						}
					}
					else{
						if($this->dashboardmodel->update_class_info($file_name) == true){

						$this->session->set_flashdata('add-class','<div class="alert alert-success text-center">Successfully Update Data !</div>');

						}
						else{

							$this->session->set_flashdata('add-class','<div class="alert alert-danger text-center">Something Worng ! Try again!</div>');

						}
					}
					redirect('dashboard/add-class-info.html');

		        }

			}

		}
		else{
			redirect('login.html');
		}
	}

	public function manage_subject(){

		$id = $_SESSION['user_id'];
		$data['subjects'] = $this->dashboardmodel->get_all_subject($id);
		$this->load->view('manage_subject',$data);

	}

}