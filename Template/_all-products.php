<!-- This section is responsible for displaying all of the products within the system to the user it uses multiple variables to make the look and feel of the system more professional -->
<?php
  $section = array_map(function ($pro){ return $pro['item_section'];}, $product_shuffle);
  $unique = array_unique($section);
  // A unique way of sorting the individual products within the system and its database
  sort($unique);
  // Will shuffle the products around so it is different each time
  shuffle($product_shuffle);

  // Request method post from the database server
  if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(isset($_POST['all_products_submit'])){
  // Call method for adding a product to the cart from this section of the system where the user can see all of the products in one place and page
  $Cart->addToCart($_POST['user_id'], $_POST['item_id']);
    }
  }

  // Once the product is added to the cart within the system it will get the data and put it into a separate section of the cart
  $in_cart = $Cart->getCartId($product->getData('cart'));
?>
<!-- This section is used for styling and formatting of the look and feel within the system to the user -->
<section id="all-products">
  <div class="container">
    <!-- Using a custom font and font size for this section of text within the system -->
    <h4 class="font-poppins font-size-20">All Products</h4>
    <!-- Has a unique id that will be changed later when working with the css as well as some already existing classes that are already configured and ready for styling purposes-->
    <div id="filters" class="button-group text-right font-poppins font-size-16">
      <!-- This section is here to filter the products by section the * is a abbreviation for all so it will display all of the products once it has been clicked by the user when they use the system -->
      <button class="btn is-checked" data-filter="*">All</button>
      <?php
        array_map(function ($section){
          printf('<button class="btn" data-filter=".%s">%s</button>', $section, $section);
        }, $unique);
      ?>
    </div>

    <!-- This is the code responsible for the filtering of each of the individual sections within the system -->
    <div class="grid">
      <!-- This calls a function to the item and uses the in cart variable -->
      <?php array_map(function($item) use($in_cart){ ?>
      <!-- This is for the grid item of the section it also displays the item sections in this from if it cannot find anything form the database then it will display something similar that has been configured already -->
      <div class="grid-item border <?php echo $item['item_section'] ?? "Section"; ?>">
        <!-- This section is for the some of the styling of this section with regards to the width of the system and its contents -->
        <div class="item py-2" style="width: 200px;">
          <!-- A custom font that has already been imported is being used for this page and section of the system -->
          <div class="product font-poppins">
            <!-- This is the code that is responsible for displaying each of the individual products it users variables to ensure that each of the products within the database can be displayed without having to manually enter information when a new products wants to be added or removed from the system -->
            <a href="<?php printf('%s?item_id=%s', 'product.php', $item['item_id']) ?>"><img src="<?php echo $item['item_image'] ?? "./assets/case/Bequiet-Orange-Dark-Base-Pro-900-Full.webp"; ?>" alt="product1" class="img-fluid"></a>
            <!-- The contents are being centered within the page and system -->
            <div class="text-center">
              <!-- This code is used and has a variable to display the product name otherwise if it cannot do this then ti will show something else that is static and not from the database within the system -->
              <h6><?php echo $item['item_name'] ?? "Unknown"; ?></h6>
              <div class="price py-2">
                <!-- This is the section for the item price within the system and its page it will display the price of the product if it cannot then it will display something similar -->
                <span>£<?php echo $item['item_price'] ?? "0"; ?></span>
              </div>
              <form method="post">
                <!-- This is used to be able to show the get the item id for the product automatically and modualary rather than doing it manually each time if this cannot be found then it will display something similar within the system and its page -->
                <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1'; ?>">
                <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                <?php
                // This section is for the item id the array is set up to ensure that it is able to gather the item id from the item section of the database otherwise it will get nothing
                if (in_array($item['item_id'], $in_cart ?? [])){
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
      </div>
      <!-- This will shuffle the products and contents within the page of the system -->
    <?php }, $product_shuffle) ?>
    </div>
  </div>
</section>
