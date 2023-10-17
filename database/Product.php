<?php

// Uses this to fetch the product data from the systems database
class Product{
  public $db = null;

  public function __construct(DBController $db)
  {
    if (!isset($db->con)) return null;
    $this->db = $db;
  }

  // Fetchs product data using getData method and grabs it from all tables of the database
  public function getData($table ='product'){
    $result = $this->db->con->query("SELECT * FROM {$table}");

    $resultArray = array();

    // Fetchs product data one by one
    while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        $resultArray[] = $item;
    }
    return $resultArray;
  }

  // Gets product using the item id within the database
  public function getProduct($item_id = null, $table= 'product'){
    if (isset($item_id)){
      $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_id={$item_id}");

      $resultArray = array();

      // Fetchs product data one by one from the database
      while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
          $resultArray[] = $item;
      }
      return $resultArray;

    }

    }
  }
