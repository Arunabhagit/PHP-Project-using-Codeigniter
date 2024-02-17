<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class StudentFeeController extends CI_Controller {

public function __construct() {
        parent::__construct();
        $this->load->helper('auth'); // Load the auth helper
	$this->load->library('session');
    }


public function loadstudentfeeview(){
  if($this->session->userdata('username')){
$data['studentid'] = $this->input->post('stdid');
$data['studentname'] = $this->input->post('stdname');
$data['courseid'] = $this->input->post('courseid');
$data['coursename'] = $this->input->post('coursename');
$this->load->view('StudentFeeView',$data);

}
else
{
  redirect('index.php/user/login');
}
}

public function loadinitiateduepayment(){
  if($this->session->userdata('username')){
$data['studentfee']=null;
$this->load->view('InitiateDuePaymentView',$data);

}
else
{
  redirect('index.php/user/login');
}
}


public function makepayment(){
 if($this->session->userdata('username')){
$stdid = $this->input->post('stdid');
$stdname =  $this->input->post('stdname');
$courseid = $this->input->post('courseid');
$coursename = $this->input->post('coursename');
$paymentdate = $this->input->post('paymentdate');
$years = $this->input->post('year');
$months = $this->input->post('month');
$feeamounts = $this->input->post('feeamount');
$feetypes = $this->input->post('feetype');
$type= $this->input->post('type');
$this->load->model('StudentFeeModel');
$this->StudentFeeModel->updateoldpayments($stdid);
for ($i = 0; $i < count($years); $i++) {
      $this->StudentFeeModel->insertpayment($stdid,$stdname,$courseid,$coursename,$paymentdate,$years[$i], $months[$i],$feeamounts[$i],$feetypes[$i]);
    }

$data['studentid'] = $this->input->post('stdid');
$data['studentname'] = $this->input->post('stdname');
$data['courseid'] = $this->input->post('courseid');
$data['coursename'] = $this->input->post('coursename');
if($type=='CS')
{
$data['message'] = "Student ".$stdname." Registered Succesfully with Student id ".$stdid." in course ".$coursename;
$this->load->view('registerstudent_view', $data);
}
else{
$data['student'] = null;
$data['message'] = "Amount Paid Successfully";
$this->load->view('InitiatePaymentView', $data);
}
}
else
{
  redirect('index.php/user/login');
}
}

public function verifystudentforpay(){
  if($this->session->userdata('username')){
$this->load->model('StudentFeeModel');
$stdid = $this->input->post('stdid');
$stdname = $this->input->post('stdname');
 $data['studentid'] = $stdid;
 $data['studentname']  = $stdname;
        $data['student'] = $this->StudentFeeModel->verifystudentforpay($stdid,$stdname);
        $this->load->view('InitiatePaymentView', $data);
}
else
{
   redirect('index.php/user/login');
}
}

public function fetchlastpayments(){
  if($this->session->userdata('username')){
$this->load->model('StudentFeeModel');
$feetype = $this->input->post('feetype');
$data['studentfee'] = $this->StudentFeeModel->fetchLastPaymentsMonthly($feetype);
$this->load->view('InitiateDuePaymentView', $data);
  }
else
{
  redirect('index.php/user/login');
}
}

public function searchreceivedfees(){
  if($this->session->userdata('username')){
$data['stdfees']=null;
$this->load->view('SearchReceivedFeeInitiateView',$data);
}
else
{
  redirect('index.php/user/login');
}
}

public function fetchdailypaidfees(){
  if($this->session->userdata('username')){
$paymentdate = $this->input->post('paymentdate');
$this->load->model('StudentFeeModel');
$data['stdfees'] = $this->StudentFeeModel->fecthdailypaidfees($paymentdate);
$data['totalfee'] = $this->StudentFeeModel->fecthdailytotalfees($paymentdate);
$this->load->view('SearchReceivedFeeInitiateView',$data);
}
else
{
  redirect('index.php/user/login');
}
}
}