<?php

// PHP cart class for the system to work correctly
class Cart
{
  public $db = null;

  public function __construct(DBController $db)
  {
    if (!isset($db->con)) return null;
    $this->db = $db;
  }

  // Insert data into the cart table within the database
  public function insertIntoCart($params = null, $table = "cart"){
    if ($this->db->con != null){
      if ($params != null){
        // "Insert into Cart(user_id) values (0)"
        // Get the table columns
        $columns = implode(',', array_keys($params));
        $values = implode(',', array_values($params));

        // Creates a SQL query that inserts data into the correct values within the database of the system
        $query_string = sprintf("INSERT INTO %s(%s) VALUES(%s)", $table, $columns, $values);

        // This Executes the query to return and get the results
        $result = $this->db->con->query($query_string);
        return $result;
      }
    }
  }

  // To get user_id & item_id and insert it into the cart table of the system
  public function addToCart($userid, $itemid){
    if (isset($userid) && isset($itemid)){
      $params = array(
        "user_id" => $userid,
        "item_id" => $itemid
      );

      // Insert data into the cart
      $result = $this->insertIntoCart($params);
      if($result){
        // Then it will reload the page to itself for the user so they can see the item in their cart
        header("Location:" . $_SERVER['PHP_SELF']);

      }
    }
  }

  // Delete cart item using cart item id the user can remove the item from their cart if they wish to do so
  public function deleteCart($item_id = null, $table = 'cart'){
    if($item_id != null){
        $result = $this->db->con->query("DELETE FROM {$table} WHERE item_id={$item_id}");
        if($result){
            // Then it will reload the page to itself for the user so they can see the item has gone from their cart
            header("Location:" . $_SERVER['PHP_SELF']);
        }
        // Gives the user the results
        return $result;
    }
}

  // Calculates the total of all the products within the users cart
  public function getSum($arr){
    if(isset($arr)){
        $sum = 0;
        foreach ($arr as $item){
            $sum += floatval($item[0]);
        }
        return sprintf('%.2f' , $sum);
    }
}

// Gets the item id of the cart so each cart a user creates is unique and can easily be identified with the organisation
public function getCartId($cartArray = null, $key = "item_id"){
    if ($cartArray != null){
        $cart_id = array_map(function ($value) use($key){
            return $value[$key];
        }, $cartArray);
        return $cart_id;
    }
}

}
