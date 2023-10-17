<?php
// Starts the session when on the home admin/staff login page
session_start();

// If the session id and the session user name match then
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!-- A backup section if the php does not work correctly -->
<!DOCTYPE html>
<html>
<head>
  <!-- The title for the system -->
	<title>Admin/Staff Home</title>
  <!-- A custom css file that is called for the system -->
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Hello,
       <?php
       // Echos the session name from the database
       echo $_SESSION['name']; ?></h1>
    <!-- A hyperlink to make the user logout when clicked on -->
    <a href="logout.php">Logout</a>
</body>
</html>

<?php
// If above does not work then go to the admin/staff index page
}else{
     header("Location: index.php");
     exit();
}
 ?>
