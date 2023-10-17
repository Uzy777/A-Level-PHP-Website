<?php
	// Used for the system to work correctly
	require 'config.php';

	$grand_total = 0;
	$allItems = '';
	$items = [];

	// The SQL variable that forms a query to the database when run
	$sql = "SELECT CONCAT(item_name, '(',qty,')') AS ItemQty, total_price FROM cart";
	$stmt = $conn->prepare($sql);
	// Executing a statement for the system
	$stmt->execute();
	// Getting the results for the system
	$result = $stmt->get_result();
	while ($row = $result->fetch_assoc()) {
	  $grand_total += $row['total_price'];
	  $items[] = $row['ItemQty'];
	}
	$allItems = implode(', ', $items);
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- The unicode for the system -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Scaling of the content produced by the system -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- The title for the system -->
	<title>Checkout</title>
	<!-- Implementing bootstrap for the navigation menu of the system -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
	<!-- Implementing font awesome icons for some unique icons to be used for the system -->
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
</head>

<body>
  <nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <!-- Brand -->
    <a class="navbar-brand" href="../index.php">&nbsp;&nbsp;Epic Systems</a>
    <!-- Toggler/collapsible Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Navbar links -->

  </nav>

	<!-- This section is for the formation and styling of the page as well as the implementation of php to make things automated and efficient -->
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6 px-4 pb-4" id="order">
        <h4 class="text-center text-info p-2">Complete your order!</h4>
        <div class="jumbotron p-3 mb-2 text-center">
					<!-- Displaying the products that have been checked out by the user and the system -->
          <h6 class="lead"><b>Product(s) : </b><?= $allItems; ?></h6>
          <h6 class="lead"><b>Delivery Charge : </b>Free</h6>
					<!-- A variable that already calculates the total that the user has to pay for the products so they are aware of what they are paying -->
          <h5><b>Total Amount Payable : </b><?= number_format($grand_total,2) ?>/-</h5>
        </div>
        <form action="" method="post" id="placeOrder">
					<!-- Listing the products the user wants to purchase at the checkout -->
          <input type="hidden" name="products" value="<?= $allItems; ?>">
					<!-- Listing the total the user has to pay for the products at the checkout -->
          <input type="hidden" name="grand_total" value="<?= $grand_total; ?>">
          <div class="form-group">
						<!-- Details that are required to get the products to the user safely -->
            <input type="text" name="name" class="form-control" placeholder="Enter Name" required>
          </div>
          <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Enter E-Mail" required>
          </div>
          <div class="form-group">
            <input type="tel" name="phone" class="form-control" placeholder="Enter Phone" required>
          </div>
          <div class="form-group">
            <textarea name="address" class="form-control" rows="3" cols="10" placeholder="Enter Delivery Address Here..."></textarea>
          </div>
          <h6 class="text-center lead">Select Payment Mode</h6>
          <div class="form-group">
            <select name="pmode" class="form-control">
              <option value="" selected disabled>-Select Payment Mode-</option>
              <option value="cod">Cash On Delivery</option>
              <option value="netbanking">Net Banking</option>
              <option value="cards">Debit/Credit Card</option>
            </select>
          </div>
          <div class="form-group">
						<!-- Once they click on this the order is made and added to the database of the system -->
            <input type="submit" name="submit" value="Place Order" class="btn btn-danger btn-block">
						<!-- This button takes the user to the home page of the system incase they want to go back -->
						<a class="btn btn-lg btn-primary btn-block" href="../index.php">Home</a>
          </div>
        </form>
      </div>
    </div>
  </div>

	<!-- Scripts being called for the implementation of ajax for the pricing of the cart and products -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>

  <script type="text/javascript">
  $(document).ready(function() {

    // Sending form data to the server and its database within the system
    $("#placeOrder").submit(function(e) {
      e.preventDefault();
      $.ajax({
        url: 'action.php',
        method: 'post',
        data: $('form').serialize() + "&action=order",
        success: function(response) {
          $("#order").html(response);
        }
      });
    });

    // Load total number of items added in the cart and display in the navbar
    load_cart_item_number();

    function load_cart_item_number() {
      $.ajax({
        url: 'action.php',
        method: 'get',
        data: {
          cartItem: "cart_item"
        },
        success: function(response) {
          $("#cart-item").html(response);
        }
      });
    }
  });
  </script>
</body>

</html>
