<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StudentAssignmentModel extends CI_Model {

    public function assignclass($stdid,$stdname,$courseid,$coursename,$day, $time) {
	$assignmentid = mt_rand(100000,999999);
	$this->db->select('sequence');
        $this->db->from('slots');
	$this->db->where('day', $day);
	$this->db->where('time', $time);
        $query = $this->db->get();
	$timeseqarray = array("7:30 am"=>1,"10:00 am"=>2,"11:30 am"=>3,"1:30 pm"=>4,"3:00 pm"=> 5,"4:30 pm"=>6,"6:00 pm"=>7,"7:30 pm"=>8);
     if ($query->num_rows() > 0) {   
		$row = $query->row();
		$timseq =$row->sequence;
	}
	$class_data = array(
			'assignmentid'=>$assignmentid,
			'stdid'=>$stdid,
			'stdname'=>$stdname,
			'day'=>$day,
			'time'=>$time,
			 'courseid'=>$courseid,
			'coursename'=>$coursename,
			'status'=>'Active',
			'timeseq'=>$timseq);
	return $this->db->insert('studentassignment', $class_data);
	    }


 public function updateClassAssignment($assignmentid,$day, $time) {
	
	$data = array(
			'day'=>$day,
			'time'=>$time,
			 );
	 $this->db->where('assignmentid', $assignmentid);
        $this->db->update('studentassignment', $data);
	    }

public function getStudentAssignmentDetails($stdid){
$this->db->select('*');
        $this->db->from('studentassignment');
	$this->db->where('stdid', $stdid);
        $query = $this->db->get();
        return $query->result();


}
public function getStudentAssignmentByCourse($stdid,$courseid){
$this->db->select('*');
        $this->db->from('studentassignment');
	$this->db->where('stdid', $stdid);
	$this->db->where('courseid', $courseid);
        $query = $this->db->get();
        return $query->result();


}

public function getStudentAssignmentRecords(){
$this->db->select('*');
$this->db->from('studentassignment');
$this->db->where('status', 'Active');
$this->db->order_by('studentassignment.timeseq', 'asc');	
$query = $this->db->get();
        return $query->result_array();

}
public function updatecourseofassignment($stdid,$oldcourseid,$courseid,$coursename){
	$data['courseid']=$courseid;
	$data['coursename']=$coursename;
	$this->db->where('stdid', $stdid);
	$this->db->where('courseid', $oldcourseid);
        $this->db->update('studentassignment', $data);
}
public function updateAssignmentStatus($stdid,$data) {
	
	$this->db->where('stdid', $stdid);
        $this->db->update('studentassignment', $data);
	    }
public function updateAssignmentStatusbycourse($stdid,$courseid,$data) {
	
	$this->db->where('stdid', $stdid);
$this->db->where('courseid', $courseid);
        $this->db->update('studentassignment', $data);
	    }

public function findunassignedstudents(){
$this->db->select('*');
$this->db->from('studentassignment');
$this->db->where('status', 'Active');
$this->db->where('teacherid');
$this->db->order_by('studentassignment.timeseq', 'asc');	
$query = $this->db->get();
 return $query->result();
}

public function saveteacherassingment($teacherid,$assingmentid)
{
	$this->db->update('studentassignment');
	$this->db->set('teacherid',$teacherid);
	$this->db->where('assignmentid',$assignmentid);
	$query = $this->db->get();
	return $query->result();

}
}