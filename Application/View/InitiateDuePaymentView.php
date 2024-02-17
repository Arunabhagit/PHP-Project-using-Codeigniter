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
<form  method="post" action="<?php echo base_url('index.php/StudentFeeController/fetchlastpayments'); ?>">

<center><h2>Last Payment Report</h2>
</center><br>

<br><br>
<div class="success"><?php echo isset($message) ? $message : ''; ?></div>
<div class="skycontainer">
    <div class="section">
<select id="feetype" name="feetype">
		<option value = "Fixed">Fixed</option>
		<option value = "Monthly">Monthly</option>
	</select>



</div>
</div>
<input type="submit" value="Last Paid List"></form>
</div>
 <h2 align = "center">Search Results</h2>
    <?php if (!empty($studentfee)): ?>
        <table  id="mytable" class="table-container" style="margin: 0 auto;border-collapse: collapse; width: 80%;background-color: white;">
	<thead>
            <tr>
                <th style="background-color: #f2f2f2;color: #333;padding: 10px;border: 1px solid #ddd;">Student ID</th>
                <th style="background-color: #f2f2f2;color: #333;padding: 10px;border: 1px solid #ddd;">Student Name</th>
                <th style="background-color: #f2f2f2;color: #333;padding: 10px;border: 1px solid #ddd;">Phone</th>
                <th style="background-color: #f2f2f2;color: #333;padding: 10px;border: 1px solid #ddd;">Course Name</th>
		<th style="background-color: #f2f2f2;color: #333;padding: 10px;border: 1px solid #ddd;">Year</th>
		<th style="background-color: #f2f2f2;color: #333;padding: 10px;border: 1px solid #ddd;">Month</th>
		<th style="background-color: #f2f2f2;color: #333;padding: 10px;border: 1px solid #ddd;">Fee Amount</th>
            </tr></thead><tbody>
            <?php 
	
	foreach ($studentfee as $studentfe):
$rowid = mt_rand(1000, 9999); ?>
                <tr id="<?php echo $rowid; ?>">
                    <td style="padding: 10px;border: 1px solid #ddd;"><?php echo $studentfe->stdid; ?></td>
                    <td style="padding: 10px;border: 1px solid #ddd;"><?php echo $studentfe->stdname; ?></td>
                    <td style="padding: 10px;border: 1px solid #ddd;"><?php echo $studentfe->phoneno; ?></td>
                    <td style="padding: 10px;border: 1px solid #ddd;"><?php echo $studentfe->coursename; ?></td>
		<td style="padding: 10px;border: 1px solid #ddd;"><?php echo $studentfe->year; ?></td>
		<td id="highlight" style="padding: 10px;border: 1px solid #ddd;"><?php echo $studentfe->month; ?></td>
		<td style="padding: 10px;border: 1px solid #ddd;"><?php echo $studentfe->feeamount; ?></td>
                </tr>
            <?php endforeach; ?>
</tbody>
        </table>
    <?php else: ?>
        <p>No students found.</p>
    <?php endif; ?>
</div>
<script>
    let len = document.getElementById("mytable").rows.length;
    let arr = [];
    let arr2 = [];
    for (let i = 1; i < len; i++) {
        na = document.getElementById("mytable").rows[i].cells[5].innerHTML;
        na2 = document.getElementById("mytable").rows[i].cells[4].innerHTML;
        arr[i] = na.toLowerCase();
        arr2[i] = parseInt(na2);
    }
    //console.log(typeof (arr2[3]));
    let map = { "january": 1, "february": 2, "march": 3, "april": 4, "may": 5, "june": 6, "july": 7, "august": 8, "september": 9, "october": 10, "november": 11, "december": 12 };
    const month = ["january", "february", "march", "april", "may", "june", "july", "august", "september", "october", "november", "december"];
    const d = new Date();
    let name = month[d.getMonth()];
    let year = d.getFullYear();
    let curr_year = parseInt(year);
    //console.log(typeof (curr_year));
    for (let i = 1; i < arr.length; i++) {
        let table_month = map[arr[i]];
        let table_month_text = arr[i];
        let table_year = arr2[i];
        let curr_month = map[name];
        let curr_month_text = name;
        console.log(curr_month);
        console.log(table_month);
        if (Math.abs(curr_month - table_month) >= 2 && (curr_year == table_year)) {
            console.log(Math.abs(curr_month - table_month));
            console.log("hi");
            let color = document.getElementsByTagName("tr")[i].id;
            document.getElementById(color).style.backgroundColor = "#ffcccb";
        }
        if (Math.abs(curr_month - table_month) == 0 && (curr_year != table_year)) {
            console.log(Math.abs(curr_month - table_month));
            console.log("hi");
            let color = document.getElementsByTagName("tr")[i].id;
            document.getElementById(color).style.backgroundColor = "#ffcccb";
        }
        if (Math.abs(curr_month - table_month) >= 2 && (curr_year != table_year)) {
            console.log(Math.abs(curr_month - table_month));
            console.log("hi");
            if ((curr_month_text == 'january' && table_month_text == 'november') && (curr_year - table_year == 1)) {
                console.log("hi");
                let color = document.getElementsByTagName("tr")[i].id;
                document.getElementById(color).style.backgroundColor = 'none';
            }
            else if ((curr_month_text == 'january' && table_month_text == 'december') && (curr_year - table_year == 1)) {
                console.log("hi");
                let color = document.getElementsByTagName("tr")[i].id;
                document.getElementById(color).style.backgroundColor = 'none';
            }
            else if ((curr_month_text == 'february' && table_month_text == 'december') && (curr_year - table_year == 1)) {
                console.log("hi");
                let color = document.getElementsByTagName("tr")[i].id;
                document.getElementById(color).style.backgroundColor = 'none';
            }
            else {
                let color = document.getElementsByTagName("tr")[i].id;
                document.getElementById(color).style.backgroundColor = "#ffcccb";
            }
        }
    }
</script>
</body>
</html>