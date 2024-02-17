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
<div class = "maincontainer">
<form  method="post" action="<?php echo base_url('index.php/teacherController/updateteacherdetails'); ?>">

<center><h2>Teacher Registration Form</h2>
</center><br>

<?php echo isset($message) ? $message : ''; ?>

<br><br>
<div class="container">
    <div class="section">
    <input type="hidden"  name= "teacherid" value="<?php echo $teacher->teacherid; ?>"  >
<label id="teachername">Teacher Name:</label><input type="text"  name= "teachername" value="<?php echo $teacher->teachername; ?>" required ><br><br>
<label id="dob">DOB:</label><input type="text"  name= "dob" value="<?php echo $teacher->dob; ?>" required><br><br>
<label id="address">Address:</label><input type="text" name="address" value="<?php echo $teacher->address; ?>" required><br><br></div>

 
  <div class="section">
  <label id="phno">Phone No:</label><input type="text"  name= "phno" value="<?php echo $teacher->phno; ?>" required><br><br>
  <label id="speciality">Speciality:</label><input type="text"  name= "speciality" value="<?php echo $teacher->speciality; ?>" required><br><br>
  <label id="qualification">Qualification:</label><input type="text"  name= "qualification" value="<?php echo $teacher->qualification; ?>" required><br><br>
  <label id="status">Status:</label><input type="text"  name= "status" value="<?php echo $teacher->status; ?>" required><br><br>

</div>
</div>

<center> 
<input type="submit" onclick="fun1()" value="UPDATE">
</center>
</form>
</div>
</body>
 </html>