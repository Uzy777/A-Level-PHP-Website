<!DOCTYPE html>
<html>
<head>
	<head>
		<!-- The unicode for the system -->
	   <meta charset="utf-8">
		 <!-- Scaling of the content produced by the system -->
	   <meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The title for the system -->
	   <title>Admin/Staff Login</title>
		 <!-- Implementing bootstrap for the admin/staff login -->
	   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		 <!-- Implementing ajax for the admin/staff login -->
	   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		 <!-- Implementing ajax for the admin/staff login -->
	   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		 <!-- Implementing bootstrap for the admin/staff login -->
	   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

		 <!-- A custom css file that is called for the system -->
	   <link rel="stylesheet" href="style.css">

	</head>
<body>
		<!-- Telling the system what to do when the user tries to log into the system -->
     <form action="login.php" method="post">
     	<h2>Admin/Staff Login</h2>
     	<?php
			// Will give an error if there was an issue trying to login the user
			if (isset($_GET['error'])) { ?>
     		<p class="error"><?php
				// Will give an error if there was an issue trying to login the user
				echo $_GET['error']; ?></p>
     	<?php } // End of the PHP section ?>
			<!-- Label and name for the email section of the page -->
     	<label>Email</label>
     	<input type="text" name="uname" placeholder="Email"><br>

			<!-- Label and name for the password section of the page -->
     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

			<!-- A button to finalise the process and initiate the PHP -->
     	<button type="submit">Login</button>
					<!-- Spacing -->
					<hr>
					<!-- Spacing -->
					<hr>
					<!-- Spacing -->
					<hr>
					<!-- Some styling using the classes and bootstrap with a hyperlink so the user can go back to the home page of the system -->
					<a class="btn btn-lg btn-primary btn-block text-uppercase" href="/Epic-Systems/Epic-Systems-PHP/index.php">Home</a>

     </form>
</body>
</html>
