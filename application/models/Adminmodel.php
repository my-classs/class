<?php
	class Adminmodel extends CI_Model {

		function __construct(){

	        parent::__construct();
	        $this->load->helper('url');
	        $this->load->library('session');

	    }

		function login(){

			$email = $this->input->post('email');
            $password = $this->input->post('password');
		
			$sql = "SELECT * FROM admin_user WHERE email = '$email' AND password = '$password' ";
			$query = $this->db->query($sql);

			$row = $query->row();

			if($row > 0){

				$result = $query->result();
				foreach($result as $userdata){
					$uid = 1;
					//$this->session->set_userdata('login-data',$uid);
					/*$this->session->set_userdata(array(
                            'id'       => $userdata->id,
                            'email'      => $userdata->email,
                            'status'       => $userdata->status
                    ));*/
                    $_SESSION['login-data'] = $uid;
				}

				return true;

			}
			else{

				return false;
			}
		}

		public function add_main_cat(){

			$cat_mm = $this->input->post('cat_name');
			$cat_en = $this->input->post('cat_name_en');

			$data = array(
				'cat_name' => $cat_mm,
				'cat_name_en' => $cat_en
				);

			if($this->db->insert('main_cat',$data)){

				return true;

			}
			else{

				return false;

			}

		}

		public function edit_main_cat($id){

			$cat_mm = $this->input->post('cat_name');
			$cat_en = $this->input->post('cat_name_en');

			$data = array(
				'cat_name' => $cat_mm,
				'cat_name_en' => $cat_en
				);

 
			$this->db->where('id', $id);

			if($this->db->update('main_cat', $data)){

				return true;

			}
			else{

				return false;

			}

		}

		public function add_sub_cat(){

			$cat_mm = $this->input->post('sub_name');
			$cat_en = $this->input->post('sub_name_en');
			$main_cat = $this->input->post('main_cat');

			$data = array(
				'sub_name' => $cat_mm,
				'sub_name_en' => $cat_en,
				'main_cat' => $main_cat
				);

			if($this->db->insert('sub_cat',$data)){

				return true;

			}
			else{

				return false;

			}

		}

		public function edit_sub_cat($id){

			$sub_mm = $this->input->post('sub_name');
			$sub_en = $this->input->post('sub_name_en');
			$main_cat = $this->input->post('main_cat');

			$data = array(
				'sub_name' => $sub_mm,
				'sub_name_en' => $sub_en,
				'main_cat' => $main_cat
				);

 
			$this->db->where('sub_id', $id);

			if($this->db->update('sub_cat', $data)){

				return true;

			}
			else{

				return false;

			}

		}

	}
?>