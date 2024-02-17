<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TeacherModel extends CI_Model {

    public function registerteacher($teacher_data) {
	return $this->db->insert('teacher', $teacher_data);
	    }
		public function searchteacherbycid($teacherid,$teachername)
		{
			$this->db->select('*');
			$this->db->from('teacher');
	
			if ($teacherid) {
				$this->db->where('teacherid', $teacherid);
			}
	
			if ($teachername) {
				$this->db->like('teachername', $teachername);
			}
	
			$query = $this->db->get();
			return $query->row();  
		}
	
		public function loadteacherdetails($teacherid)
		{
			$this->db->select('*');
			$this->db->from('teacher');
			$this->db->WHERE('teacherid',$teacherid);
			$query = $this->db->get();
			return $query->row();
		}
	
		public function updateteacherdetails($teacherid,$teachername,$dob,$address, $phno,$speciality,$qualification,$status)
		{
			$this->db->set('teachername',$teachername);
			$this->db->set('dob',$dob);
			$this->db->set('address',$address);
			$this->db->set('phno',$phno);
			$this->db->set('speciality',$speciality);
			$this->db->set('qualification',$qualification);
			$this->db->set('status',$status);
			$this->db->where('teacherid',$teacherid);
			$this->db->update('teacher');
		}
		public function viewteacherbyid($teacherid,$teachername)
		{
			$this->db->select('*');
			$this->db->from('teacher');
	
			if ($teacherid) {
				$this->db->where('teacherid', $teacherid);
			}
	
			if ($teachername) {
				$this->db->like('teachername', $teachername);
			}
	
			$query = $this->db->get();
			return $query->row();  
		}
		public function loadteacherview($teacherid)
		{
			$this->db->select('*');
			$this->db->from('teacher');
			$this->db->WHERE('teacherid',$teacherid);
			$query = $this->db->get();
			return $query->row();
		}
public function loadallteacher()
	{
	$this->db->select("*");
	$this->db->from('teacher');
	$this->db->WHERE('status','Active');
	$query=$this->db->get();
	return $query->result(); 
	}

}