<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

	function __construct(){

		parent::__construct();
    
        $this->load->helper('url');             // Load url helper
        $this->load->database();
        $this->load->model('searchmodel');
	}

	public function index(){

		$data['search_info'] = $this->searchmodel->get_all_subject();
		$this->load->view('search',$data);

	}

	public function search_class(){
		$keywords = $this->slug_url($this->input->post('keyword'));
		$type = $this->input->post('type');
		$region = $this->input->post('region');

		if($type == 0){
			$type = 'all-class';
		}
		if($region == 0){
			$region = 'all-region';
		}

		$url ='subject-search/'.$region.'/'.$type.'/'.$keywords;
		redirect($url);
	}

	public function search_subject($region, $type, $keyword){

		if($type == 'all-class'){
			$type = 0;
		}
		if($region == 'all-region'){
			$region = 0;
		}

		$keyword = $this->unslug($keyword);

		$data['search_info'] = $this->searchmodel->search_subject($region, $type, $keyword);
		$this->load->view('search',$data);

	}

	private function slug_url($str){

		$str = trim(strtolower($str));
		$str = str_replace(array(' ','&'), '-', $str);
		$str = str_replace(array('--','---'), '-', $str);

		return $str;

	}

	private function unslug($str){

		$str = strtolower($str);
		$str = str_replace('-', ' ', $str);

		return $str;

	}

}