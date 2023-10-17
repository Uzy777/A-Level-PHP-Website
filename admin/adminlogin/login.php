<?php
// Starts the session when on the login admin/staff login page
session_start();
// Include the db conn for the page
include "db_conn.php";

// If its set then post the email and the same for the password for the admin/staff section of the system
if (isset($_POST['uname']) && isset($_POST['password'])) {

// Check that the data in the variable is valid
	function validate($data){
			// Trim the data in the variable and store it again
       $data = trim($data);
			// stripsplashes the data in the variable and store it again
	   $data = stripslashes($data);
		 // Trim the htmlspecialchars the data variable and store it again
	   $data = htmlspecialchars($data);
		 // Returns back the data within the data variable
	   return $data;
	}

	// If the email is valid then post it to the system and the page so the user can log in
	$uname = validate($_POST['uname']);
	// If the password is valid then post it to the system and the page so the user can log in
	$pass = validate($_POST['password']);

	// However if the email is empty the error message and go back to the login page of the admin/staff section of the system
	if (empty($uname)) {
		header("Location: index.php?error=User Name is required");
			// Exit the statement for this page
	    exit();

	// However if the password is empty the error message and go back to the index page of the admin/staff section of the system
	}else if(empty($pass)){
        header("Location: index.php?error=Password is required");
				// Exit the statement for this page
	    exit();
	}else{

				// Hash the password using md5 so it can be encrypted when stored within the database of the system good for security reasons
        $pass = md5($pass);


		// From the SQL database of this section it will select all of the data from the users table where the username and password exists
		$sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$pass'";

		// Connects to the database and outputs the results and if successful will process to the next section
		$result = mysqli_query($conn, $sql);

		// This process will then be carried out to log in the user and send them back to the homescreen of the admin/staff navigation menu of the system
		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $uname && $row['password'] === $pass) {
            	$_SESSION['user_name'] = $row['user_name'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: ../homescreen.php");
						// Exit the statement for this page
		        exit();
						// Otherwise the else is to show an error message that there is an incorrect user name or password entered within the page
            }else{
				header("Location: index.php?error=Incorrect User name or password");
						// Exit the statement for this page
		        exit();
			}
			// Otherwise the else is to show an error message that there is an incorrect user name or password entered within the page
		}else{
			header("Location: index.php?error=Incorrect User name or password");
					// Exit the statement for this page
	        exit();
		}
	}

// Otherwise will go back to the index page of the admin/staff section of the system
}else{
	header("Location: index.php");
	// Exit the statement for this page
	exit();
}
