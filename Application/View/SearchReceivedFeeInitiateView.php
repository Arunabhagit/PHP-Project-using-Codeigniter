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
<form  method="post" action="<?php echo base_url('index.php/StudentFeeController/fetchdailypaidfees'); ?>">

<center><h2>Day wise Received Fees</h2>
</center><br>

<br><br>
<div class="success"><?php echo isset($message) ? $message : ''; ?></div>
<div class="skycontainer">
    <div class="section">
	<label for="paymentdate">Date :</label>
        <input type="date" name="paymentdate" id="paymentdate">
        <input type="submit" name="search" value="Search"></input>
    </form>
<br>



<?php if (!empty($stdfees)): ?>
<label for="paymentdate">Total fee :</label> <?php echo $totalfee; ?>
<table class="table-container" style="margin: 0 auto;border-collapse: collapse; width: 80%;background-color: white;">
	<thead>
            <tr>
                <th style="background-color: #f2f2f2;color: #333;padding: 10px;border: 1px solid #ddd;">Student Name</th>
                <th style="background-color: #f2f2f2;color: #333;padding: 10px;border: 1px solid #ddd;">Course Name</th>
                <th style="background-color: #f2f2f2;color: #333;padding: 10px;border: 1px solid #ddd;">Year</th>
                <th style="background-color: #f2f2f2;color: #333;padding: 10px;border: 1px solid #ddd;">Month</th>
		<th style="background-color: #f2f2f2;color: #333;padding: 10px;border: 1px solid #ddd;">Fee</th>
            </tr></thead><tbody>
            <?php 
	
	foreach ($stdfees as $stdfee):?>
                <tr>
                    <td style="padding: 10px;border: 1px solid #ddd;"><?php echo $stdfee->stdname; ?></td>
                    <td style="padding: 10px;border: 1px solid #ddd;"><?php echo $stdfee->coursename; ?></td>
                    <td style="padding: 10px;border: 1px solid #ddd;"><?php echo $stdfee->year; ?></td>
                    <td style="padding: 10px;border: 1px solid #ddd;"><?php echo $stdfee->month; ?></td>
		    <td style="padding: 10px;border: 1px solid #ddd;"><?php echo $stdfee->feeamount; ?></td>		
                </tr>
            <?php endforeach; ?>
</tbody>
        </table>
<?php else: ?>
        <p>No Payment Recieved.</p>
    <?php endif; ?>
 
</div>
</div>
</div>


</body>
</html>