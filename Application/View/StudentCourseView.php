<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SKYLINE EDUCATION</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url('public/template/img/favicon.png'); ?>" rel="icon">
  <link href="<?php echo base_url('public/template/img/apple-touch-icon.png'); ?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url('public/css/skylinestyles.css'); ?>">
  <link href="<?php echo base_url('public/template/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('public/template/vendor/animate.css/animate.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('public/template/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('public/template/vendor/bootstrap-icons/bootstrap-icons.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('public/template/vendor/boxicons/css/boxicons.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('public/template/vendor/glightbox/css/glightbox.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('public/template/vendor/remixicon/remixicon.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('public/template/vendor/swiper/swiper-bundle.min.css'); ?>" rel="stylesheet">



  <!-- Template Main CSS File -->
  <link href="<?php echo base_url('public/template/css/style.css'); ?>" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medilab
  * Updated: Aug 30 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body>
<?php include 'skyheader.html';?> 
<div class="skybody">
<div class = "maincontainer">
<?php echo isset($message) ? $message : ''; ?>
<!-- Added on 21-08-2023 -->
<?php if (!empty($studentcourses)): ?>
<h2>Assigned Courses</h2>
<table class="table-container" style="margin: 0 auto;border-collapse: collapse; width: 80%;background-color: white;">
	<thead>
            <tr>
                <th style="background-color: #f2f2f2;color: #333;padding: 10px;border: 1px solid #ddd;">Student ID</th>
                <th style="background-color: #f2f2f2;color: #333;padding: 10px;border: 1px solid #ddd;">Course ID</th>
                <th style="background-color: #f2f2f2;color: #333;padding: 10px;border: 1px solid #ddd;">Course Name</th>
		<th style="background-color: #f2f2f2;color: #333;padding: 10px;border: 1px solid #ddd;">Update</th>
		           </tr></thead><tbody>
            <?php 
	
	foreach ($studentcourses as $onecourse):?>
                <tr><form  method="post" action="<?php echo base_url('index.php/CourseController/setcourse'); ?>">
<input type="hidden" name = "courseid" value="<?php echo $onecourse->courseid;?>"></input>
<input type="hidden" name = "coursename" value="<?php echo $onecourse->coursename;?>"></input>
<input type="hidden" name = "stdid" value="<?php echo $onecourse->stdid;?>"></input>
<input type="hidden" name = "stdname" value="<?php echo $studentname;?>"></input>
<input type="hidden" name = "status" value="<?php echo $onecourse->status;?>"></input>
<input type="hidden" name = "coursefee" value="<?php echo $onecourse->coursefee;?>"></input>
<input type="hidden" name = "coursetype" value="<?php echo $onecourse->coursetype;?>"></input>
                    <td style="padding: 10px;border: 1px solid #ddd;"><?php echo $onecourse->stdid; ?></td>
                    <td style="padding: 10px;border: 1px solid #ddd;"><?php echo $onecourse->courseid; ?></td>
                    <td style="padding: 10px;border: 1px solid #ddd;"><?php echo $onecourse->coursename; ?></td>
		<td style="padding: 10px;border: 1px solid #ddd;"><input type="submit" name="submit" value="Update"></input></td>
		</form>
                </tr>
            <?php endforeach; ?>
</tbody>
        </table>
<?php else: ?>
<p>No Course Assigned to the Student. Please assign course first then assign class.</p>
    <?php endif; ?>
<!-- Added on 21-08-2023 -->

    <h2>Assign New Course to Student</h2>
    <form method="post" action="<?php echo base_url('index.php/StudentController/assigncoursetostudent'); ?>">
	<label for="studentid">Student ID:</label>
	<input type="text" name= "stdiddis" value="<?php echo $studentid;?>" disabled>
<input type="hidden" name= "stdid" value="<?php echo $studentid;?>">
<label for="studentname">Student Name:</label>
	<input type="text" name= "stdname" value="<?php echo $studentname;?>" disabled>
<input type="hidden" name= "studentname" value="<?php echo $studentname;?>">
        <label for="courseSelect">Select a Course:</label>
        <select id="courseSelect" name="courseidname">
            <?php foreach ($courses as $course) { ?>
                <option value="<?php echo $course->courseid."-".$course->coursename; ?>"><?php echo $course->coursename; ?></option>
            <?php } ?>
        </select>
	
	<label for="coursefee">Course Fee:</label>
	<input type="text" name= "coursefee">
<label for="admissionfee">Admission Fee:</label>
	<input type="text" name= "admissionfee">
<label for="admissiondate">Admission Date:</label>
	<input type="date" name= "admissiondate">
<label for="coursetype">Type of Course:</label>
	<select id="coursetype" name="coursetype">
		<option value = "Fixed">Fixed</option>
		<option value = "Monthly">Monthly</option>
	</select>
<center> 
<input type="submit" value="Assign">
<input type="reset" name="reset" value="Reset">
</center>
    </form>
</div></div>
</body>
</html>