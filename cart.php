<?php
// Remembers everything that would normally be outputted but doesn;t do anything with it yet
  ob_start();
  // Include the header for the page
  include('header.php');
?>

<?php
  // Start to include cart items if the cart is not empty within the system
  count($product->getData('cart')) ? include ('Template/_cart.php'): include ('Template/notFound/_cart_notFound.php');

  // Include the top sale section for the page
  include ('Template/_top-sale.php');
?>

<?php
  // Include the footer for the page
  include('footer.php');
?>
