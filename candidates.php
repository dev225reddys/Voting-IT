			<?php
		session_start();
		include 'db.php';
		?>
<?php
$sec=$_SESSION['sec'];
	echo '<form id="myform">';
	$qu=$mysqli->query("select * from cr where sec=$sec");
		while($qui=mysqli_fetch_array($qu)){
			$crnm=$qui['name'];
			$crid=$qui['id'];
			echo '<input type="radio" id="name1" name="candidate" value="'.$crid.'">'.$crnm.'</input><br />';
		}
		echo '</form>';
		?>
