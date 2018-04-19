			<?php
		session_start();
		include 'db.php';
		?>
<?php
$sec=$_SESSION['sec'];
	echo '<form id="myform">';
	$qu=$mysqli->query("select * from cr where secid='$sec'") or die("error selecting");
		while($qui=mysqli_fetch_array($qu)){
			$crnm=$qui['name'];
			$crid=$qui['id'];
			echo '<input type="radio" id="name1" name="candidate" value="'.$crid.'">'.$crnm.'<br />';
		}
		echo '</form>';
		?>
