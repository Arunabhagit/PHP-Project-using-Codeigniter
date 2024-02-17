<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class teacherAttendenceModel extends CI_Model {

    public function retrivetecforattn() {
	
		$systime = time();
		$currentTimestamp = date('Y-m-d', $systime);
		$dayOfWeek = date('w', $systime);
		$days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
		$dayName = $days[$dayOfWeek];
		$strsubq = $this->db->select("teacherid")->from("teacherattendance")->where("attendancedate",$currentTimestamp)->get_compiled_select();
		$this->db->select('*');
        $this->db->from('teacher');
 		$this->db->where('day', $dayName);
		$this->db->where_not_in('teacherid',$strsubq,false );
		$this->db->order_by('teacher.time', 'asc');
		$query = $this->db->get();
        	return $query->result(); 
	    }
public function saveteacherattendence($date,$dayName,$teacherid,$teachername,$time,$attns) {
	$attdid = mt_rand(100000,999999);
	$class_data = array(
			'attdid'=>$attdid,
			'teacherid'=>$teacherid,
			'teachername'=>$teachername,
			'day'=>$dayName,
			'time'=>$time,
			 'attendancedate'=>$date,
			'ispresent'=>$attns);
	return $this->db->insert('teacherattendance', $class_data);
	    }
}