<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class teacherController extends CI_Controller {
    public function loadregisterview(){
        $this->load->view('registerteacher_view');
    }

    public function registerteacher()
    {
        $teacherid = mt_rand(100000, 999999);
        $status = "Active";
        $teacher_data = array(
        'teacherid'=> $teacherid,
        'teachername'=> $this->input->post('teachername'),
        'dob'=> $this->input->post('dob'),
        'address' =>$this->input->post('address'),
        'phno'=> $this->input->post('phno'),
        'speciality'=> $this->input->post('speciality'),
        'qualification'=> $this->input->post('qualification'),
        'status' => $status);


    $this->load->model('TeacherModel');
$message = $this->TeacherModel->registerteacher($teacher_data);
$msg = "Teacher Created Successfully with Teacher Id:".strval($teacherid);
$this->load->view('registerteacher_view');

    }
    public function initiateupdateteacher()
    {
        $data['teacher'] = null;
        $this->load->view('Searchteacherforupdate_view',$data);
    }

    public function searchteacherbycid()
    {
        $teacherid=$this->input->post('teacherid');
        $teachername=$this->input->post('teachername');
        $this->load->model('TeacherModel');
        $data['teacher'] = $this->TeacherModel->searchteacherbycid($teacherid,$teachername);
        $this->load->view('Searchteacherforupdate_view',$data);
    }
   public function loadteacherdetails()
   {
        $teacherid=$this->input->post('teacherid');
        $this->load->model('TeacherModel');
        $data['teacher']=$this->TeacherModel->loadteacherdetails($teacherid);
        $this->load->view('updateteacher_view',$data);
   }

    public function updateteacherdetails()
    {
        $teacherid=$this->input->post('teacherid');
        $teachername=$this->input->post('teachername');
        $dob=$this->input->post('dob');
        $address=$this->input->post('address');
        $phno=$this->input->post('phno');
        $speciality=$this->input->post('speciality');
        $qualification=$this->input->post('qualification');
        $status=$this->input->post('status');
        $this->load->model('TeacherModel');
        $data['teacher'] = $this->TeacherModel->updateteacherdetails($teacherid,$teachername,$dob,$address, $phno,$speciality,$qualification,$status);
        $this->load->view('Searchteacherforupdate_view',$data);
    }

    public function initiateteacher_view()
    {
        $data['teacher'] = null;
        $this->load->view('teacher_view',$data);
    }
   
    public function viewteacherbyid()
    {
        $teacherid=$this->input->post('teacherid');
        $teachername=$this->input->post('teachername');
        $this->load->model('TeacherModel');
        $data['teacher'] = $this->TeacherModel->viewteacherbyid($teacherid,$teachername);
        $this->load->view('teacher_view',$data);
    }

    public function loadteacherview()
    {
         $teacherid=$this->input->post('teacherid');
         $this->load->model('TeacherModel');
         $data['teacher']=$this->TeacherModel->loadteacherdetails($teacherid);
         $this->load->view('view_teacheronly',$data);
    }
}
