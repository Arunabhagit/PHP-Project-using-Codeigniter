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
<?php include 'skyheader.html';?>
<div class = "maincontainer">
  <h2>Search Teacher</h2>
  <?php echo isset($error) ? $error : ''; ?>
  <form method="post" action="<?php echo base_url('index.php/teacherController/searchteacherbycid'); ?>">
    <label for="teacherid">Teacher Id:</label>
    <input type="text" id="teacherid" name="teacherid"  ><br><br>
    
    <label for="teachername">Teacher Name:</label>
    <input type="text" id="teachername" name="teachername"  ><br><br>
    
    <center><input type="submit" value="Search">

<button onclick="exit()">Exit</button></center>
  </form>
  </div>

<?php if ($teacher): ?>
<form  method="post" action="<?php echo base_url('index.php/teacherController/loadteacherdetails'); ?>">
        <h2>Teacher Details</h2>
<div class="container">
         <div class="section"><p> <?php echo $teacher->teacherid; ?></p></div>
         <div class="section"><p> <?php echo $teacher->teachername; ?></p></div>
<input type="hidden" name = "teacherid" value="<?php echo $teacher->teacherid;?>"></input>

<div class="section"><input type="submit" name="submit" value="update"></input></div>
</div>
</form>
        <!-- Add more summary details as needed -->
    <?php endif; ?>

  <script>
    function exit() {
      // Perform any exit logic here
      alert("Exiting the page");
    }
  </script>
</body>
</html>