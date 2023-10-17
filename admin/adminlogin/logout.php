<?php
// Starts the session when on the logout page
session_start();

// Will unset the session active
session_unset();
// Will destroy the session active
session_destroy();

// Takes the user back to the index page of the admin/staff section
header("Location: index.php");
