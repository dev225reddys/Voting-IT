<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>
	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Presidecny Elections</a>
    </div>
    <ul class="nav navbar-nav">
    	<li><a href="home.php">Home</a></li>
      <li><a href="logout.php">Logout</a></li>

    </ul>
  </div>
</nav>


<?php
include '../db.php';

?>
<div align="center">
<h3> Upload Manifesto</h3>
<table class="table table-hover">
	<form action="" method="POST" enctype="multipart/form-data">
<td>Select CR</td>
<td>	<select id="cr" name="cr" required>
	<option value="Selected" selected>Select CR</option>
<?php 

$q=$mysqli->query("select * from cr");
while($qu=mysqli_fetch_array($q)){
	echo '
	<option value="'.$qu['id'].'">'.$qu['name'].'</option>';
}


?>
</td>
</select>
<tr>
<td>Upload File</td>
<td><input type="file" name="man" /></td>
</tr>
<tr>
	<td></td>
	<td><input type="submit" class="btn btn-success" value="Submit" /></td>
</tr>

</form>
</table>
</div>

</body>
</html>
<?php
   if(isset($_FILES['man'])){
   	 //if(isset($_FILES['man'])){
      $errors= array();
      //for saving the file with CR ID
      $cr=$_POST['cr'].".pdf";
     $file_name = $cr;
     $file_size =$_FILES['man']['size'];
     $file_tmp =$_FILES['man']['tmp_name'];
     $file_type=$_FILES['man']['type'];
     
     //die();//$file_ext=strtolower(end(explode('.',$_FILES['man']['name'])));
      
      //$ext= array("pdf");
      if($file_type!='application/pdf'){
      	$errors[]="extension not allowed, please choose a PDF Format.";
      }
      /*if(in_array($file_ext,$ext)=== false){
         $errors[]="extension not allowed, please choose a PDF Format.";
      }*/
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"man/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
   }

?>