<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('get_main_cat'))
{
    function get_main_cat()
    {
    	$CI =& get_instance();
        $CI->load->database();
    	
        $sql = "select * from main_cat"; 
        $query = $CI->db->query($sql);

        return $query->result();

    }   
}

if( ! function_exists('get_main_id')){

    function get_main_id($sub){

        $CI =& get_instance();
        $CI->load->database();

        $sql = "select * from sub_cat where sub_id = ".$sub." limit 1";
        $query = $CI->db->query($sql);

        foreach($query->result() as $result){

            $id = $result->main_cat;

        }

        return $id;

    }

}

if ( ! function_exists('get_sub_cat'))
{
    function get_sub_cat()
    {
    	$CI =& get_instance();
        $CI->load->database();
    	
        $sql = "select * from sub_cat"; 
        $query = $CI->db->query($sql);

        return $query->result();

    }   
}

if(!function_exists('get_sub_by_main')){

	function get_sub_by_main($mainid){

		$CI =& get_instance();
		$CI->load->database();

		$sql = "select * from sub_cat where main_cat = ".$mainid;
		$query = $CI->db->query($sql);

		return $query->result();

	}

}

if(!function_exists('get_main_name')){

	function get_main_name($id){

		$CI =& get_instance();
		$CI->load->database();

		$sql = "select * from main_cat where id = ".$id;
		$query = $CI->db->query($sql);

		return $query->result();

	}

}

if(!function_exists('get_sub_name')){

    function get_sub_name($id){

        $CI =& get_instance();
        $CI->load->database();

        $sql = "select * from sub_cat where sub_id = ".$id." limit 1";
        $query = $CI->db->query($sql);

        return $query->result();

    }

}

if(!function_exists('get_subject')){

    function get_subject($id){

        $CI =& get_instance();
        $CI->load->database();

        $sql = "select * from subj_cat where main_id = ".$id;
        $query = $CI->db->query($sql);

        return $query->result();

    }

}

if(!function_exists('get_subject_by_sub')){

    function get_subject_by_sub($id){

        $CI =& get_instance();
        $CI->load->database();

        $sql = "select * from subj_cat where sub_id = ".$id;
        $query = $CI->db->query($sql);

        return $query->result();

    }

}

if(!function_exists('get_sub_by_subj')){

    function get_sub_by_subj($id){
        $CI =& get_instance();
        $CI->load->database();

        $sql = "select * from subj_cat where subj_id = ".$id." limit 1";
        $query = $CI->db->query($sql);

        $row = $query->result();

        foreach($row as $subj){
            $id = $subj->sub_id;
        }

        return $id;
    }

}

if(!function_exists('get_sub_by_subject')){

    function get_sub_by_subject($id){
        $CI =& get_instance();
        $CI->load->database();

        $sql = "select * from subject where id = ".$id." limit 1";
        $query = $CI->db->query($sql);

        $row = $query->result();

        foreach($row as $subj){
            $id = $subj->sub_id;
        }

        return $id;
    }

}

if(!function_exists('get_main_id')){

    function get_main_id($name){

        $val = str_replace('-', ' ', $name);
        $value = ucfirst($val);

        $CI =& get_instance();
        $CI->load->database();

        $sql = "select * from main_cat where cat_name_en = '".$value."'";
        $query = $CI->db->query($sql);

        $row = $query->result();

        foreach($row as $catid){
            $id = $catid->id;
        }

        return $id;

    }

}
if(!function_exists('get_classname_by_userid')){
    function get_classname_by_userid($id){
        $CI =& get_instance();
        $CI->load->database();

        $sql = "select * from class where user_id = '".$id."'";
        $query = $CI->db->query($sql);

        $row = $query->result();

        foreach($row as $name){
            $class_name = $name->class_name;
        }

        return $class_name;
    }
}

if (!function_exists('get_class_name')) {
    # code...
    function get_class_name($id){
        $CI =& get_instance();
        $CI->load->database();

        $sql = "select * from class where class_id = '".$id."'";
        $query = $query->result();

        foreach($row as $name){
            $class = $name->class_name;
        }

        return $class;
    }
}


if ( ! function_exists('get_region'))
{
    function get_region()
    {
        $CI =& get_instance();
        $CI->load->database();
        
        $sql = "select * from region"; 
        $query = $CI->db->query($sql);

        return $query->result();

    }   
}