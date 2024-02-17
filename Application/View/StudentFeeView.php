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
<h2>Fee Payment</h2>
<form id="scheduleForm" action="<?php echo base_url('index.php/StudentFeeController/makepayment'); ?>" method="post">
<label for="studentid">Student ID:</label>
	<input type="text" name= "stdiddis" value="<?php echo $studentid;?>" disabled>
<input type="hidden" name= "stdid" value="<?php echo $studentid;?>">
<label for="studentname">Student Name:</label>
	<input type="text" name= "stdnamedis" value="<?php echo $studentname;?>" disabled>
<input type="hidden" name= "stdname" value="<?php echo $studentname;?>">
<input type="hidden" name= "courseid" value="<?php echo $courseid;?>">
<input type="hidden" name= "coursename" value="<?php echo $coursename;?>">
<label for="courseid">Course ID:</label>
	<input type="text" name= "courseiddis" value="<?php echo $courseid;?>" disabled>
<label for="coursename">Course Name:</label>
	<input type="text" name= "coursenamedis" value="<?php echo $coursename;?>" disabled>
<label for="paymentdate">Payment Date:</label>
	<input type="date" name= "paymentdate">
<div id="fieldContainer">
<div>
	<div  class ="skycontainer">
    <div class="section">
<label for="year">Year:</label>
	<input type="text" name= "year[]">
<label for="month">Month:</label>
        
	<select id="month" name="month[]">
	<option value="January">January</option>
<option value="February">February</option>
<option value="March">March</option>
<option value="April">April</option>
<option value="May">May</option>
<option value="June">June</option>
<option value="July">July</option>
<option value="August">August</option>
<option value="September">September</option>
<option value="October">October</option>
<option value="November">November</option>
<option value="December">December</option>
</select>
</div>
<div class="section">
<label for="feeamount">Amount:</label>
	<input type="text" name= "feeamount[]">
<label for="feetype">Type of Fee:</label>
<select id="feetype" name="feetype[]">
	<option value="Monthly">Monthly</option>
<option value="Fixed">Fixed</option>
</select></div></div>
<button type="button" onclick="removeField(this)">Remove</button>

      </div>
    </div>
    
    <button type="button" onclick="addField()">Add Month</button>
    <input type="submit" value="Submit">
</form>

  <script>
    function addField() {
      var container = document.getElementById("fieldContainer");
      var newField = document.createElement("div");

      newField.innerHTML = `
        <div  class ="skycontainer"><div class="section">
	<label for="year">Year:</label>
	<input type="text" name= "year[]">
<label for="month">Month:</label>
        
	<select id="month" name="month[]">
	<option value="January">January</option>
<option value="February">February</option>
<option value="March">March</option>
<option value="April">April</option>
<option value="May">May</option>
<option value="June">June</option>
<option value="July">July</option>
<option value="August">August</option>
<option value="September">September</option>
<option value="October">October</option>
<option value="November">November</option>
<option value="December">December</option>
</select>
</div>
<div class="section">
<label for="feeamount">Amount:</label>
	<input type="text" name= "feeamount[]">
<label for="feetype">Type of Fee:</label>
<select id="feetype" name="feetype[]">
	<option value="Monthly">Monthly</option>
<option value="Fixed">Fixed</option>
</select>
	</div></div>
        <button type="button" onclick="removeField(this)">Remove</button>
      `;

      container.appendChild(newField);
    }

    function removeField(button) {
      var container = document.getElementById("fieldContainer");
      container.removeChild(button.parentNode);
    }
  </script>

</div></div>
</body>
</html>