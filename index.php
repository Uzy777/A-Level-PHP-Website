<?php
// Starts the session when on the home page
session_start();

// Remembers everything that would normally be outputted but doesn;t do anything with it yet
ob_start();
  // Include the header for the page
  include('header.php');
?>

<?php
  // Include the banner section for the page
  include ('Template/_banner.php');

  // Include the top sale section for the page
  include ('Template/_top-sale.php');

  // Include the all products section for the page
  include ('Template/_all-products.php');

  // Include the about section for the page
  include ('Template/_about.php');
?>

<?php
  // Include the footer for the page
  include('footer.php');
?>
