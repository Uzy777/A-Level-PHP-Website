<?php
// Connecting the database for the admin/staff section of the system
// The server name for the database
$sname= "localhost";
// The user name for the database
$unmae= "root";
// The password for the database left blank because there is no password set up
$password = "";

// The name of the database that is being connected and used for this section of the admin/staff
$db_name = "EpicSystems";

// A variable to ensure that the database has connected with the other appropriate variables such as the server name, user name, password and database name
$conn = mysqli_connect($sname, $unmae, $password, $db_name);

// If the database does not connect correctly then output some text to tell the user that the process has failed
if (!$conn) {
	echo "Connection failed!";
}
