<?php

$servername = "localhost";
$username = "root";
$password = "tiger";
$db="vote";
// Create connection
$mysqli = new mysqli($servername, $username, $password,$db) or die("unable to connect");

// Check connection
if ($mysqli->connect_error) {
   die("Connection failed: " . $mysqli->connect_error);
}

?>
