<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
class Dashboard extends Admin_Controller
{

  function __construct()
  {

    parent::__construct();
    $this->load->helper(array('form','url'));
    $this->load->library(array('session', 'form_validation'));
    $this->load->model('adminmodel');

  }
 
  public function index()
  {
    $this->load->view('admin/login');

  }

  public function home(){

    if($_SESSION['login-data']){
      $this->load->view('admin/home');
    }
    else{
      $this->session->set_flashdata('login-msg','<div class="alert alert-danger text-center">You must first Login !</div>');
      redirect('admin-panel06/login');
    }
    
  }
  
  public function login(){

    //set rules
    $this->form_validation->set_rules('email','Email','trim|required|valid_email');
    $this->form_validation->set_rules('password','Passwrod','required');

    if($this->form_validation->run() == false){

      $this->index();

    }
    else{

      if($this->adminmodel->login() == true){

        redirect('admin-panel06');

      }
      else{

        $this->session->set_flashdata('login-msg','<div class="alert alert-danger text-center">Your user name and password do no match !</div>');
        redirect('admin-panel06/login');

      }

    }

  }

  public function logout(){

    session_destroy();
    unset($_SESSION['login-data']);

    redirect('admin-panel06/login');

  }

}

 