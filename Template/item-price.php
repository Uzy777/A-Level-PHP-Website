<?php

// Require MySQL Connection for the system to operate
require ('../database/DBController.php');

// Require Product Classes for the system to operate correctly
require ('../database/Product.php');

// Assigning a variable to create a new dbcontroller
$db = new DBController();

// Product object
$product = new Product($db);

// Will get results from item id to be able to give individual item prices
if (isset($_POST['itemid'])){
    $result = $product->getProduct($_POST['itemid']);
    echo json_encode($result);
}
