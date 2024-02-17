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

  <link href="<?php echo base_url('public/template/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('public/template/vendor/animate.css/animate.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('public/template/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('public/template/vendor/bootstrap-icons/bootstrap-icons.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('public/template/vendor/boxicons/css/boxicons.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('public/template/vendor/glightbox/css/glightbox.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('public/template/vendor/remixicon/remixicon.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('public/template/vendor/swiper/swiper-bundle.min.css'); ?>" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url('public/css/skylinestyles.css'); ?>">

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
<body bgcolor="#E5E8E8">
<?php include 'header.html';?> 
<br>
<div class="skybody">
<div class = "maincontainer">
  <center><h2>Log in</h2></center>
  <?php echo isset($error) ? $error : ''; ?>
  <form method="post" action="<?php echo base_url('index.php/User/authenticateuser'); ?>">
    <label for="password">Current Password:</label>
    <input type="password" id="password" name="password" required><br><br>
    
    <label for="password">New Password:</label>
    <input type="password" id="password" name="password" required><br><br>

    <label for="password">Confirm Password:</label>
    <input type="password" id="password" name="password" required><br><br>
    
    <center><input type="submit" value="Login">
<button onclick="exit()">Exit</button></center>
  </form>
  
  
  
  <center><p><a href="<?php echo base_url('index.php/login/redirectToCreateUser'); ?>">Create New User</a>
  
  <a href="reset_password.html">Reset Password</a></p></center>
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