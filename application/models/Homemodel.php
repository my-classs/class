<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Homemodel extends CI_Model {

	function __construct(){
        parent::__construct();
        $this->load->helper('url');
    }

	function get_class(){

		$this->db->select('*');
		$this->db->from('class');
		$this->db->join('main_cat','main_cat.id = class.main_cat','left');

		$query = $this->db->get();

		return $query->result();

	}

}