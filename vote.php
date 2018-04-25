<?php
session_start();
include 'db.php';
if(!isset($_SESSION['unm'])){
	header("Location:index.php?w=login");

}
?>

<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<title> PU Elections </title>
<style>
body{
	background-color: "#0000FF";
	text-align: center;
}
h1{
	color: rgb(0,0,255);
}
.displaybox{
	color: rgb(0,0,255);
	margin: auto;
	width: 300px;
	border: 4px solid #000000;
	padding: 10px;
	align: center;
	font: 1.5em normal verdana, helvetica, arial;
}
</style>
<script>
	var ajaxobject=new XMLHttpRequest();
	function getCandidateList() {
	  if(!ajaxobject)
	  {
	  	document.getElementById("showcandidate").innerHTML="AJAX obejct could not be created";
	  	return;
	  }
	  	  ajaxobject.open("GET","candidates.php");
	  	  ajaxobject.send();
	  	  ajaxobject.onreadystatechange=getResponse;
	}
	function getResponse(){
		if(ajaxobject.readyState == 4 && ajaxobject.status == 200)
		{
			document.getElementById('showcandidate').innerHTML=ajaxobject.responseText;
		}
		else
		{
			document.getElementById('showcandidate').innerHTML= ajaxobject.readyState+ajaxobject.status+ajaxobject.statusText;

		}

	}
	var count = 0;
	function changeColor()
	{
		count++;
		var col="red";
		if(count%2==0)
			col="lightgreen";
		else
			col="red";
		document.getElementById('showcandidate').style.backgroundColor=col;
	}
	function makeItBold()
	{
		//document.getElementById('showcandidate').style.
	}
	function ajaxConfirm()
	{
		var candidate=document.getElementById("myform").elements['candidate'].value;

		//var candidate=document.getElementById('selectedcandidate').innerHTML = document.getElementById("myform").elements['candidate'].value;
		if(ajaxobject.readyState == 4 && ajaxobject.status == 200)
		{
			document.getElementById('showcandidate').innerHTML=ajaxobject.responseText;
		}
			ajaxobject.open("GET","vote1.php?cr="+candidate);
	  	  ajaxobject.send();


	}
</script>
</head>
	<body onload="">

		<?php
		$unm=$_SESSION['unm'];
$qu=$mysqli->query("select * from login where unm='$unm'");
$qui=mysqli_fetch_array($qu);
$voted=$qui['voted'];
if($voted>0){
	 echo '<div class="alert alert-danger">
  <strong>Already Voted!</strong> Please wait till next sem to vote Again!
</div>';		
}
else{
?>	
		<h1>List of Candidates for the post of CR</h1>
		<h4>Getting the list from the server</h4>
		
		<form>
			<input type="button" value="List the candidates"onclick="getCandidateList()"/>
			<input type="button" value="Change color"onclick="changeColor()"/>
		</form>

		<div id="showcandidate" class="displaybox">
		</div>
		<form>
			<input type="button" value="Submit" onclick="ajaxConfirm()">
		</form>
		<!--<div id="selectedcandidate" class="displaybox">
		</div>-->
	
<?php } ?>
<footer> <a href="logout.php"><button class="btn btn-info">Logout</button></a></footer>
	</body>

</html>
