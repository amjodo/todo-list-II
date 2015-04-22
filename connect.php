<?php
//this is important because this is the way server reads it
$mysqli = new mysqli('localhost', 'root', 'root', 'todo2');
//$mysqli->connect_error then we want it to die and have this message
if ($mysqli->connect_error) {
	die('Connect Error (' . $mysqli->connect_errno . ')'
		. $mysqli->connect_error);
	# code...
}
else {
	echo "Connection made";
}
$mysqli->close();

?>