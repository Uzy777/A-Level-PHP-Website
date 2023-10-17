<!doctype html>
<!-- The language for the system -->
<html lang="en">
<head>
    <!-- The unicode for the system -->
    <meta charset="UTF-8">
    <!-- Giving a specific name and scaling the page acordingly -->
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- The title for the system -->
    <title>Admin/Staff Navigation</title>

    <!-- Implementing font awesome icons for some unique icons to be used for the system -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <!-- Implementing bootstrap for the navigation menu of the system -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- A custom css file that is called for the system -->
    <link rel="stylesheet" href="style.css">

</head>
<!-- Used for the navigation and styling of the menu -->
<body class="">
  <!-- Takes the user to the product management page when clicked on they hyperlink -->
  <a class="btn btn-lg btn-primary btn-block text-uppercase" href="stock/index.php">Product Management</a>
  <!-- Takes the user to the register staff page when clicked on they hyperlink -->
  <a class="btn btn-lg btn-primary btn-block text-uppercase" href="adminlogin/signup.php">Add Staff</a>
  <!-- Takes the user to the logout page when clicked on they hyperlink -->
  <a class="btn btn-lg btn-primary btn-block text-uppercase" href="adminlogin/logout.php">Logout</a>
  <!-- Takes the user to the home page when clicked on they hyperlink -->
  <a class="btn btn-lg btn-primary btn-block text-uppercase" href="../index.php">Home</a>

</main>
</body>
</html>
