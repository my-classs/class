<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usermodel extends CI_Model {

	function __construct(){
        parent::__construct();
        $this->load->helper(array('url','date','main'));
        $this->load->library('session');
    }

    public function register(){
    	$user = $this->input->post('user');
    	$name = $this->input->post('name');
    	$email = $this->input->post('email');
    	$password = $this->input->post('password');
    	$phone = $this->input->post('phone');
    	$date = date('Y-m-d H:i:s');
        $class_name = $this->input->post('class-name');

        if($class_name){
            $class = $class_name;
        }
        else{
            $class = "";
        }

    	$data = array(
    			'user_name' => $name,
    			'user_email' => $email,
    			'user_password' => md5($password),
    			'user_phone' => $phone,
    			'user_type' => $user,
                'class_name' => $class,
    			'user_reg' => $date,
    			'verify_status' => '1'
    		);

    	if($this->check_user_exit($email) == true){
    		$this->session->set_flashdata('register','<div class="alert alert-danger">You are already register!</div>');
    		redirect('register.html');
    	}
    	else{
    		if($this->db->insert('user',$data)){
    			return true;
    		}
    		else{
    			return false;
    		}
    	}
    }

    private function check_user_exit($email){

    	$this->db->select('*');
    	$this->db->from('user');
    	$this->db->where('user_email',$email);

    	$query = $this->db->get();

    	if($query->row() > 0){
    		return true;
    	}
    	else{
    		return false;
    	}

    }

    public function login(){
        $_SESSION['user_id'] = "";
        $_SESSION['url'] = "";
        $_SESSION['user_name'] = "";

        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $pass = md5($password);

        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('user_email',$email);
        $this->db->where('user_password',$pass);

        $query = $this->db->get();
        $value = $query->result();

        $row = $query->row();

        foreach($value as $val){
            $url_type = $val->user_type;
            $url_name = $val->user_name;
            $url_class = $val->class_name;
            $url_id = md5($val->user_id);
            $uid = $val->user_id;
            $verify = $val->verify_status;
        }

        if($row > 0){

            if($verify == 0){
                $this->session->set_flashdata('login','<div class="alert alert-danger">Please verify your account !</div>');
                redirect('user/login');
            }
            else{
                $_SESSION['user_id'] = $uid;
                $_SESSION['user_name'] = $url_name;
            }

            if($url_type === 'class finder'){
                $url = 'class-user/'.strtolower(str_replace(" ", "-", $url_name)).'/'.$url_id;
            }

            if($url_type === 'class owner'){
                $url = 'dashboard/'.strtolower(str_replace(" ", "-", $url_class)).'/'.$url_id;
            }

            $_SESSION['url']= $url;
            redirect($url);

        }
        else{
        
            $this->session->set_flashdata('login','<div class="alert alert-danger">your email and password do not match !</div>');
            redirect('user/login');
        }

    }

    function get_user_profile($id){

        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('md5(user_id)',$id);

        $query = $this->db->get();

        $result = $query->result();
        return $result;
    }

    function edit_user_profile($id){

        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $phone = $this->input->post('phone');
        $user_type = $this->input->post('user');
        $class_name = $this->input->post('class-name');

        if($user_type == 'class finder'){
            $data = array(
               'user_name' => $name,
               'user_email' => $email,
               'user_phone' => $phone,
               'user_type' => $user_type,
               'class_name' => ' '
            );
        }
        else{
            $data = array(
               'user_name' => $name,
               'user_email' => $email,
               'user_phone' => $phone,
               'user_type' => $user_type,
               'class_name' => $class_name
            );
        }
 
        $this->db->where('user_id', $id);
        if($this->db->update('user', $data)){

            $this->db->select('*');
            $this->db->from('class');
            $this->db->where('user_id',$id);

            $query = $this->db->get();

            if(!empty($query)){
                $c_data = array('class_name'=>$class_name);
                $this->db->where('user_id',$id);
                $this->db->update('class',$c_data);
            }

            return true;
        }
        else{
            return false;
        }

    }

}