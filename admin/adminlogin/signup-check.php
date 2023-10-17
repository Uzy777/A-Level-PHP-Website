<?php
// Starts the session when on the signup check admin/staff login page
session_start();
// Include the db conn for the page
include "db_conn.php";

// If its set then post the email and the same for the password for the admin/staff section of the system
if (isset($_POST['uname']) && isset($_POST['password'])
    // The same is done for the name and re password section of the admin/staff
    && isset($_POST['name']) && isset($_POST['re_password'])) {

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

  // If the re password is valid then post it to the system and the page so the user can log in
	$re_pass = validate($_POST['re_password']);
  // If the name is valid then post it to the system and the page so the user can log in
	$name = validate($_POST['name']);

  // Giving a variable
	$user_data = 'uname='. $uname. '&name='. $name;

// Different if statements for different issues that may have encountered with the user and the admin/staff section of the system
  // However if the email is empty the error message saying "User Name is required" and go back to the login page of the admin/staff section of the system
	if (empty($uname)) {
		header("Location: signup.php?error=User Name is required&$user_data");
      // Exit the statement for this page
	    exit();
  }

  // However if the password is empty the error message saying "Password is required" and go back to the login page of the admin/staff section of the system
	else if(empty($pass)){
        header("Location: signup.php?error=Password is required&$user_data");
      // Exit the statement for this page
	    exit();
	}

  // However if the re password is empty the error message saying "Re Password is required" and go back to the login page of the admin/staff section of the system
	else if(empty($re_pass)){
        header("Location: signup.php?error=Re Password is required&$user_data");
      // Exit the statement for this page
	    exit();
	}

  // However if the name is empty the error message saying "Name is required" and go back to the login page of the admin/staff section of the system
	else if(empty($name)){
        header("Location: signup.php?error=Name is required&$user_data");
      // Exit the statement for this page
	    exit();
	}

  // However if the re password is empty the error message saying "The confirmation password does not match" and go back to the login page of the admin/staff section of the system
	else if($pass !== $re_pass){
        header("Location: signup.php?error=The confirmation password does not match&$user_data");
      // Exit the statement for this page
	    exit();
	}

	else{

        // Hash the password using md5 so it can be encrypted when stored within the database of the system good for security reasons
        $pass = md5($pass);

    // From the SQL database of this section it will select all of the data from the users table where the username exists
	  $sql = "SELECT * FROM users WHERE user_name='$uname' ";
    // Connects to the database and outputs the results and if successful will process to the next section
		$result = mysqli_query($conn, $sql);


		if (mysqli_num_rows($result) > 0) {
			header("Location: signup.php?error=The username is taken try another&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO users(user_name, password, name) VALUES('$uname', '$pass', '$name')";
           $result2 = mysqli_query($conn, $sql2);
           // If the database connects and the changes are made within the database and its tables then it will output "Your account has been created successfully"
           if ($result2) {
           	 header("Location: signup.php?success=Your account has been created successfully");
           // Exit the statement for this page
	         exit();
           // Otherwise the else is to show an error message that an unknown error has occured when the user has been trying to access the page
           }else {
	           	header("Location: signup.php?error=unknown error occurred&$user_data");
            // Exit the statement for this page
		        exit();
           }
		}
	}

// Otherwise will go back to the signup page of the admin/staff section of the system
}else{
	header("Location: signup.php");
  // Exit the statement for this page
	exit();
}
