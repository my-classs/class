<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Searchmodel extends CI_Model {

	function __construct(){

        parent::__construct();
        $this->load->library(array('session','form_validation'));
        $this->load->database();
        $this->load->helper('url');
        $this->load->model('searchmodel');

    }

    public function get_all_subject(){

    	$this->db->select('*');
    	$this->db->from('subject');
    	$this->db->join('class','class.class_id=subject.course','left');

    	$query = $this->db->get();

    	return $query->result();

    }

    public function search_subject($region, $type, $keyword){

    	$keywords = $this->explodeX(' ', $keyword);

    	$this->db->select('*');
    	$this->db->from('subject');
    	$this->db->join('class','class.class_id=subject.course','left');
        $this->db->like('class_spec',$keyword);
        $this->db->or_like('subject_name',$keyword);
        $this->db->or_like('subject_desc',$keyword);
        $this->db->or_like('class_name',$keyword);
    	foreach($keywords as $key){
            $this->db->or_like('class_spec',$key);
	    	$this->db->or_like('subject_name',$key);
	    	$this->db->or_like('subject_desc',$key);
	    	$this->db->or_like('class_name',$key);
	    }
	    if($type != 0){
	    	$this->db->where('subject.main_id',$type);
	    }
	    if($type != 0){
	    	$this->db->where('class.region',$region);
	    }
    	$query = $this->db->get();

    	return $query->result();

    }

    private function explodeX( $delimiters, $string )
	{
	    return explode($delimiters, $string );
	}

}

?>