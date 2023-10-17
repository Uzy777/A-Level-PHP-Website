<!-- This is the about section which is called using PHP -->
<!-- I have given this section a id so it can easily be styled -->
<section id="blogs">
  <div class="container py-4">
    <!-- Using a custom font that was imported and a font size class of 20px -->
    <h4 class="font-poppins font-size-20">About Epic Systems</h4>
    <hr>

    <!-- Using the owl carousel module and theming for this div -->
    <div class="owl-carousel owl-theme">
      <div class="item">
        <!-- Styling  this section with a border of 0 custom font and a margin to the right by 5 styling as been given to ensure the width is only 18rem -->
        <div class="card border-0 font-poppins margin-right-5" style="width: 18rem">
          <!-- Using a class for the font size and the cart title so it can be styled -->
          <h5 class="card-title font-size-16">What We Do</h5>
          <!-- The source and location of the image that is being used for this section -->
          <img src="./assets/about/1.jpeg" alt="cart image" class="card-img-top">
          <!-- Some text that is styled with the classes with a custom font size of 14px and the text being black by 50% -->
          <p class="card-text font-size-14 text-black-50 py-1">Specialising in Computer Hardware we are here to bring you with the best prices for components to suit your building needs.</p>
        </div>
      </div>

      <div class="item">
        <!-- Styling  this section with a border of 0 custom font and a margin to the right by 5 styling as been given to ensure the width is only 18rem -->
        <div class="card border-0 font-poppins margin-right-5" style="width: 18rem">
          <!-- Using a class for the font size and the cart title so it can be styled -->
          <h5 class="card-title font-size-16">How To Purchase</h5>
          <!-- The source and location of the image that is being used for this section -->
          <img src="./assets/about/2.jpeg" alt="cart image" class="card-img-top">
          <!-- Some text that is styled with the classes with a custom font size of 14px and the text being black by 50% -->
          <p class="card-text font-size-14 text-black-50 py-1">Simply select the components you require and add them to your basket. Which you can then view and make any adjustments. With finally entering your details at the checkout so it can be sent out to you as soon as possible.</p>
          <!-- A hyperlink for the text that is styled which takes the user to the cart page of the system -->
          <a href="./cart.php" class="color-second text-left">Cart</a>
        </div>
      </div>

      <div class="item">
        <!-- Styling  this section with a border of 0 custom font and a margin to the right by 5 styling as been given to ensure the width is only 18rem -->
        <div class="card border-0 font-poppins margin-right-5" style="width: 18rem">
          <!-- Using a class for the font size and the cart title so it can be styled -->
          <h5 class="card-title font-size-16">New Products</h5>
          <!-- The source and location of the image that is being used for this section -->
          <img src="./assets/about/3.jpeg" alt="cart image" class="card-img-top">
          <!-- Some text that is styled with the classes with a custom font size of 14px and the text being black by 50% -->
          <p class="card-text font-size-14 text-black-50 py-1">The latest and greatest tech is always being added to the website to ensure you are with the latest technology available at that point in time.</p>
          <!-- A hyperlink for the text that is styled which takes the user to the all products section on the main page of the system -->
          <a href="#all-products" class="color-second text-left">All Products</a>
        </div>
      </div>
    </div>
  </div>
</section>
