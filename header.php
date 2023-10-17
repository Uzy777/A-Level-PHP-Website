<!DOCTYPE html>
<!-- The language for the system -->
<html lang="en">

<head>
  <!-- The unicode for the system -->
  <meta charset="utf-8">
  <!-- Scaling of the content produced by the system -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- The title for the system -->
  <title>Epic Systems</title>

  <!-- Implementing bootstrap for the navigation menu of the system -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <!-- Implementing owl carousel for the images to be displayed and swiped through within the system -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
    crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
    crossorigin="anonymous" />

  <!-- Implementing font awesome icons for some unique icons to be used for the system -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />

  <!-- A custom css file that is called for the system -->
  <link rel="stylesheet" href="style.css">

  <?php
  //  Will require the functions file when the header section is being required for the system
  require ('functions.php');
   ?>

</head>
<body>

  <!-- Giving this section of the header an id so it can easily be called when needed for the system-->
  <header id="header">
    <!-- Giving some styling for a section of the header using commands from bootstrap -->
    <div class="strip d-flex justify-content-between px-4 py-1 bg-dark">
      <!-- Calling the class for the font and font size as well as using bootstrap to customise the colour and margin for the text -->
      <p class="font-poppins font-size-14 text-white m-0"> Bringing to you the best components at affordable prices.</p>
      <!-- Calling this class to use the custom font and font size for all of the content within this div -->
      <div class="font-poppins font-size-14">
        <!-- Adding a hyperlink for the text Admin to direct the user to that specific section of the system uses some classes to make the text look more appealing  -->
        <a href="admin/adminlogin/index.php" class="px-3 border-left text-light">Admin</a>
        <!-- Adding a hyperlink for the text Register to direct the user to that specific section of the system uses some classes to make the text look more appealing  -->
        <a href="register/register.php" class="px-3 border-right border-left text-light">Register</a>
        <!-- Adding a hyperlink for the text Login to direct the user to that specific section of the system uses some classes to make the text look more appealing  -->
        <a href="register/login.php" class="px-3 border-right text-light">Login</a>
      </div>
    </div>

    <!-- The main section of the navigation menu bar for the system giving it class to style it a bit -->
    <nav class="navbar navbar-expand-lg navbar-dark color-second-bg">
      <!-- Adding the organisation name to the system and making it a hyper link so it can be clicked and direct the user back to the home page -->
      <a class="navbar-brand" href="index.php">Epic Systems</a>
      <!-- A button that is used for a responsive system to allow for it to be clicked and show the navigation bar hyperlinks added with the implementation of bootstrap within the system -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <!-- The icon that is used to show the collapsing of the navigation menu for the system -->
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- A class and id for the navigation menu section of the system -->
      <div class="collapse navbar-collapse" id="navbarNav">
        <!-- Calling the font margin and other aspects for the system to use within this section -->
        <ul class="navbar-nav m-auto font-poppins">
          <!-- This has the class of active as this is the page that is currently open by the user -->
          <li class="nav-item active">
            <!-- A hyperlink to take the user to the home page of the system has a icon using awesome icons -->
            <a class="nav-link" href="index.php">Home <i class="fas fa-chevron-down"></i></a>
          </li>
          <!-- Telling the system this this is an item of the navigation menu -->
          <li class="nav-item">
            <!-- A hyperlink to take the user to the popular products section of the system has a icon using awesome icons -->
            <a class="nav-link" href="#top-sale">Popular Products <i class="fas fa-chevron-down"></i></a>
          </li>
          <!-- Telling the system this this is an item of the navigation menu -->
          <li class="nav-item">
            <!-- A hyperlink to take the user to the all products section of the system has a icon using awesome icons -->
            <a class="nav-link" href="#all-products">All Products <i class="fas fa-chevron-down"></i></a>
          </li>
          <!-- Telling the system this this is an item of the navigation menu -->
          <li class="nav-item">
            <!-- A hyperlink to take the user to the about section of the system has a icon using awesome icons -->
            <a class="nav-link" href="#blogs">About <i class="fas fa-chevron-down"></i></a>
          </li>
        </ul>
        <!-- Start Shopping Cart -->
        <!-- Calls the font to be used and the font size of 14px for this section of the form -->
        <form action="#" class="font-size-14 font-poppins">
          <!-- A hyperlink to take the user to the cart page of the system has some classes to style this section a bit -->
          <a href="cart.php" class="py-2 rounded-pill color-primary-bg">
            <!-- Using a different font size of 16px for this section of the system and changing the colour to white as well as adding a icon using awesome icons -->
            <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
            <!-- Styling this section a bit making the text dark and the background light with a round circle and some padding -->
            <span class="px-3 py-2 rounded-pill text-dark bg-light">
              <?php
                // Gets the amount of products that are added to the cart and shows it with a number
                echo count($product->getData('cart')); ?></span>
          </a>
        </form>
      </div>
    </nav>

  </header>

  <!-- The start and id for the actual main site -->
  <main id="main-site">
