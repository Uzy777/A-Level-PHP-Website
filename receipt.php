<?php
  ob_start();
  // Include header.php file
  include('header.php');
?>


<!-- Start Shopping Cart -->
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        if (isset($_POST['remove-from-cart'])){
            $deletedrecord = $Cart->deleteCart($_POST['item_id']);
        }
      }

?>

<section id="cart" class="py-3">
  <div class="container-fluid w-75">
    <h5 class="font-poppins font-size-20">Recipet Of Order</h5>
    <h5 class="font-poppins font-size-20">Thank your for ordering with Epic Systems!</h5>


    <!--  Start Shopping Cart Items   -->
    <div class="row">
      <div class="col-sm-9">
        <?php
          foreach ($product->getData('cart') as $item):
            $cart = $product->getProduct($item['item_id']);
            $subTotal[] = array_map(function ($item){
        ?>
        <!-- Start Cart Item -->
        <div class="row border-top py-3 mt-3">
          <div class="col-sm-2">
            <img src="<?php echo $item['item_image'] ?? "./assets/case/Bequiet-Orange-Dark-Base-Pro-900-Full.webp" ?>" style="height: 120px;" alt="cart1" class="img-fluid">
          </div>
          <div class="col-sm-8">
            <h5 class="font-poppins font-size-20"><?php echo $item['item_name'] ?? "Unknown"; ?></h5>
            <small>by <?php echo $item['item_section'] ?? "Section"; ?></small>


          </div>

          <div class="col-sm-2 text-right">
            <div class="font-size-20 text-danger font-poppins">
              £<span class="product_price" data-id="<?php echo $item['item_id'] ?? '0'; ?>"><?php echo $item['item_price'] ?? 0; ?></span>
            </div>
          </div>
        </div>
        <!-- End Cart Item -->
        <?php
          return $item['item_price'];
          }, $cart); // Closing array_map Function
          endforeach;
        ?>

      </div>
      <!-- Start Subtotal -->
      <div class="col-sm-3">
        <div class="sub-total border text-center mt-2">
          <div class="border-top py-4">
            <h5 class="font-poppins font-size-20">Total (<?php echo isset($subTotal) ? count($subTotal): 0; ?> item):&nbsp; <span class="text-danger">£<span class="text-danger" id="deal-price"><?php echo isset($subTotal) ? $Cart->getSum($subTotal): 0; ?></span> </span> </h5>
            <form method="post">
              <input type="hidden" value="<?php echo $item['item_id'] ?? 0; ?>" name="item_id">

            </form>
          </div>
        </div>
      </div>
      <!-- End Subtotal-->
    </div>
    <!--  End Shopping Cart Items -->
  </div>
</section>
<!-- End Shopping Cart -->
<?php
  // Include footer.php file
  include('footer.php');
?>
