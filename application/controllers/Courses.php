<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Courses extends CI_Controller {

	function __construct(){

		parent::__construct();
    
        $this->load->helper('url');             // Load url helper
        $this->load->database();
        $this->load->model('coursemodel');
	}

	public function index()
	{
		$this->load->view('course');
	}

	public function course($id,$cat){

		$data['sub_cats'] = $this->get_sub_cat($id);
		$data['subjects'] = $this->get_subject($id);
		$this->load->view('course',$data);

	}

	public function course_detail($name,$id){

		$id = $id - 1700;

		$data['subject_list'] = $this->coursemodel->get_subject_list($id);
		$data['course_info'] = $this->coursemodel->get_course_detail($id);
		$this->load->view('course_detail',$data);

	}

	public function course_list($id,$name){
		$id = $id - 209;

		$data['course_list'] = $this->coursemodel->get_course_list($id);
		$this->load->view('course_list',$data);

	}

	private function get_sub_cat($id){

		$sub_cat = $this->coursemodel->get_sub_cat($id);

		return $sub_cat;

	}

	private function get_subject($id){

		$subject = $this->coursemodel->get_subject($id);

		return $subject;

	}

}
