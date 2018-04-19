<!DOCTYPE html>
<html>
<head>
	<title>File_Upload</title>
</head>
   <body>
      
      <form action="" method="POST" enctype="multipart/form-data">
         <input type="file" name="image" />
         <input type="submit"/>
      </form>
      
   </body>
</html>
<?php
   if(isset($_FILES['image'])){
      $errors= array();
      echo '<br>File Name :'. $file_name = $_FILES['image']['name'];
      echo '<br>File Size :'.$file_size =$_FILES['image']['size'];
     echo '<br>File TMP Name :'.$file_tmp =$_FILES['image']['tmp_name'];
      echo '<br>File Type :'.$file_type=$_FILES['image']['type'];
      echo '<br> Lower Case:'.$file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"images/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
   }
?>