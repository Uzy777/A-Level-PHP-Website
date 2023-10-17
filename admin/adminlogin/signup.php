<!DOCTYPE html>
<html>
<head>
	<head>
			<!-- The unicode for the system -->
	    <meta charset="UTF-8">
			<!-- Scaling of the content produced by the system -->
	    <meta name="viewport"
	          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	    <meta http-equiv="X-UA-Compatible" content="ie=edge">
			<!-- The title for the system -->
	    <title>Admin/Staff Sign Up</title>

			<!-- Implementing font awesome icons for some unique icons to be used for the system -->
	    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
			<!-- Implementing bootstrap for the admin/staff login -->
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

			<!-- A custom css file that is called for the system -->
	    <link rel="stylesheet" href="style.css">

	</head>
<body>
		<!-- Telling the system what to do when it posts with the signup check section -->
     <form action="signup-check.php" method="post">
     	<h2>Admin/Staff Sign Up</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php
				// Will give an error if there was an issue trying to register the user
				echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php
					// If everything is ok it will give a success message to the user and the data will be added to the database
					if (isset($_GET['success'])) { ?>
               <p class="success"><?php
							 // Shows the user a message that everything was OK
							 echo $_GET['success']; ?></p>
          <?php } ?>

          <label>Name</label>
          <?php
					// If the name matches with the database then
					if (isset($_GET['name'])) { ?>
               <input type="text"
                      name="name"
                      placeholder="Name"
                      value="<?php
											// Get that information and sent it to the database
											echo $_GET['name']; ?>"><br>
          <?php
					// Else it will just not give a value for the database and will be left empty
					}else{ ?>
               <input type="text"
                      name="name"
                      placeholder="Name"><br>
          <?php }?>

          <label>Email</label>
          <?php
					// If the email matches with the database then
					if (isset($_GET['uname'])) { ?>
               <input type="text"
                      name="uname"
                      placeholder="User Name"
                      value="<?php
											// Get that information and sent it to the database
											echo $_GET['uname']; ?>"><br>
          <?php
					// Else it will just not give a value for the database and will be left empty
					}else{ ?>
               <input type="text"
                      name="uname"
                      placeholder="Email"><br>
          <?php }?>

			<!-- Label and name for the password section of the page -->
     	<label>Password</label>
     	<input type="password"
                 name="password"
                 placeholder="Password"><br>

					<!-- Label and name for the re password section of the page -->
          <label>Re Password</label>
          <input type="password"
                 name="re_password"
                 placeholder="Re Password"><br>

			<!-- A button to finalise the process and initiate the PHP -->
     	<button type="submit">Sign Up</button>
			<!-- Spacing -->
			<hr>
			<!-- Spacing -->
			<hr>
			<!-- Spacing -->
			<hr>
			<!-- Some styling using the classes and bootstrap with a hyperlink so the user can go back to the admin/staff navigation menu of the system -->
			<a class="btn btn-lg btn-primary btn-block text-uppercase" href="../homescreen.php">Back</a>
     </form>
</body>
</html>
