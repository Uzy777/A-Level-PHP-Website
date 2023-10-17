<?php


function validate_input_text($textValue)
{
    if (!empty($textValue)) {
        $trim_text = trim($textValue);
        // Remove Characters That Are Not Allowed
        $sanitize_str = filter_var($trim_text, FILTER_SANITIZE_STRING);
        return $sanitize_str;
    }
    return '';
}

function validate_input_email($emailValue)
{
    if (!empty($emailValue)) {
        $trim_text = trim($emailValue);
        // Remove Characters That Are Not Allowed
        $sanitize_str = filter_var($trim_text, FILTER_SANITIZE_EMAIL);
        return $sanitize_str;
    }
    return '';
}


// Profile image for the user to upload when on the page to the system
function upload_profile($path, $file)
{
    $targetDir = $path;
    $default = "profile.jpeg";

    // Gets the file name
    $filename = basename($file['name']);
    $targetFilePath = $targetDir . $filename;
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

    if (!empty($filename)) {
        // Allowing a certain file format for the image to be uploaded in to the system by the user
        $allowType = array('jpg', 'png', 'jpeg', 'gif', 'pdf');
        if (in_array($fileType, $allowType)) {
            // Upload file to the server with the system
            if (move_uploaded_file($file['tmp_name'], $targetFilePath)) {
                return $targetFilePath;
            }
        }
    }

    // Return default image
    return $path . $default;
}


// Get the users information
function get_user_info($con, $userID)
{
    // Query that selects from the following fields in the users table
    $query = "SELECT firstName, lastName, email, profileImage FROM user WHERE userID=?";
    $q = mysqli_stmt_init($con);

    mysqli_stmt_prepare($q, $query);

    // Bind the statement
    mysqli_stmt_bind_param($q, 'i', $userID);

    // Execute SQL statement
    mysqli_stmt_execute($q);
    $result = mysqli_stmt_get_result($q);

    $row = mysqli_fetch_array($result);
    return empty($row) ? false : $row;
}
