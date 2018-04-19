<?php
session_start();
include 'db.php';
	$unm=$_SESSION['unm'];
$qu=$mysqli->query("select * from login where unm='$unm'") or die("error querying login");
$qui=mysqli_fetch_array($qu);
$sec=$qui['secid'];
$voted=$qui['voted'];
if($voted>0){
	echo 'Already Voted! Don`t waste ur time by clicking stupid Buttons';
}
else{
if(isset($_GET['cr'])){
	$cr=$_GET['cr'];
	$qu=$mysqli->query("select * from cr where id=$cr and secid=$sec");
	$qui=mysqli_fetch_array($qu);
	$cnm=$qui['name'];
	$count=$qui['count'];
	$ncount=$count+1;



	$qu=$mysqli->query("update cr set count=$ncount where id=$cr");
	if($qu==1){
		$qu=$mysqli->query("update login set voted=1 where unm='$unm'");
		if($qu==1){
			echo 'Voted Successfully for <strong>'.$cnm.'</strong>';
		}
		else{
			echo 'Problem in voting';
		}
	}

}
}
?>
