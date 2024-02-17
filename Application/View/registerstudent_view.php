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
<form  method="post" action="<?php echo base_url('index.php/StudentController/registerstudent'); ?>">

<center><h2>Student Registration Form</h2>
</center>


 <?php echo isset($message) ? $message : ''; ?>
<br>
<div class="skycontainer">
    <div class="section">
<label id="nam">Student Name:</label><input type="text" name= "stdname" required><br><br>
<label id="f">Father Name:</label><input type="text"  name= "fathername" required><br><br>
<label id="m">Mother Name:</label><input type="text"  name= "mothername" required><br><br>
<label id="e">Email Id:</label><input type="text"  name= "email" required><br><br>
<label id="p">Phone Number:</label><input type="text"  name= "phoneno" required><br><br>


<label for="birthday">Date Of Birth:</label>
  <input type="date" id="birthday" name="dob" required><br><br></div>
 <div class="section">
  <label for="E">Gender:</label>
  <select  id="edu"  name="gender" required>
   <option value="edu"></option>
   <option>Male</option>
   <option>Female</option>
   <option>Others</option>
   </select><br><br>


<label id="h">Present Address:</label><input type="text" name="address" required><br><br>
<label id="c">Institution Name:</label><input type="text" name="school"><br><br>
<input type="hidden" id="type" name="type" value="CS"></input>

<label for="S">Class:</label>
  <select  id="ed"  name="class">
   <option value="ed"></option>
   <option>I</option>
   <option>II</option>
 <option>III</option>
<option>IV</option>
<option>V</option>
<option>VI</option>
<option>VII</option>
<option>VIII</option>
<option>IX</option>
<option>X</option>
<option>XI</option>
<option>XII</option>
<option>Graduation</option>
<option>Others</option>
    
 </select>
  <br><br>



  <!--<label for="E">Course Name:-</label>
  <select id="e"  name="coursename" required>
   <option value="e"></option>
   <option>B.Tech</option>
   <option>M.Tech</option>
   
 </select>
  <br><br>-->

<label id="L">Last Qualification:</label><input type="text" name="qualification" required><br><br>


  </div>
  </div>
<center> 
<input type="submit" onclick="fun1()" value="Submit">
<input type="reset" name="reset" value="Reset">
</center>

</form>
</div>
</div>
</body>
</html>




