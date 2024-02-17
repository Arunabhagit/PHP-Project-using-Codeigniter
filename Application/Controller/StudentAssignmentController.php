<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class StudentAssignmentController extends CI_Controller {
  public function __construct() {
    parent::__construct();
    $this->load->helper('auth'); // Load the auth helper
$this->load->library('session');
}

public function assignclass(){
  if($this->session->userdata('username')){
$stdid = $this->input->post('stdid');
$stdname =  $this->input->post('stdname');
$days = $this->input->post('day');
$times = $this->input->post('time');
$courseid = $this->input->post('courseid');
$coursename = $this->input->post('coursename');
$this->load->model('StudentAssignmentModel');

    // Insert the data into the "schedule" table
    for ($i = 0; $i < count($days); $i++) {
      $this->StudentAssignmentModel->assignclass($stdid,$stdname,$courseid,$coursename,$days[$i], $times[$i]);
    }
$data['studentid'] = $this->input->post('stdid');
$data['studentname'] = $this->input->post('stdname');
$data['courseid'] = $this->input->post('courseid');
$data['coursename'] = $this->input->post('coursename');
$this->load->view('StudentFeeView', $data);
}
else
{
  redirect('index.php/user/login');
}
}

public function updateclassassignment(){
  if($this->session->userdata('username')){
$stdid = $this->input->post('stdid');
$stdname =  $this->input->post('stdname');
$days = $this->input->post('day');
$times = $this->input->post('time');
$courseid = $this->input->post('courseid');
$coursename = $this->input->post('coursename');
$assignments = $this->input->post('assignmentid');
$this->load->model('StudentAssignmentModel');

    // Insert the data into the "schedule" table
    for ($i = 0; $i < count($days); $i++) {
      $this->StudentAssignmentModel->updateClassAssignment($assignments[$i],$days[$i], $times[$i]);
    }
$data['student'] = null;
$data['op'] = 'AC';
$data['message'] = "Assignment Updated Successfully";
$this->load->view('StudentDetailsView', $data);
}
else
{
  redirect('index.php/user/login');
}
}

public function getStudentAssignmentRecords(){
  if($this->session->userdata('username')){
	$this->load->model('StudentAssignmentModel');
        $data['records'] = $this->StudentAssignmentModel->getStudentAssignmentRecords();

        $this->load->view('StudentDashBoard_view', $data);
}
else
{
  redirect('index.php/user/login');
}
}

public function assignteacher(){

if($this->session->userdata('username')){
	$this->load->model('StudentAssignmentModel');
	$this->load->model('TeacherModel');
        $data['records'] = $this->StudentAssignmentModel->findunassignedstudents();
	$data['teachers'] = $this->TeacherModel->loadallteacher();

        $this->load->view('TeacheUnAssignedStudentView', $data);
}
else
{
  redirect('index.php/user/login');
}

}
public function saveteacherassignment()
{
  if($this->session->userdata('username')){
    $assignmentid = $this->input->post('assignmentid[]');
    for($i = 0 ; $i<count($assignmentid); $i++)
{
  $teacheridname = $this->input->post('teacherid[]');
$delimiter = "-";
$parts = explode($delimiter, $teacheridname[$i]);
$teacherid = $parts[0];
$teachername= $parts[1];
//request file problem
}
$this->load->view('TeacherUnAssignedStudentView');
}
else

{
  redirect('index.php/user/login');
}
}
}