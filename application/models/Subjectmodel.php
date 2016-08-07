<?php
	class Subjectmodel extends CI_Model {

		function __construct(){

	        parent::__construct();
	        
	    }

	    function get_select_subject($id){

	    	$this->db->select('*');
	    	$this->db->from('subject');
	    	$this->db->join('class','class.class_id = subject.course','left');
	    	$this->db->where('subj_id',$id);

	    	$query = $this->db->get();

	    	return $query->result();

	    }

	    function get_subject_detail($id){

	    	$this->db->select('*');
	    	$this->db->from('subject');
	    	$this->db->join('class','class.class_id=subject.course','left');
	    	$this->db->join('region','region.region_id=class.region','left');
	    	$this->db->join('class_info','class_info.class_info_id=class.class_id','left');
	    	$this->db->where('id',$id);

	    	$query = $this->db->get();

	    	return $query->result();

	    }
	}