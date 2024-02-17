<!DOCTYPE html>
<html>
<head>
  <title>Update Teacher</title>
<style>
<?php include 'skylinestyles.css';?>
</style>
</head>
<body bgcolor="#EBF5FB">
<?php include 'skyheader.html';?>
<div class = "maincontainer">
  <h2>Search Teacher</h2>
  <?php echo isset($error) ? $error : ''; ?>
  <form method="post" action="<?php echo base_url('index.php/teacherController/viewteacherbyid'); ?>">
    <label for="teacherid">Teacher Id:</label>
    <input type="text" id="teacherid" name="teacherid"  ><br><br>
    
    <label for="teachername">Teacher Name:</label>
    <input type="text" id="teachername" name="teachername"  ><br><br>
    
    <center><input type="submit" value="Search">

<button onclick="exit()">Exit</button></center>
  </form>
  </div>

<?php if ($teacher): ?>
<form  method="post" action="<?php echo base_url('index.php/teacherController/loadteacherview'); ?>">
        <h2>Teacher Details</h2>
<div class="container">
         <div class="section"><p> <?php echo $teacher->teacherid; ?></p></div>
         <div class="section"><p> <?php echo $teacher->teachername; ?></p></div>
<input type="hidden" name = "teacherid" value="<?php echo $teacher->teacherid;?>"></input>

<div class="section"><input type="submit" name="submit" value="VIEW"></input></div>
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