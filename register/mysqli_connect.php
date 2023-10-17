<?php

// Connecting the database for the product management section of the system
// The server name for the database
define('DB_NAME', 'register_db');
// The user name for the database
define('DB_USER', 'root');
// The password for the database left blank because there is no password set up
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');

try {

    // Connection variable for the system
    $con = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    // Encoded language to make PHP the same as HTML
    mysqli_set_charset($con, 'utf8');


// Messages that are displayed to the user if any errors are caught by the system
} catch (Exception $ex) {
    print "An Exception occurred. Message:" . $ex->getMessage();
} catch (Error $e) {
    print "The system is busy please try later";
}
