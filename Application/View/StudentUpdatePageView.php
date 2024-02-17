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
<body bgcolor = "#EBF5FB">
<?php include 'skyheader.html';?>
<div class="skybody">
<div class = "maincontainer">
<form  method="post" action="<?php echo base_url('index.php/StudentController/updatestudentdetails'); ?>">

<center><h2>Update Student Details </h2>
</center><br>

<br><br>
<div class="success"><?php echo isset($message) ? $message : ''; ?></div>
<div class="skycontainer">
   <div class="section">
<input type="hidden" name= "stdid" value="<?php echo $student->stdid;?>" >
<label id="nam">Student Name:</label><input type="text" name= "stdname" value="<?php echo $student->stdname;?>" ><br><br>
<label id="f">Father Name:</label><input type="text"  name= "fathername" value="<?php echo $student->fathername;?>" ><br><br>
<label id="m">Mother Name:</label><input type="text"  name= "mothername" value="<?php echo $student->mothername;?>" ><br><br>
<label id="e">Email Id:</label><input type="text"  name= "email" value="<?php echo $student->email;?>" ><br><br>
<label id="p">Phone Number:</label><input type="text"  name= "phoneno" value="<?php echo $student->phoneno;?>" ><br><br>
<label id="p">Student Status:</label><select id="status" name="status">
					<option value= "Active">Active</option>
					<option value= "On-Hold">On-Hold</option> 
					<option value= "Inactive">Inactive</option></select>
</div>


 <div class="section">
<label for="birthday">Date Of Birth:</label><input type="date" id="birthday" name="dob" value="<?php echo $student->dob;?>" ><br><br>
  <label for="E">Gender:</label>  <input type="text"  name= "gender" value="<?php echo $student->gender;?>" ><br><br>
<label id="h">Present Address:</label><input type="text" name="address" value="<?php echo $student->address;?>" ><br><br>
<label id="c">Institution Name:</label><input type="text" name="school" value="<?php echo $student->school;?>" ><br><br>
<label for="S">Class:</label><input type="text" name="class" value="<?php echo $student->class;?>" ><br><br>
 <label id="L">Last Qualification:</label><input type="text" name="qualification" value="<?php echo $student->qualification;?>" > <br><br>
</div>
</div>
<input type="submit" name="submit" value="Update"></input>
</form>

</div>

</div>

</body>
</html>