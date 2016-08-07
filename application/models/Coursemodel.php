<?php
	class Coursemodel extends CI_Model {

		function __construct(){

	        parent::__construct();
	        $this->load->helper('url');
	        $this->load->library('session');

	    }

	    public function get_sub_cat($id){

	    	$id = $id - 109;

	    	$this->db->select('*');
	    	$this->db->from('sub_cat');
	    	$this->db->where('main_cat',$id);

	    	$query = $this->db->get();

	    	return $query->result();

	    }

	    public function get_course_detail($id){

	    	$this->db->select('*');
	    	$this->db->from('class');
	    	$this->db->join('class_info','class.class_id=class_info.info_id','left');
	    	$this->db->join('region','class.region=region.region_id','left');
	    	$this->db->where('class_id',$id);

	    	$query = $this->db->get();

	    	return $query->result();

	    }

	    public function get_subject_list($id){
	    	$this->db->select('*');
	    	$this->db->from('subject');
	    	$this->db->join('class','class.class_id=subject.course');
	    	$this->db->join('region','region.region_id=class.region','left');
	    	$this->db->where('course',$id);

	    	$query = $this->db->get();

	    	return $query->result();
	    }

	    public function get_course_list($id){
	    	$this->db->select('*');
	    	$this->db->from('class');
	    	$this->db->join('class_info','class.class_id=class_info.info_id','left');
	    	$this->db->where('sub_cat',$id);

	    	$query = $this->db->get();

	    	return $query->result();
	    }

	    public function get_subject($id){

	    	if($id > 109 && $id < 209){
	    		$cat_name = 'main_id';
	    		$id = $id - 109;
	    	}
	    	else{
	    		$cat_name = 'sub_id';
	    		$id = $id - 209;
	    	}

	    	$this->db->select('*');
	    	$this->db->from('subj_cat');
	    	$this->db->where($cat_name,$id);

	    	$query = $this->db->get();

	    	return $query->result();

	    }
	}