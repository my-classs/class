<?php 
	class Dashboardmodel extends CI_Model {

		function __construct(){

	        parent::__construct();
	        $this->load->helper('url');
	        $this->load->library('session');

	    }

	    function add_class_info($filename){
	    	$u_id = $_SESSION['user_id'];
	    	$img = $filename;
	    	$cname = $this->input->post('class-name');
	    	$phone = $this->input->post('contact-phone');
	    	$address = $this->input->post('contact-address');
	    	$email = $this->input->post('contact-email');
	    	$desc = $this->input->post('desc');
	    	$region = $this->input->post('region');
	    	$main_cat = $this->input->post('main-cat');

	    	$data = array(
	    			'user_id' => $u_id,
	    			'class_name' => $cname,
	    			'class_spec' => $desc,
	    			'main_cat' => $main_cat,
	    			'class_img' => $img,
	    			'region' => $region
	    		);
	    	

	    	if($this->db->insert('class',$data)){
	    		$insert_id = $this->db->insert_id();
	    		$data1 = array(
	    				'class_info_id' => $insert_id,
	    				'email' => $email,
	    				'phone' => $phone,
	    				'address' => $address
	    			);

	    		if($this->db->insert('class_info',$data1)){
	    			return true;
	    		}
	    		else{
	    			return false;
	    		}
	    	}

	    }

	    function get_user_class_info($id){

	    	$this->db->select('*');
	    	$this->db->from('class');
	    	$this->db->join('class_info', 'class_info.class_info_id = class.class_id','left');
	    	$this->db->where('user_id',$id);

	    	$query = $this->db->get();

	    	return $query->result();

	    }

	    function get_all_subject($id){

	    	if(!empty($id)){
		    	$this->db->select('*');
		    	$this->db->from('class');
		    	$this->db->join('subject','subject.course=class.class_id','inner');
		    	$this->db->where('user_id',$id);

		    	$query = $this->db->get();

		    	return $query->result();
		    }
		    else{
		    	redirect(base_url().'login.html');
		    }

	    }
	}