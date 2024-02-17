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
  <h2>Schedule Class</h2>
  
  <form id="scheduleForm" action="<?php echo base_url('index.php/StudentAssignmentController/assignclass'); ?>" method="post">
<label for="studentid">Student ID:</label>
	<input type="text" name= "stdiddis" value="<?php echo $studentid;?>" disabled>
<input type="hidden" name= "stdid" value="<?php echo $studentid;?>">
<label for="studentname">Student Name:</label>
	<input type="text" name= "stdnamedis" value="<?php echo $studentname;?>" disabled>
<input type="hidden" name= "stdname" value="<?php echo $studentname;?>">
<input type="hidden" name= "courseid" value="<?php echo $courseid;?>">
<input type="hidden" name= "coursename" value="<?php echo $coursename;?>">

 
<div id="fieldContainer">
<div>
	<div  class ="skycontainer">
    <div class="section">
      <!-- Initial fields for day and time -->
      
        <label for="day">Day:</label>
        <!--<input type="text" name="day[]" required>-->
	<select id="day" name="day[]">
	<option value="Sunday">Sunday</option>
<option value="Monday">Monday</option>
<option value="Tuesday">Tuesday</option>
<option value="Wednesday">Wednesday</option>
<option value="Thursday">Thursday</option>
<option value="Friday">Friday</option>
<option value="Saturday">Saturday</option>
</select>
        </div>
 <div class="section">
        <label for="time">Time:</label>
        <!--<input type="text" name="time[]" required>-->
        <select id="time" name="time[]">
	<option value="7:30 am">7:30 am</option>
<option value="10:00 am">10:00 am</option>
<option value="11:30 am">11:30 am</option>
<option value="3:00 pm">3:00 pm</option>
<option value="4:30 pm">4:30 pm</option>
<option value="6:00 pm">6:00 pm</option>
<option value="7:30 pm">7:30 pm</option>
</select>
</div>
 <div class="section">
<label for="teacher">Teacher Name:</label>
	<input type="text" name= "teachername[]"></div>
</div>

        <button type="button" onclick="removeField(this)">Remove</button>

      </div>
    </div>
    
    <button type="button" onclick="addField()">Add New Slot</button>
    <input type="submit" value="Submit">
  </form>

  <script>
    function addField() {
      var container = document.getElementById("fieldContainer");
      var newField = document.createElement("div");

      newField.innerHTML = `
        <div  class ="skycontainer"><div class="section"><label for="day">Day:</label>
        <!--<input type="text" name="day[]" required>-->
	<select id="day" name="day[]">
	<option value="Sunday">Sunday</option>
<option value="Monday">Monday</option>
<option value="Tuesday">Tuesday</option>
<option value="Wednesday">Wednesday</option>
<option value="Thursday">Thursday</option>
<option value="Friday">Friday</option>
<option value="Saturday">Saturday</option>
</select></div>
 <div class="section">
        <label for="time">Time:</label>
        <!--<input type="text" name="time[]" required>-->
	<select id="time" name="time[]">
	<option value="7:30 am">7:30 am</option>
<option value="10:00 am">10:00 am</option>
<option value="11:30 am">11:30 am</option>
<option value="3:00 pm">3:00 pm</option>
<option value="4:30 pm">4:30 pm</option>
<option value="6:00 pm">6:00 pm</option>
<option value="7:30 pm">7:30 pm</option>
</select></div> <div class="section">
<label for="teacher">Teacher Name:</label>
	<input type="text" name= "teachername[]"></div></div>
        <button type="button" onclick="removeField(this)">Remove</button>
      `;

      container.appendChild(newField);
    }

    function removeField(button) {
      var container = document.getElementById("fieldContainer");
      container.removeChild(button.parentNode);
    }
  </script>
</div>
</div>
</body>
</html>