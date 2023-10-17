<?php

// Used to help the functionality of the page and system
require('helper.php');
// A variable that will reflect an error to the user
$error = array();

// Being secured from SQL injection
// If the data is not valid for the first name give an error message to the user of the system
$firstName = validate_input_text($_POST['firstName']);
if (empty($firstName)) {
    $error[] = "You forgot to enter your First Name";
}

// If the data is not valid for the last name give an error message to the user of the system
$lastName = validate_input_text($_POST['lastName']);
if (empty($lastName)) {
    $error[] = "You forgot to enter your Last Name";
}

// If the data is not valid for the email give an error message to the user of the system
$email = validate_input_email($_POST['email']);
if (empty($email)) {
    $error[] = "You forgot to enter your Email";
}

// If the data is not valid for the password give an error message to the user of the system
$password = validate_input_text($_POST['password']);
if (empty($password)) {
    $error[] = "You forgot to enter your Password";
}

// If the data is not valid for the confirm password give an error message to the user of the system
$confirm_pwd = validate_input_text($_POST['confirm_pwd']);
if (empty($confirm_pwd)) {
    $error[] = "You forgot to Confirm your Password";
}

// A variable for when the user wants to upload a profile photo through the page to the system
$files = $_FILES['profileUpload'];
$profileImage = upload_profile('../assets/profile/', $files);

// Storing the values into the database
if (empty($error)) {
    // Registering a new user to the system
    $hashed_pass = password_hash($password, PASSWORD_DEFAULT);
    // Uses the connection to be able to perform the action successfully
    require('mysqli_connect.php');

    // Make a query ? is for each of the fields apart from the registerDate
    $query = "INSERT INTO user (firstName, lastName, email, password, profileImage, registerDate)";
    $query .= "VALUES(?, ?, ?, ?, ?, NOW())";

    // Initialize the statement for the connection
    $q = mysqli_stmt_init($con);

    // Securing the database from injections for the system
    mysqli_stmt_prepare($q, $query);

    // Bind values s is for string for password, email, profileimg etc.
    mysqli_stmt_bind_param($q, 'sssss', $firstName, $lastName, $email, $hashed_pass, $profileImage);

    // Execute the statement
    mysqli_stmt_execute($q);

    if (mysqli_stmt_affected_rows($q) == 1) {

        // Start a new session for the system and the user
        session_start();

        // Create session variable
        $_SESSION['userID'] = mysqli_insert_id($con);

        header('location: login.php');
        exit();
        //print "recorded successfully instead...!";
    // Otherwise it will display something else
    } else {
        print "Error while registration...!";
    }
// Otherwise it will display something else
} else {
    echo 'not validate';
}
