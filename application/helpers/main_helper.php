<?php defined('BASEPATH') OR exit('No direct script access allowed');

if ( ! function_exists('slug_url'))
{
    function slug_url($str = '')
    {
        $string = trim($str);
        $string = strtolower($string);
        $string = htmlspecialchars($string);

        $slug = str_replace(" ", "-", $string);

        echo $slug;

    }   
}

if ( ! function_exists('unslug'))
{
    function unslug($str = '')
    {
        $string = trim($str);
        $string = htmlspecialchars($string);

        $string = str_replace("-", " ", $string);
        $slug = ucfirst($string);

        echo $slug;

    }   
}

if(!function_exists('show_time')){

    function show_time($time){

        $val = strtotime($time);

        return date("l jS \of F Y",$val);

    }

}

if(!function_exists('get_class_subject')){

    function get_class_subject($id){

        $CI =& get_instance();
        $CI->load->database();

        $sql = "select * from subject where course = ".$id;
        $query = $CI->db->query($sql);

        return $query->result();

    }

}