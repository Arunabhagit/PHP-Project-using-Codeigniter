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
<div class="maindashboardcontainer">
    <h1 align="center">Student Records</h1>

    <table class="table-container" style="margin: 0 auto;border-collapse: collapse; width: 80%;background-color: white;">
        <tr>
            <th>Day / Time</th>
            <?php
            //$times = array(); // Collect unique times
            //foreach ($records as $record) {
               // $times[$record['time']] = 1;
            //}
		$times=array("7:30 am"=>"7:30 am","10:00 am"=>"10:00 am","11:30 am"=>"11:30 am","1:30 pm"=>"1:30 pm","3:00 pm"=>"3:00 pm","4:30 pm"=>"4:30 pm","6:00 pm"=>"6:00 pm","7:30 pm"=>"7:30 pm");
            foreach ($times as $time => $_): ?>
                <th><?php echo $time; ?></th>
            <?php endforeach; ?>
        </tr>
        <?php
        //$days = array(); // Collect unique days
        //foreach ($records as $record) {
            //$days[$record['day']] = 1;
        //}
	$days=array("Sunday"=>"Sunday","Monday"=>"Monday","Tuesday"=>"Tuesday","Wednesday"=>"Wednesday","Thursday"=>"Thursday","Friday"=>"Friday","Saturday"=>"Saturday");
        foreach ($days as $day => $_): ?>
            <tr>
                <td><?php echo $day; ?></td>
                <?php foreach ($times as $time => $_): ?>
                    <td>
                        <?php
                        $students = array();
			$count=1;
                        foreach ($records as $record) {
                            if ($record['day'] == $day && $record['time'] == $time) {
                                $students[] = $record['stdname'];
                            }
                        }
			$separator=" , ";
                        echo implode($separator, $students);
			$count=$count+1;
                        ?>
                    </td>
                <?php endforeach; ?>
            </tr>
        <?php endforeach; ?>
    </table>
</div></div>
</body>
</html>






