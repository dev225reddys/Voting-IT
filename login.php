<?php
session_start();
include('db.php');?>
<?php

if(isset($_POST)){
  $unm=$_POST['unm'];
  $psw=$_POST['psw'];
  $q=$mysqli->query("select * from login where unm='$unm' and psw='$psw'") or die("Unable to connect");
  $qi=mysqli_fetch_array($q);
  $sec=$qi['secid'];
  $c=$q->num_rows;
  //echo $c;
  if($c==1){
    $_SESSION['unm']=$unm;
    $_SESSION['sec']=$sec;
    header("Location:vote.php");

  }
  else{
    header("Refresh:0,url=index.php?w=wrong");
    echo "Wrong Username or Password!";
  }
}
?>
