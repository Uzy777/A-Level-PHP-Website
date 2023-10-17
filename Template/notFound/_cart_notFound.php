<!-- This is the section for the page that will display if the cart is empty -->
<section id="cart" class="py-3">
  <div class="container-fluid w-75">
    <!-- Using a custom font and a custom font size to change the aesthetics of the text within the system and its page -->
    <h5 class="font-poppins font-size-20">Shopping Cart</h5>

    <!--  This section is the way that the empty cart is displayed   -->
    <div class="row">
      <div class="col-sm-9">
        <!-- Start Empty Cart -->
        <div class="row border-top py-3 mt-3">
          <div class="col-sm-12 text-center py-2">
            <!-- Image source that is used for the page to show that the cart is empty -->
            <img src="./assets/cart_empty.jpeg" alt="Empty Cart" class="img-fluid" style="height:200px;">
            <!-- Using a custom font and a custom font size to change the aesthetics of the text within the system and its page -->
            <p class="font-poppins font-size-16 text-black-50">Empty Cart</p>
          </div>
        </div>

      </div>
      <!-- This section is for the subtotal of the page within the system -->
      <div class="col-sm-3">
        <div class="sub-total border text-center mt-2">
          <!-- Using a custom font and a custom font size to change the aesthetics of the text within the system and its page -->
          <h6 class="font-size-12 font-poppins text-success py-3"><i class="fas fa-check"></i> Your order is eligible for FREE Delivery.</h6>
          <div class="border-top py-4">
            <!-- Using a custom font and a custom font size to change the aesthetics of the text within the system and its page -->
            <h5 class="font-poppins font-size-20">Subtotal (<?php
            // This part will check the contents of the variable subTotal and then will count and display that information if it cannot then it will display the number 0 instead
            echo isset($subTotal) ? count($subTotal): 0; ?> item):&nbsp; <span class="text-danger">£<span class="text-danger" id="deal-price"><?php
            // This part will check to see if the subTotal of the page has anything and then will get that information adding up the total of the cart using the variables for it
            echo isset($subTotal) ? $Cart->getSum($subTotal): 0; ?></span> </span> </h5>
            <!-- A button for the user to press and continue to the next page for purchasing of the products they have ordered -->
            <button type="submit" class="btn btn-warning mt-3">Proceed to Buy</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
