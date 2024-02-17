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
<form  method="post" action="<?php echo base_url('index.php/StudentAttendanceController/savestudentattendance'); ?>">

<center><h2>Student Attendance Details </h2>
</center><br>

<br><br>
<div class="success"><?php echo isset($message) ? $message : ''; ?></div>
<div class="skycontainer">
   <div class="section">
	<label id="date">Current Date:</label><input type="date" name= "date" value="<?php echo $sysdate;?>" disabled><br><br>

</div>
<div class="section">
<label id="day">Current Day:</label><input type="text" name= "day" value="<?php echo $day;?>" disabled><br><br>
</div>
</div>
<h2 align = "center">Attendance Details</h2>
    <?php if (!empty($stdattn)): ?>
<table class="table-container" style="margin: 0 auto;border-collapse: collapse; width: 80%;background-color: white;">
	<thead>
            <tr>
                <th style="background-color: #f2f2f2;color: #333;padding: 10px;border: 1px solid #ddd;">Time Slot</th>
                <th style="background-color: #f2f2f2;color: #333;padding: 10px;border: 1px solid #ddd;">Student name</th>
                <th style="background-color: #f2f2f2;color: #333;padding: 10px;border: 1px solid #ddd;">Present</th>
                <th style="background-color: #f2f2f2;color: #333;padding: 10px;border: 1px solid #ddd;">Absent</th>
            </tr></thead><tbody>
            <?php 
	
	foreach ($stdattn as $onestdattn):
$randid = mt_rand(1,100);?>
                <tr>
                    <td style="padding: 10px;border: 1px solid #ddd;"><?php echo $onestdattn->time; ?></td>
                    <td style="padding: 10px;border: 1px solid #ddd;"><?php echo $onestdattn->stdname; ?></td>
                    <td style="padding: 10px;border: 1px solid #ddd;"><input type="radio" name= "attn[<?php echo $randid?>]" value="P"></td>
                    <td style="padding: 10px;border: 1px solid #ddd;"><input type="radio" name= "attn[<?php echo $randid?>]" value="A"></td>
<input type="hidden" name= "randid[]" value="<?php echo $randid;?>" >
<input type="hidden" name= "time[]" value="<?php echo $onestdattn->time;?>" >
<input type="hidden" name= "stdname[]" value="<?php echo $onestdattn->stdname;?>" >
<input type="hidden" name= "stdid[]" value="<?php echo $onestdattn->stdid;?>" >		
                </tr>
            <?php endforeach; ?>
</tbody>
        </table>
<input type="submit" value="Save">
<?php else: ?>
        <p>No Pending Attendance.</p>
    <?php endif; ?>
</form>
</div>

</div>

</body>
</html>