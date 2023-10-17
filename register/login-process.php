<?php

$error = array();

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

if (empty($error)) {
    // SQL query to get specific information from the database from a certain table and fields
    $query = "SELECT userID, firstName, lastName, email, password, profileImage FROM user WHERE email=?";
    $q = mysqli_stmt_init($con);
    mysqli_stmt_prepare($q, $query);

    // Bind parameter
    mysqli_stmt_bind_param($q, 's', $email);
    // Execute the query for selecting data from the database
    mysqli_stmt_execute($q);

    // Displays the results that have been gathered by the process of the execution
    $result = mysqli_stmt_get_result($q);

    // Gathers data from the results variable
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    if (!empty($row)) {
        // Verifying the password
        if (password_verify($password, $row['password'])) {
            header("location: ../index.php");
            exit();
        }
    // Otherwise it will display something else
    } else {
      //echo "<script> alert('Wrong test test test:');window.location='index.php' </script>";
        print "You are not a member please register!";
    }
// Otherwise it will display something else
} else {
    echo "Please Fill out email and password to login!";
}
