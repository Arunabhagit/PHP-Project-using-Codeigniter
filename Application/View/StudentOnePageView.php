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
<!--<form  method="post" action="<?php echo base_url('index.php/StudentController/searchstudentdetails'); ?>">-->

<center><h2>Student Details </h2>
</center><br>

<br><br>
<div class="success"><?php echo isset($message) ? $message : ''; ?></div>
<div class="skycontainer">
   <div class="section">
<label id="nam">Student Id:</label><input type="text" name= "stdid" value="<?php echo $student->stdid;?>" disabled><br><br>
<label id="nam">Student Name:</label><input type="text" name= "stdname" value="<?php echo $student->stdname;?>" disabled><br><br>
<label id="f">Father Name:</label><input type="text"  name= "fathername" value="<?php echo $student->fathername;?>" disabled><br><br>
<label id="m">Mother Name:</label><input type="text"  name= "mothername" value="<?php echo $student->mothername;?>" disabled><br><br>
<label id="e">Email Id:</label><input type="text"  name= "email" value="<?php echo $student->email;?>" disabled><br><br>
<label id="p">Phone Number:</label><input type="text"  name= "phoneno" value="<?php echo $student->phoneno;?>" disabled><br><br></div>


 <div class="section">
<label for="birthday">Date Of Birth:</label><input type="date" id="birthday" name="dob" value="<?php echo $student->dob;?>" disabled><br><br>
  <label for="E">Gender:</label>  <input type="text"  name= "gender" value="<?php echo $student->gender;?>" disabled><br><br>
<label id="h">Present Address:</label><input type="text" name="address" value="<?php echo $student->address;?>" disabled><br><br>
<label id="c">Institution Name:</label><input type="text" name="school" value="<?php echo $student->school;?>" disabled><br><br>
<label for="S">Class:</label><input type="text" name="school" value="<?php echo $student->class;?>" disabled><br><br>
 <label id="L">Last Qualification:</label><input type="text" name="qualification" value="<?php echo $student->qualification;?>" disabled><br><br>
</div>
</div>
<h2 align = "center">Course Details</h2>
    <?php if (!empty($course)): ?>
<table class="table-container" style="margin: 0 auto;border-collapse: collapse; width: 80%;background-color: white;">
	<thead>
            <tr>
                <!--<th style="background-color: #f2f2f2;color: #333;padding: 10px;border: 1px solid #ddd;">Course ID</th>-->
                <th style="background-color: #f2f2f2;color: #333;padding: 10px;border: 1px solid #ddd;">Course Name</th>
                <th style="background-color: #f2f2f2;color: #333;padding: 10px;border: 1px solid #ddd;">Course Fee</th>
                <th style="background-color: #f2f2f2;color: #333;padding: 10px;border: 1px solid #ddd;">Course Type</th>
		<th style="background-color: #f2f2f2;color: #333;padding: 10px;border: 1px solid #ddd;">Admission Fee</th>
		<th style="background-color: #f2f2f2;color: #333;padding: 10px;border: 1px solid #ddd;">Admission Date</th>
		<th style="background-color: #f2f2f2;color: #333;padding: 10px;border: 1px solid #ddd;">Status</th>
		<th style="background-color: #f2f2f2;color: #333;padding: 10px;border: 1px solid #ddd;">Update</th>
            </tr></thead><tbody>
            <?php 
	
	foreach ($course as $onecourse):?>
                <tr><form  method="post" action="<?php echo base_url('index.php/StudentController/updatecoursestate'); ?>">
			<input type="hidden" name = "courseid" value="<?php echo $onecourse->courseid;?>"></input>
<input type="hidden" name = "stdid" value="<?php echo $onecourse->stdid;?>"></input>
<input type="hidden" name = "status" value="<?php echo $onecourse->status;?>"></input>
                    <!--<td style="padding: 10px;border: 1px solid #ddd;"><?php echo $onecourse->courseid; ?></td>-->
                    <td style="padding: 10px;border: 1px solid #ddd;"><?php echo $onecourse->coursename; ?></td>
                    <td style="padding: 10px;border: 1px solid #ddd;"><?php echo $onecourse->coursefee; ?></td>
                    <td style="padding: 10px;border: 1px solid #ddd;"><?php echo $onecourse->coursetype; ?></td>
		<td style="padding: 10px;border: 1px solid #ddd;"><?php echo $onecourse->admissionfee; ?></td>
		<td id="highlight" style="padding: 10px;border: 1px solid #ddd;"><?php echo $onecourse->admissiondate; ?></td>
		<td style="padding: 10px;border: 1px solid #ddd;"><?php echo $onecourse->status; ?></td>
		<?php if ($onecourse->status=='Active'): ?>
			<td style="padding: 10px;border: 1px solid #ddd;"><input type="submit" name="hold" value="Hold"></input></td>
			<?php else: ?>
			<td style="padding: 10px;border: 1px solid #ddd;"><input type="submit" name="Activate" value="Activate"></input></td>
		<?php endif; ?>
</form>
                </tr>
            <?php endforeach; ?>
</tbody>
        </table>
<?php else: ?>
        <p>No Course found.</p>
    <?php endif; ?>

<h2 align = "center">Student Assignment Details</h2>
    <?php if (!empty($assignment)): ?>
<table class="table-container" style="margin: 0 auto;border-collapse: collapse; width: 80%;background-color: white;">
	<thead>
            <tr>
                <th style="background-color: #f2f2f2;color: #333;padding: 10px;border: 1px solid #ddd;">Assignment ID</th>
		<th style="background-color: #f2f2f2;color: #333;padding: 10px;border: 1px solid #ddd;">Course</th>
                <th style="background-color: #f2f2f2;color: #333;padding: 10px;border: 1px solid #ddd;">Day</th>
                <th style="background-color: #f2f2f2;color: #333;padding: 10px;border: 1px solid #ddd;">Time</th>
                <th style="background-color: #f2f2f2;color: #333;padding: 10px;border: 1px solid #ddd;">Teacher ID</th>
		<th style="background-color: #f2f2f2;color: #333;padding: 10px;border: 1px solid #ddd;">Status</th>
<th style="background-color: #f2f2f2;color: #333;padding: 10px;border: 1px solid #ddd;">Update</th>
		           </tr></thead><tbody>
            <?php 
	
	foreach ($assignment as $oneassignment):?>
                <tr><form  method="post" action="<?php echo base_url('index.php/StudentController/updateassignmentstate'); ?>">
			<input type="hidden" name = "courseid" value="<?php echo $oneassignment->courseid;?>"></input>
<input type="hidden" name = "stdid" value="<?php echo $oneassignment->stdid;?>"></input>
<input type="hidden" name = "status" value="<?php echo $oneassignment->status;?>"></input>
                    <td style="padding: 10px;border: 1px solid #ddd;"><?php echo $oneassignment->assignmentid; ?></td>
			<td style="padding: 10px;border: 1px solid #ddd;"><?php echo $oneassignment->coursename; ?></td>
                    <td style="padding: 10px;border: 1px solid #ddd;"><?php echo $oneassignment->day; ?></td>
                    <td style="padding: 10px;border: 1px solid #ddd;"><?php echo $oneassignment->time; ?></td>
                    <td style="padding: 10px;border: 1px solid #ddd;"><?php echo $oneassignment->teacherid; ?></td>
		<td style="padding: 10px;border: 1px solid #ddd;"><?php echo $oneassignment->status; ?></td>
		<?php if ($oneassignment->status=='Active'): ?>
			<td style="padding: 10px;border: 1px solid #ddd;"><input type="submit" name="hold" value="Hold"></input></td>
			<?php else: ?>
			<td style="padding: 10px;border: 1px solid #ddd;"><input type="submit" name="hold" value="Activate"></input></td>
		<?php endif; ?></form>
                </tr>
            <?php endforeach; ?>
</tbody>
        </table>
<?php else: ?>
        <p>No Assignement found.</p>
    <?php endif; ?>

<h2 align = "center">Student Payment Details</h2>
    <?php if (!empty($fee)): ?>
<table class="table-container" style="margin: 0 auto;border-collapse: collapse; width: 80%;background-color: white;">
	<thead>
            <tr>
                <th style="background-color: #f2f2f2;color: #333;padding: 10px;border: 1px solid #ddd;">Transaction ID</th>
		<th style="background-color: #f2f2f2;color: #333;padding: 10px;border: 1px solid #ddd;">Course</th>
                <th style="background-color: #f2f2f2;color: #333;padding: 10px;border: 1px solid #ddd;">Year</th>
                <th style="background-color: #f2f2f2;color: #333;padding: 10px;border: 1px solid #ddd;">Month</th>
                <th style="background-color: #f2f2f2;color: #333;padding: 10px;border: 1px solid #ddd;">Fee Amount</th>
		<th style="background-color: #f2f2f2;color: #333;padding: 10px;border: 1px solid #ddd;">Fee Type</th>
		<th style="background-color: #f2f2f2;color: #333;padding: 10px;border: 1px solid #ddd;">Payment date</th>
		           </tr></thead><tbody>
            <?php 
	
	foreach ($fee as $onefee):?>
                <tr>
                    <td style="padding: 10px;border: 1px solid #ddd;"><?php echo $onefee->txnid; ?></td>
		    <td style="padding: 10px;border: 1px solid #ddd;"><?php echo $onefee->coursename; ?></td>
                    <td style="padding: 10px;border: 1px solid #ddd;"><?php echo $onefee->year; ?></td>
                    <td style="padding: 10px;border: 1px solid #ddd;"><?php echo $onefee->month; ?></td>
                    <td style="padding: 10px;border: 1px solid #ddd;"><?php echo $onefee->feeamount; ?></td>
		<td style="padding: 10px;border: 1px solid #ddd;"><?php echo $onefee->feetype; ?></td>
		<td style="padding: 10px;border: 1px solid #ddd;"><?php echo $onefee->paymentdate; ?></td>
                </tr>
            <?php endforeach; ?>
</tbody>
        </table>
<?php else: ?>
        <p>No Payment found.</p>
    <?php endif; ?>
</form>
</div>

</div>

</body>
</html>