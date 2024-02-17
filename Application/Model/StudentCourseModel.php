<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StudentCourseModel extends CI_Model {

    public function assigncourse($course_data) {
	return $this->db->insert('studentcourse', $course_data);
	    }

	public function getCourseDetails($stdid){
	$this->db->select('*');
        $this->db->from('studentcourse');
	$this->db->where('stdid', $stdid);
        $query = $this->db->get();
        return $query->result();

}

public function updatecoursedetails($stdid,$courseid,$data){

$this->db->where('stdid', $stdid);
$this->db->where('courseid', $courseid);
        $this->db->update('studentcourse', $data);

}
public function updatecoursestatus($stdid,$data){

$this->db->where('stdid', $stdid);
        $this->db->update('studentcourse', $data);

}

}