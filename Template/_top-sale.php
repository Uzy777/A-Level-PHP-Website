<!-- This section is responsible for the popular products sections of the system and its page -->
<?php
  // This variable is used to be able to shuffle the contents within the section of the popular products within the system
  shuffle($product_shuffle);

  // Request method post from the database server
  if($_SERVER['REQUEST_METHOD'] == "POST"){
    // Call method for adding a product to the cart from this section of the system where the user can see all of the products in one place and page
    $Cart->addToCart($_POST['user_id'], $_POST['item_id']);
  }
?>

<!-- This section is used for styling and adjustments to be made to the contents that the user is able to view and interact with -->
<section id="top-sale">
  <div class="container py-5">
    <!-- Using a custom font and font size with the class variable that have already been assigned and created -->
    <h4 class="font-poppins font-size-20">Popular Products</h4>
    <hr>

    <!-- This is the section for the owl carousel module that has already been imported and can be used by the system and the page -->
    <div class="owl-carousel owl-theme">
      <!-- This is used to be able to shuffle each of the products within this section of the page and the system it only shuffles the variable item as this is what has already been assigned to the code -->
      <?php foreach ($product_shuffle as $item) { ?>
      <div class="item py-2">
        <!-- For this section i will be using a custom font that has already been added to the code so i can use it just with its variable class name -->
        <div class="product font-poppins">
          <!-- This section of the code is responsible for getting the product id as well as the appropriate details such as the image so it can be displayed to the user incase no image can be added from the database the it will get the static image from the contents -->
          <a href="<?php printf('%s?item_id=%s', 'product.php', $item['item_id']) ?>"><img src="<?php echo $item['item_image'] ?? "./assets/motherboard/Asus-Rog-B550.webp"; ?>" alt="product1" class="img-fluid"></a>
          <div class="text-center">
            <!-- This section is used to be able to get and show to the user the name of the product it will get the information from the database however if it is unable to do this then it will provide text saying Unknown -->
            <h6><?php echo $item['item_name'] ?? "Unknown"; ?></h6>
            <div class="price py-2">
              <!-- This section is used for the item price it will get this information from the database if it can not do this then it will show the user something else -->
              <span>£<?php echo $item['item_price'] ?? '0'; ?></span>
            </div>
            <form method="post">
              <!-- This is used to be able to show the get the item id for the product automatically and modualary rather than doing it manually each time if this cannot be found then it will display something similar within the system and its page -->
              <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1'; ?>">
              <input type="hidden" name="user_id" value="<?php echo 1; ?>">
              <?php
                // This section is used for getting the product so it can be added to the cart section of the system
                if (in_array($item['item_id'], $Cart->getCartId($product->getData('cart')) ?? [])){
                  // These are the buttons for the system and are configured to complete its task
                  echo '<button type="submit" disabled class="btn btn-success font-size-12">In the Cart</button>';
                }else{
                  // These are the buttons for the system and are configured to complete its task
                  echo '<button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Add to Cart</button>';
              }
              ?>
            </form>
          </div>
        </div>
      </div>
    <?php } //Closing for each function ?>

    </div>
    </div>
</section>
