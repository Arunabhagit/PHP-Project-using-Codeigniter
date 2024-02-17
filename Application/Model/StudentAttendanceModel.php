<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StudentAttendanceModel extends CI_Model {

    public function retrievestudentforAttn() {
	
		$systime = time();
		$currentTimestamp = date('Y-m-d', $systime);
		$dayOfWeek = date('w', $systime);
		$days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
		$dayName = $days[$dayOfWeek];
		$strsubq = $this->db->select("stdid")->from("studentattendance")->where("attendancedate",$currentTimestamp)->get_compiled_select();
		$this->db->select('*');
        	$this->db->from('studentassignment');
 		$this->db->where('day', $dayName);
		$this->db->where('status', 'Active');
		$this->db->where_not_in('stdid',$strsubq,false );
		$this->db->order_by('studentassignment.time', 'asc');
		$query = $this->db->get();
        	return $query->result(); 
	    }
public function savestudentattendance($date,$dayName,$stdid,$stdname,$time,$attns) {
	$attdid = mt_rand(100000,999999);
	$class_data = array(
			'attdid'=>$attdid,
			'stdid'=>$stdid,
			'stdname'=>$stdname,
			'day'=>$dayName,
			'time'=>$time,
			 'attendancedate'=>$date,
			'ispresent'=>$attns);
	return $this->db->insert('studentattendance', $class_data);
	    }


}