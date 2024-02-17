<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StudentFeeModel extends CI_Model {

    public function insertpayment($stdid,$stdname,$courseid,$coursename,$paymentdate,$year, $month,$feeamount,$feetype) {
	$txnid = mt_rand(100000,999999);
	$islastpayment = 'Y';
	$fee_data = array(
			'txnid'=>$txnid,
			'stdid'=>$stdid,
			'stdname'=>$stdname,
			'year'=>$year,
			'month'=>$month,
			'paymentdate'=>$paymentdate,
			'feeamount'=>$feeamount,
			'feetype'=>$feetype,
			 'courseid'=>$courseid,
			'coursename'=>$coursename,
			'islastpayment'=>$islastpayment);
	return $this->db->insert('studentfee', $fee_data);
	    }

public function updateoldpayments($stdid){
	$islastpayment = 'N';
	$data = array(
        'islastpayment' => $islastpayment
    );
    $this->db->where('stdid', $stdid);
    $this->db->update('studentfee', $data);
	
}

public function verifystudentforpay($stdid,$stdname){

	$this->db->select('*');
        $this->db->from('student');
	 if ($stdid) {
            $this->db->where('student.stdid', $stdid);
        }

        if ($stdname) {
            $this->db->like('stdname', $stdname);
        }
 $this->db->join('studentcourse', 'studentcourse.stdid = student.stdid');
$query = $this->db->get();
        return $query->row();

}
public function fetchLastPaymentsMonthly($feetype){

$islast = 'Y';
	
$this->db->select('*');
        $this->db->from('studentfee');
	 $this->db->where('studentfee.feetype', $feetype);
        $this->db->where('studentfee.islastpayment', $islast);
 $this->db->join('student', 'student.stdid = studentfee.stdid');
$this->db->order_by('student.stdname', 'asc');
$query = $this->db->get();
        if ($query->num_rows() > 0) {
        $rows = $query->result();
        return $rows;
    } else {
        return array(); // Return an empty array if no records found
    }

}
public function getStudentPaymentDetails($stdid){
$this->db->select('*');
        $this->db->from('studentfee');
	$this->db->where('stdid', $stdid);
        $query = $this->db->get();
        return $query->result();


}

public function updatecourseoffee($stdid,$oldcourseid,$courseid,$coursename){
	$data['courseid']=$courseid;
	$data['coursename']=$coursename;
	$this->db->where('stdid', $stdid);
	$this->db->where('courseid', $oldcourseid);
        $this->db->update('studentfee', $data);
}

public function fecthdailypaidfees($paymentdate){
	$this->db->select('*');
	 $this->db->from('studentfee');
	$this->db->where('paymentdate', $paymentdate);
	$query = $this->db->get();
        return $query->result();
}
public function fecthdailytotalfees($paymentdate){
	$this->db->select_sum('feeamount');
	 $this->db->from('studentfee');
	$this->db->where('paymentdate', $paymentdate);
	$query = $this->db->get();
        return $query->row()->feeamount;
}
}