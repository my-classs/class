<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Classusermodel extends CI_Model {

	function __construct(){
        parent::__construct();
        $this->load->helper(array('url','date','main'));
        $this->load->library('session');
    }

    public function get_class_user(){

    	$id = $_SESSION['user_id'];
    	$this->db->select('*');
    	$this->db->from('user');
    	$this->db->where('user_id',$id);

    	$query = $this->db->get();

    	return $query->result();

    }

    public function edit_class_user(){

    	$name = $this->input->post('name');
    	$email = $this->input->post('email');
    	$phone = $this->input->post('phone');
    	$user = $this->input->post('user');

    	if($user == 'class owner'){
    		$_SESSION['url'] = " ";
    		$class = $this->input->post('class-name');
    		$data = array(
    				'user_name' => $name,
    				'user_email' => $email,
    				'user_phone' => $phone,
    				'user_type' => $user,
    				'class_name' => $class
    			);
    	}
    	else{
    		$data = array(
    				'user_name' => $name,
    				'user_email' => $email,
    				'user_phone' => $phone,
    				'user_type' => $user
    			);
    	}

    	$url_id = md5($_SESSION['user_id']);

    	$this->db->where('user_id',$_SESSION['user_id']);

    	if($this->db->update('user',$data)){
    		$this->session->set_flashdata('class-user','<div class="alert alert-success text-center">Successfully !</div>');
    	}
    	else{
    		$this->session->set_flashdata('class-user','<div class="alert alert-danger text-center">Wrong !</div>');
    	}

    	if($user === 'class finder'){
            $url = 'class-user/'.strtolower(str_replace(" ", "-", $name)).'/'.$url_id;
        }

        if($user === 'class owner'){
            $url = 'dashboard/'.strtolower(str_replace(" ", "-", $class)).'/'.$url_id;
        }

        $_SESSION['url']= $url;
        redirect($url);
    }
}