<?php
include 'db.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <!--
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
-->
  <link rel="stylesheet" href="bootstrap/4.0.0/bootstrap.min.css">
  <script src="bootstrap/4.0.0/jquery-3.2.1.slim.min.js"></script>
  <script src="bootstrap/4.0.0/popper.js/popper.min.js"></script>
  <script src="bootstrap/4.0.0/bootstrap.min.js"></script>

  <title>Candidate Registration</title>
  <script type="text/javascript">
    function chkCGPA(){
      //window.alert("Test")
      var cgpa=document.forms["cand"["cgpa"].value;
      if(cgpa==6.5){
        window.alert("Only Candidates with 6.5 or Above CGPA are Allowed");
      }
    }
  </script>
</head>
<body>
  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Presidecny Elections</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="admin/index.php">Admin</a></li>
            <li><a href="creg.php">Candidate Registration</a></li>

    </ul>
  </div>
</nav>
<center>
  <div class="container">
      <div class="col-lg-5 col-offset-6 centered">
<table class="table table-hover">
     <form name="cand">
       <br>
       <br>

       <h4 class="form-signin-heading">Candidate Registration</h4>
       <?php if(isset($_GET['w'])){
         if($_GET['w']=='wrong'){
           echo '<div class="alert alert-danger">
  <strong>Wrong Username or Password!</strong> Please Input correct ones.
</div>';
         }
       }
       ?>
       <br>
       <tr><td>Select Section</td><td>
      <select name="sec" id="sec">
        <option value="selected" disabled selected>Select Section</option>
        <?php
        $q=$mysqli->query("select * from sec");
        while($qu=mysqli_fetch_array($q)){
          echo '
          <option value="'.$qu['sec'].'">'.$qu['sec'].'</option>
          ';
        }
        ?>
      </select></td></tr>
      <tr><td>Candidate Name</td>
       <td><input type="text" id="name" class="form-control" placeholder="Enter your Name" name="name" required autofocus>
       </td></tr>
       <tr><td>Enter CGPA</td><td>
       <input type="text" id="cgpa" class="form-control" placeholder="Enter CGPA" name="cgpa" required></td><td><a onclick="chkCGPA();" class="btn btn-info">Check Eligibilty</a></td></tr>
<tr><td></td><td>       <button class="btn btn-lg btn-primary btn-block" type="submit">Submit
</button></td></tr>
     </form>
     </table>
</div>
   </div> <!-- /container -->
</center>
</body>
</html>

</body>
