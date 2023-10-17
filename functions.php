<?php

//  Will require this to connect MySQL when the functions section is being required for the system
require ('database/DBController.php');

//  Will require the Product file when the functions section is being required for the system
require ('database/Product.php');

//  Will require the Cart file when the functions section is being required for the system
require ('database/Cart.php');



// The DBController object for the system
$db = new DBController();

// Creates a new Product within the database variable
$product = new Product($db);
// Shuffles the products then retrieves it back
$product_shuffle = $product->getData();

// Creates a new Cart within the database
$Cart = new Cart($db);
