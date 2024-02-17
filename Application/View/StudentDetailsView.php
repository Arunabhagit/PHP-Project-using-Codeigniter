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
<form  method="post" action="<?php echo base_url('index.php/StudentController/searchstudent'); ?>">

<center><h2>Search Students</h2>
</center><br>

<br><br>
<div class="success"><?php echo isset($message) ? $message : ''; ?></div>
<div class="skycontainer">
    <div class="section">

<label for="student_id">Student ID:</label>
        <input type="text" name="stdid" id="stdid">

        <label for="stdname">Student Name:</label>
        <input type="text" name="stdname" id="stdname">
	<input type="hidden" name="op" value = "<?php echo $op;?>">
        <input type="submit" name="search" value="Search"></input>
    </form>
<br>
<?php if ($op==='CV' && $student!==null): ?>
<form  method="post" action="<?php echo base_url('index.php/CourseController/loadallcourses'); ?>">
        <h2>Student Details</h2>
	<div class="skycontainer">
         <div class="section"><p> <?php echo $student->stdid; ?></p></div>
         <div class="section"><p> <?php echo $student->stdname; ?></p></div>
<div class="section"><p> <?php echo $student->phoneno; ?></p></div>
<input type="hidden" name = "stdid" value="<?php echo $student->stdid;?>"></input>
<input type = "hidden" name="stdname" value = "<?php echo $student->stdname; ?>"></input>
	<div class="section"><input type="submit" name="submit" value="Set Course"></input></div>
</div>
</form>
        <!-- Add more summary details as needed -->
    <?php endif; ?>
 
<?php if ($op==='RS' && $student!==null): ?>
<form  method="post" action="<?php echo base_url('index.php/StudentController/removestudent'); ?>">
        <h2>Student Details</h2>
	<div class="container">
         <div class="section"><p> <?php echo $student->stdid; ?></p></div>
         <div class="section"><p> <?php echo $student->stdname; ?></p></div>
<div class="section"><p> <?php echo $student->phoneno; ?></p></div>
<input type="hidden" name = "stdid" value="<?php echo $student->stdid;?>"></input>
<input type = "hidden" name="stdname" value = "<?php echo $student->stdname; ?>"></input>
	<div class="section"><input type="submit" name="submit" value="Deactivate"></input></div>
</div>
</form>
        <!-- Add more summary details as needed -->
    <?php endif; ?>

<?php if ($op==='AS' && $student!==null): ?>
<form  method="post" action="<?php echo base_url('index.php/StudentController/activatestudent'); ?>">
        <h2>Student Details</h2>
	<div class="container">
         <div class="section"><p> <?php echo $student->stdid; ?></p></div>
         <div class="section"><p> <?php echo $student->stdname; ?></p></div>
<div class="section"><p> <?php echo $student->phoneno; ?></p></div>
<input type="hidden" name = "stdid" value="<?php echo $student->stdid;?>"></input>
<input type = "hidden" name="stdname" value = "<?php echo $student->stdname; ?>"></input>
	<div class="section"><input type="submit" name="submit" value="Activate"></input></div>
</div>
</form>
        <!-- Add more summary details as needed -->
    <?php endif; ?>

<?php if ($op==='AC' && $student!==null): ?>


<?php if (!empty($courses)): ?>
<table class="table-container" style="margin: 0 auto;border-collapse: collapse; width: 80%;background-color: white;">
	<thead>
            <tr>
                <th style="background-color: #f2f2f2;color: #333;padding: 10px;border: 1px solid #ddd;">Student ID</th>
                <th style="background-color: #f2f2f2;color: #333;padding: 10px;border: 1px solid #ddd;">Student Name</th>
                <th style="background-color: #f2f2f2;color: #333;padding: 10px;border: 1px solid #ddd;">Course ID</th>
                <th style="background-color: #f2f2f2;color: #333;padding: 10px;border: 1px solid #ddd;">Course Name</th>
		<th style="background-color: #f2f2f2;color: #333;padding: 10px;border: 1px solid #ddd;">Time</th>
		           </tr></thead><tbody>
            <?php 
	
	foreach ($courses as $onecourse):?>
                <tr><form  method="post" action="<?php echo base_url('index.php/StudentController/loadstudentscheduleview'); ?>">
<input type="hidden" name = "courseid" value="<?php echo $onecourse->courseid;?>"></input>
		<input type="hidden" name = "coursename" value="<?php echo $onecourse->coursename;?>"></input>
<input type="hidden" name = "stdid" value="<?php echo $student->stdid;?>"></input>
		<input type="hidden" name = "stdname" value="<?php echo $student->stdname;?>"></input>
                    <td style="padding: 10px;border: 1px solid #ddd;"><?php echo $student->stdid; ?></td>
                    <td style="padding: 10px;border: 1px solid #ddd;"><?php echo $student->stdname; ?></td>
                    <td style="padding: 10px;border: 1px solid #ddd;"><?php echo $onecourse->courseid; ?></td>
                    <td style="padding: 10px;border: 1px solid #ddd;"><?php echo $onecourse->coursename; ?></td>
		<td style="padding: 10px;border: 1px solid #ddd;"><input type="submit" name="submit" value="Set"></input></td>
		</form>
                </tr>
            <?php endforeach; ?>
</tbody>
        </table>
<?php else: ?>
<p>No Course Assigned to the Student. Please assign course first then assign class.</p>
    <?php endif; ?>

   <!-- Add more summary details as needed -->
    <?php endif; ?>
</div>
</div>


</div>
</body>
</html>