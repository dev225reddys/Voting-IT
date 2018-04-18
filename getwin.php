<?php
session_start();
include 'db.php';
?>
<?php

  if(isset($_GET['sec'])){
    $sec=$_GET['sec'];

    $qu=$mysqli->query("select * from cr where sec=$sec order by count desc");
    $qui=mysqli_fetch_array($qu);
    echo '
    <h3>Winner</h3>
    <table align="center" width="5px" class="table table-hover">
    <tr>
    <th>Name</th>
    <th>Score</th>
    </tr>
    <tr>
    <td>'.$qui['name'].'</td>
    <td>'.$qui['count'].'</td></tr></table>';

    ?>



		<h4>List of Candidates with score</h4>
    <table class="table table-hover">
    <?php  $qu=$mysqli->query("select * from cr where sec=$sec order by count desc");
      while($qui=mysqli_fetch_array($qu)){
        echo '<tr>
        <th>Name</th>
        <th>Score</th>
        </tr>
        <tr>
        <td>'.$qui['name'].'</td>
        <td>'.$qui['count'].'</td></tr>';
      }
    }
      ?>
      </table
