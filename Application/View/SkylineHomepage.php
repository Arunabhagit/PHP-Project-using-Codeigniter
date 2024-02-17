<html>
<head>
<title>SKYLINE EDUCATION</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo base_url('public/css/skylinestyles.css'); ?>">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<!--<link rel="stylesheet" href="<?php echo base_url('public/css/skylinecustom.css'); ?>">-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body bgcolor = "#EBF5FB">
<div class="jumbotron text-center" style=="padding: 0;">
<div class="skyhead">
<div>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo base_url('index.php/User/homepage'); ?>">HOME</a></li>
        <li><a href="#services">COURSES</a></li>
        <li><a href="<?php echo base_url('index.php/User/login'); ?>">LOGIN</a></li>
        <li><a href="#pricing">ABOUT</a></li>
        <li><a href="#contact">CONTACT</a></li>
      </ul>
    </div>
  </div>
</nav>
</div>
<div class="container-fluid container-fluid-custom">
<h1>SKYLINE EDUCATION</h1>
<p>We specialize in Computer Education & Technologies</p>
<form class="form-inline">
    <div class="input-group">
      <input type="email" class="form-control" size="25" placeholder="Email Address" required>
      <div class="input-group-btn">
        <button type="button" class="btn btn-danger">Subscribe</button>
      </div>
    </div>
  </form>
<h2>Our Commitments</h2>
</div>
<div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
   <!--<img src="<?php echo site_url('/public/imag1.jpg'); ?>" alt="Los Angeles">-->
<p>We provide best in class education in computer</p>
    </div>
    <div class="item">
     <p>We provide best in class education in computer</p>
    </div>
    <div class="item">
      <p>We provide best in class education in computer</p>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>

<div class="container-fluid text-center">
  <h2>Our Specialization</h2>
  <h4>What we offer</h4>
  <br>
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-off"></span>
      <h4>Computer Course</h4>
      <p>Get Certified today in Computer Courses</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-heart"></span>
      <h4>School Syllabus</h4>
      <p>Provide Computer Training for School Students and Prepare them for School & Board Exams</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-lock"></span>
      <h4></h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    </div>
    <br><br>
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-leaf"></span>
      <h4>GREEN</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-certificate"></span>
      <h4>CERTIFIED</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-wrench"></span>
      <h4>HARD WORK</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
  </div>


</body>
</html>