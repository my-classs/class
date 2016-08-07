<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subjects extends CI_Controller {

	function __construct(){

		parent::__construct();
    
        $this->load->helper('url');             // Load url helper
        $this->load->database();
        $this->load->model('subjectmodel');
	}
	
	public function subject($cat,$id){

		$id = $id - 609;
		$data['subjects'] = $this->subjectmodel->get_select_subject($id);

		$this->load->view('subject_list',$data);

	}

	public function subject_detail($name,$id){

		$id = $id - 50009;
		$data['subject_detail'] = $this->subjectmodel->get_subject_detail($id);
		$this->load->view('subject_detail',$data);

	}


}