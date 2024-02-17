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
<body bgcolor="#EBF5FB">
<?php include 'header.html';?>
<div class="skybody">
<div class = "maincontainer">
  <h2>User Registration</h2>
  <!--<div class="success"><?php echo isset($message) ? $message : ''; ?></div>-->
<div class="success"><?php 
	$param1= $_GET['param1'] ?? '';
	echo $param1; ?></div>
  <form method="post" action="<?php echo base_url('index.php/User/submituser'); ?>">
    <label for="id">User ID:</label>
    <input type="text" id="id" name="id" required><br><br>
    
    <label for="name">Username:</label>
    <input type="text" id="name" name="name" required><br><br>
    
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br><br>
    
    <label for="phoneno">Phone Number:</label>
    <input type="text" id="phoneno" name="phoneno" required><br><br>
    
    <label for="securityqs">Security Question:</label>
    <select id="securityqs" name="securityqs" required>
      <option value="">Select a Security Question</option>
      <option value="question1">What is your Favourite Colour?</option>
      <option value="question2">What is your Favourite Food?</option>
      <option value="question3">What is your childhood name?</option>
    </select><br><br>
    
    <label for="securityanswer">Security Answer:</label>
    <input type="text" id="securityanswer" name="securityanswer" required><br><br>
    
    <input type="submit" value="Create"><button onclick="exit()">Exit</button>
	<p><a href="<?php echo base_url('index.php/login/redirectToLogin'); ?>">Log In</a></p>
  </form>
  
  </div>
  </div>
  <script>
    function exit() {
      // Perform any exit logic here
      alert("Exiting the page");
    }
  </script>
</body>
</html>