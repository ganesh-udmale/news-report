<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Users Controller
 *
 * @author Team TechArise
 *
 * @email info@techarise.com
 */
   
    public function __construct() {
        parent::__construct();        
        $this->load->library('form_validation');
        $this->load->model('Users_model', 'user');
        $this->load->model('news_model');
        $this->load->helper('url_helper');
    }
  // Dashboard
  public function index()
  {
    if ($this->session->userdata('is_authenticated') == FALSE) {
            redirect('users/login'); // the user is not logged in, redirect them!
        } else {
      $data['title'] = 'Dashboard - Tech Arise';
          $data['metaDescription'] = 'Dashboard';
          $data['metaKeywords'] = 'Dashboard';
          $this->user->setUserID($this->session->userdata('user_id'));
          $data['userInfo'] = $this->user->getUserInfo();
          $this->load->view('users/dashboard', $data);
      }
  }
        // Login
  public function login()
  {
  $data['title'] = 'Login - Tech Arise';
        $data['metaDescription'] = 'Login';
        $data['metaKeywords'] = 'Login';
        $this->load->view('templates/header');
        $this->load->view('login/login', $data);
        $this->load->view('templates/footer');
        
  }
  // Login Action 
  function doLogin() {
    // Check form  validation   

    $this->form_validation->set_rules('email', 'Your Email', 'trim|required|valid_email');
    $this->form_validation->set_rules('password', 'Password', 'trim|required');

    if($this->form_validation->run() === FALSE) {
      //Field validation failed.  User redirected to login page
      $this->load->view('templates/header');
      $this->load->view('login/login');
      $this->load->view('templates/footer');      
    } else {  
      $sessArray = array();
      //Field validation succeeded.  Validate against database
      $email = $this->input->post('email');
      $password = $this->input->post('password');

      $this->user->setEmail($email);
      $this->user->setPassword(MD5($password));

      //query the database
      $result = $this->user->login();
      
      if($result) {
        foreach($result as $row) {
          $sessArray = array(
            'user_id' => $row->user_id,
            'name' => $row->name,
            'email' => $row->email,
            'is_authenticated' => TRUE,
          );
        $this->session->set_userdata($sessArray);
        }
        $data['news'] = $this->news_model->get_news();
        $data['title'] = 'News archive';
 
        // echo '<pre>';print_r($data);die; 
        $this->load->view('templates/header');
        $this->load->view('news/index', $data);
        $this->load->view('templates/footer');
      } else {
        redirect('login?msg=1'); //changed
      } 
    }
  }
  // Logout
  public function logout() {
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('name');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('is_authenticated');
        $this->session->sess_destroy();
        $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
        $this->output->set_header("Pragma: no-cache");
        // echo 'here'; die;
        redirect('login');
        // redirect(base_url('login/login'));
    }
}
?>