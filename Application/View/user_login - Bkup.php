<!DOCTYPE html>
<html>
<head>
  <title>Log In</title>
<style>
<?php include 'skylinestyles.css';?>
</style>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo base_url('public/css/skylinestyles.css'); ?>">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<!--<link rel="stylesheet" href="<?php echo base_url('public/css/skylinecustom.css'); ?>">-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body bgcolor="#EBF5FB">
<?php include 'header.html';?>
<div class = "maincontainer">
  <h2>Login Form</h2>
  <?php echo isset($error) ? $error : ''; ?>
  <form method="post" action="<?php echo base_url('index.php/User/authenticateuser'); ?>">
    <label for="username">Username:</label>
    <input type="text" id="id" name="id" required><br><br>
    
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br><br>
    
    <center><input type="submit" value="Login">
<button onclick="exit()">Exit</button></center>
  </form>
  
  
  
  <center><p><a href="<?php echo base_url('index.php/login/redirectToCreateUser'); ?>">Create New User</a>
  
  <a href="reset_password.html">Reset Password</a></p></center>
  </div>
  <script>
    function exit() {
      // Perform any exit logic here
      alert("Exiting the page");
    }
  </script>
</body>
</html>