<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
  public function index() {
$this->load->helper('url');
    $this->load->view('user_login');
  }
  public function redirectToCreateUser(){
$this->load->helper('url');
redirect('index.php/user/createuser');
}

public function redirectToHomepage(){
redirect('index.php/user/homepage');
}
public function redirectToLogin(){
redirect('index.php/user/login');
}
}