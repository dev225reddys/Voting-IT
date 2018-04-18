<?php
session_start();
if(isset($_SESSION['unm'])){
  session_destroy();
header("Location:index.php");
}
?>
