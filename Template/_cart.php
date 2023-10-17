<!-- Request method post from the database server -->
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        if (isset($_POST['remove-from-cart'])){
            // Will delete the record from the cart once active it is done from the specific id
            $deletedrecord = $Cart->deleteCart($_POST['item_id']);
        }
      }

?>

<!-- This section is for the cart within the system -->
<section id="cart" class="py-3">
  <div class="container-fluid w-75">
    <!-- Using a custom font and font size for this part of the text -->
    <h5 class="font-poppins font-size-20">Shopping Cart</h5>

    <!-- This section is for the shopping cart items -->
    <div class="row">
      <div class="col-sm-9">
        <?php
          // Foreach of the products it will get the data and add it to the cart as the variable of item
          foreach ($product->getData('cart') as $item):
            $cart = $product->getProduct($item['item_id']);
            // The subtotal cost is then calculated using ajax and shown to the user within the system and its page
            $subTotal[] = array_map(function ($item){
        ?>
        <!-- This section is for the cart item for the system -->
        <div class="row border-top py-3 mt-3">
          <div class="col-sm-2">
            <!-- This section of the code is responsible for getting the product id as well as the appropriate details such as the image so it can be displayed to the user incase no image can be added from the database the it will get the static image from the contents -->
            <img src="<?php echo $item['item_image'] ?? "./assets/case/Bequiet-Orange-Dark-Base-Pro-900-Full.webp" ?>" style="height: 120px;" alt="cart1" class="img-fluid">
          </div>
          <div class="col-sm-8">
            <!-- This section is used to be able to get and show to the user the name of the product it will get the information from the database however if it is unable to do this then it will provide text saying Unknown -->
            <h5 class="font-poppins font-size-20"><?php echo $item['item_name'] ?? "Unknown"; ?></h5>
            <!-- This part is used to be able to get and show to the user the section of the product it will get the information from the database however if it is unable to do this then it will provide something different in its place -->
            <small>by <?php echo $item['item_section'] ?? "Section"; ?></small>


            <!-- This section is for the product qty within the system and the page -->
            <div class="qty d-flex pt-2">
              <!-- Using a custom font and for this part of the section of the system -->
              <div class="d-flex font-poppins w-25">
                <!-- This part is in place to be able to get information from the database about a certain field if it can't do this then it will show the user of the system something else in its place -->
                <button class="qty-up border bg-light" data-id="<?php echo $item['item_id'] ?? '0'; ?>"><i class="fas fa-angle-up"></i></button>
                <!-- This part is in place to be able to get information from the database about a certain field if it can't do this then it will show the user of the system something else in its place -->
                <input type="text" data-id="<?php echo $item['item_id'] ?? '0'; ?>" class="qty_input border px-2 w-100 bg-light" disabled value="1" placeholder="1">
                <!-- This part is in place to be able to get information from the database about a certain field if it can't do this then it will show the user of the system something else in its place -->
                <button data-id="<?php echo $item['item_id'] ?? '0'; ?>" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
              </div>

              <form method="post">
                <input type="hidden" value="<?php echo $item['item_id'] ?? 0; ?>" name="item_id">
                <button type="submit" name="remove-from-cart" class="btn font-poppins text-danger px-3 border-right">Remove</button>

              </form>
<!--                  <button type="submit" class="btn font-poppins text-danger">Save for Later</button> -->
            </div>

          </div>

          <div class="col-sm-2 text-right">
            <div class="font-size-20 text-danger font-poppins">
              <!-- This part is in place to be able to get information from the database about a certain field if it can't do this then it will show the user of the system something else in its place -->
              £<span class="product_price" data-id="<?php echo $item['item_id'] ?? '0'; ?>"><?php echo $item['item_price'] ?? 0; ?></span>
            </div>
          </div>
        </div>
        <?php
          // Will return the price of the product from the cart then it will end
          return $item['item_price'];
        }, $cart); // Closing array_map function
          endforeach;
        ?>

      </div>
      <!-- Start of the subtotal section within the system -->
      <div class="col-sm-3">
        <div class="sub-total border text-center mt-2">
          <!-- A custom font and font size and some styling has been used in the form of class as well as a custom icon that had already been imported with a module -->
          <h6 class="font-size-12 font-poppins text-success py-3"><i class="fas fa-check"></i> Your order is eligible for FREE Delivery.</h6>
          <div class="border-top py-4">
            <!-- This section is used to be able to get a subtotal for the overall cart and its contents it uses ajax and some variables to perform this accurately -->
            <h5 class="font-poppins font-size-20">Subtotal (<?php echo isset($subTotal) ? count($subTotal): 0; ?> item):&nbsp; <span class="text-danger">£<span class="text-danger" id="deal-price"><?php echo isset($subTotal) ? $Cart->getSum($subTotal): 0; ?></span> </span> </h5>
            <!-- This button takes the user to another page within the system -->
            <a href="./checkout/checkout.php"><button type="submit" class="btn btn-warning mt-3">Proceed to Buy</button></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
