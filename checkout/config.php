<?php
	// Connection with the variable assigned to the database if it can't then it will respond with failed and will kill the process
	$conn = new mysqli("localhost","root","","EpicSystems2");
	if($conn->connect_error){
		die("Connection Failed!".$conn->connect_error);
	}
?>
