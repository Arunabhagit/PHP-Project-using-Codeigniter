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
<form  method="post" action="<?php echo base_url('index.php/StudentAssignmentController/saveteacherassignment'); ?>">

<center><h2>Teacher Assignment Details </h2>
</center><br>

<br><br>
<div class="success"><?php echo isset($message) ? $message : ''; ?></div>


    <?php if (!empty($records)): ?>
<table class="table-container" style="margin: 0 auto;border-collapse: collapse; width: 80%;background-color: white;">
	<thead>
            <tr>
                <th style="background-color: #f2f2f2;color: #333;padding: 10px;border: 1px solid #ddd;">Student ID</th>
                <th style="background-color: #f2f2f2;color: #333;padding: 10px;border: 1px solid #ddd;">Student name</th>
                <th style="background-color: #f2f2f2;color: #333;padding: 10px;border: 1px solid #ddd;">Day</th>
                <th style="background-color: #f2f2f2;color: #333;padding: 10px;border: 1px solid #ddd;">Time</th>
		<th style="background-color: #f2f2f2;color: #333;padding: 10px;border: 1px solid #ddd;">Course</th>
		<th style="background-color: #f2f2f2;color: #333;padding: 10px;border: 1px solid #ddd;">Teacher Name</th>
            </tr></thead><tbody>
            <?php 
	
	foreach ($records as $record):
?>
                <tr>
                    <td style="padding: 10px;border: 1px solid #ddd;"><?php echo $record->stdid; ?></td>
                    <td style="padding: 10px;border: 1px solid #ddd;"><?php echo $record->stdname; ?></td>
<td style="padding: 10px;border: 1px solid #ddd;"><?php echo $record->day; ?></td>
<td style="padding: 10px;border: 1px solid #ddd;"><?php echo $record->time; ?></td>
<td style="padding: 10px;border: 1px solid #ddd;"><?php echo $record->coursename; ?></td>
<td style="padding: 10px;border: 1px solid #ddd;"> <select id="teacherselect" name="teacherid[]">
            <?php foreach ($teachers as $teacher) { ?>
                <option value="<?php echo $teacher->teacherid."-".$teacher->teachername; ?>"><?php echo $teacher->teachername; ?></option>
            <?php } ?>
        </select></td>
                    
<input type="hidden" name= "assignmentid[]" value="<?php echo $record->assignmentid;?>" >

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