<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StudentModel extends CI_Model {

    public function registerstudent($student_data) {
	return $this->db->insert('student', $student_data);
	    }

public function getStudentDetails($stdid,$stdname){

	$this->db->select('*');
        $this->db->from('student');

        if ($stdid) {
            $this->db->where('stdid', $stdid);
        }

        if ($stdname) {
            $this->db->like('stdname', $stdname);
        }

        $query = $this->db->get();
        return $query->row();

}
public function getActiveStudentDetails($stdid,$stdname){

	$this->db->select('*');
        $this->db->from('student');

        if ($stdid) {
            $this->db->where('stdid', $stdid);
        }
	$this->db->where('status', 'Active');
        if ($stdname) {
            $this->db->like('stdname', $stdname);
        }

        $query = $this->db->get();
        return $query->row();

}
public function getInactiveStudentDetails($stdid,$stdname){

	$this->db->select('*');
        $this->db->from('student');

        if ($stdid) {
            $this->db->where('stdid', $stdid);
        }
	$this->db->where('status', 'Inactive');
        if ($stdname) {
            $this->db->like('stdname', $stdname);
        }

        $query = $this->db->get();
        return $query->row();

}
 public function updatestudent($stdid,$data) {
	
	$this->db->where('stdid', $stdid);
        $this->db->update('student', $data);
	    }

}