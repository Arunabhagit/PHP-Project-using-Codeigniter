<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class teacherAttendenceController extends CI_Controller {

public function loadattendanceview(){

	$this->load->model('teacherAttendenceModel');
	$data['tecattn'] = $this->teacherAttendenceModel->retrivetecforattn();
	$currentTimestamp = time();
	$dayOfWeek = date('w', $currentTimestamp);
	$days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
	$dayName = $days[$dayOfWeek];
	$data['sysdate'] = date('Y-m-d',$currentTimestamp);
	$data['day'] = $dayName;
	$this->load->view('teacherAttendence_view', $data);

}

public function saveteacherattendence(){
	$teacherids = $this->input->post('teacherid');
	$teachernames = $this->input->post('teachername');
	$randids = $this->input->post('randid');
	$times = $this->input->post('time');
	$currentTimestamp = time();
	$dayOfWeek = date('w', $currentTimestamp);
	$days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
	$dayName = $days[$dayOfWeek];
	$date = date('Y-m-d',$currentTimestamp);
	$this->load->model('teacherAttendenceModel');
	for ($i = 0; $i < count($randids); $i++)
	 {
		$attns = $this->input->post('attn['.$randids[$i].']');
		if($attns):
			$this->teacherAttendenceModel->saveteacherattendence($date,$dayName,$teacherids[$i],$teachernames[$i],$times[$i],$attns);
		endif;
	}	
	$data['sysdate'] = date('Y-m-d',$currentTimestamp);
	$data['day'] = $dayName;
	$data['tecattn'] = $this->teacherAttendenceModel->retrivetecforattn();
	$this->load->view('teacherAttendence_view', $data);
}	
}
