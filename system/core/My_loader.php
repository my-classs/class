<?php  if (! defined('BASEPATH')) exit('No direct script access allowed');


class MY_Loader extends CI_Loader
{
    //overides existing view function    
    function view($view, $vars = array(), $return = FALSE)
    {
        $CI =& get_instance();

        $CI->load->library("user_agent");

        if($CI->agent->is_mobile()){
            $view = 'mobile/'.$view;
        }

        return $this->_ci_load(array('_ci_view' => $view, '_ci_vars' => $this->_ci_object_to_array($vars), '_ci_return' => $return));
    }
}  

?>