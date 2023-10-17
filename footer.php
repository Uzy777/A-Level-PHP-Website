<!-- End of the main section of the system -->
</main>

<!-- Start of the footer section has an id and some styling using the classes -->
<footer id="footer" class="bg-dark text-white py-5">
  <!-- Used with some styling to make it look presentable for the system and this section -->
  <div class="container">
    <!-- Used for styling purposes for the system and this section -->
    <div class="row">
      <!-- Used for styling purposes for the system and this section -->
      <div class="col-lg-3">
        <!-- Using the custom font that was imported and changing the size of the text to 20px -->
        <h4 class="font-poppins font-size-20">Epic Systems</h4>
        <!-- Using the custom font that was imported and changing the size of the text to 14px as well as making the text white by 50%  -->
        <p class="font-size-14 font-poppins text-white-50">Bringing to you the best components at affordable prices.</p>
      </div>


      <!-- Used for styling purposes for the system and this section -->
      <div class="col-lg-2 col-12">
        <!-- Using the custom font and the custom font size of 20px for this part of text -->
        <h4 class="font-poppins font-size-20">Quick Navigation</h4>
        <!-- Used for styling purposes for the system and this section -->
        <div class="d-flex flex-column flex-wrap">
          <!-- A hyper link for the system to take the user to the cart page also using the custom font and a font size of 14px as well as the text colour being white by 50% -->
          <a href="cart.php" class="font-poppins font-size-14 text-white-50 pb-1">Cart</a>
          <!-- A hyper link for the system to take the user to the customer register page also using the custom font and a font size of 14px as well as the text colour being white by 50% -->
          <a href="register/register.php" class="font-poppins font-size-14 text-white-50 pb-1">Register</a>
          <!-- A hyper link for the system to take the user to the customer login page also using the custom font and a font size of 14px as well as the text colour being white by 50% -->
          <a href="register/login.php" class="font-poppins font-size-14 text-white-50 pb-1">Login</a>
          <!-- A hyper link for the system to take the user to the home page also using the custom font and a font size of 14px as well as the text colour being white by 50% -->
          <a href="index.php" class="font-poppins font-size-14 text-white-50 pb-1">Home</a>
        </div>
      </div>

        <!-- The company's logo added to this section of the system -->
        <img src="assets/logo-trans.png" alt="logo" style="float:right; margin:0 0 0 100px; width:350px; height:350px;">

      </div>
    </div>
</footer>

<!-- Section of the copyright text with some styling classes to make it look better -->
<div class="copyright text-center bg-dark text-white py-2">
  <!-- Uses a customer font and font size of 14px as well as the code &copy; to bring up the copyright logo -->
  <p class="font-poppins font-size-14">&copy; Copyright 2020 Epic Systems</p>
</div>


<!-- Scripts being called for the implementation of ajax for the pricing of the cart and products -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

<!-- Scripts being called for the implementation of owl carousel to create the images so they can be swiped through as well as other functions of the system -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>

<!-- Scripts being called for the implementation of isotope to create a unique way of presenting and sorting all of the products for the system -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew==" crossorigin="anonymous"></script>

<!-- A location to some custom javascript for some implementations for the system -->
<script src="./index.js"></script>

</body>

</html>
