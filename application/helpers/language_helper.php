<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if(!function_exists('get_Lan')){
    function get_Lan($my="",$eng=""){

    	$CI =& get_instance();
    	$CI->load->library('session');
    	$lan = $CI->session->lan;

        if($lan == 1){
            $language = $my;
        }
        else{
            $language = $eng;
        }

        return $language;
    }
}


