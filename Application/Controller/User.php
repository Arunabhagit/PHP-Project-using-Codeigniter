<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller {
  public function index() {
	$this->load->helper('url');
    $this->load->view('user_login');
  }

  public function createuser(){

$this->load->view('create_user');
}
 public function homepage(){

$this->load->view('home_page');
}

public function login(){

$this->load->view('user_login');
}
public function newlogin(){

$this->load->view('user_login');
}
public function skyline(){
$this->load->view('SKYLINE');
}

public function submituser(){
$this->load->helper('url');
$user_data = array(
'id'=>$this->input->post('id'),
'name' => $this->input->post('name'),
'password'=> $this->input->post('password'),
'phoneno' =>$this->input->post('phoneno'),
'securityqs' => $this->input->post('securityqs'),
'securityanswer'=> $this->input->post('securityanswer'));	
$this->load->model('UserModel');
$message = $this->UserModel->createUser($user_data);
//$data['message'] = "User details saved successfully!";
//$this->load->view('create_user', $data);
$message="User details saved successfully!";
$url=base_url('index.php/user/createuser') . "?param1=" . urlencode($message);
redirect($url);

}

public function authenticateuser(){
$this->load->model('UserModel');
$this->load->library('session');
            $id = $this->input->post('id');
            $password = $this->input->post('password');

            if ($this->UserModel->validateuser($id, $password)) {
                // User credentials are valid, do something (e.g., redirect to dashboard)
                // Replace 'dashboard' with your desired destination after successful login
		$user_data = array(
                'user_id' => $id,
                'password' => $password,
                'logged_in' => TRUE
            );

            $this->session->set_userdata('username',$id);
		

                redirect('index.php/login/redirectToHomepage');
            } else {
                // User credentials are invalid, show login form with an error message
                $data['error'] = 'Invalid userid or password';
                $this->load->view('user_login', $data);
            }
}
public function logout(){
$this->load->library('session');
			
         //removing session data 
         $this->session->unset_userdata('username'); 
$data['error'] = 'Suceessfully Logged out';
         $this->load->view('SKYLINE', $data); 
	

}
}