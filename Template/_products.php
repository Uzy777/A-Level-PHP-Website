<!-- This is the start of this section -->
<?php
  // This variable is used to be able to get the item id from the database
  $item_id = $_GET['item_id'] ?? 1;
  // Foreach of the products it will get data as the variable of item
  foreach ($product->getData() as $item):
    if ($item['item_id'] == $item_id):
?>
    <section id="product" class="py-3">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <!-- The image that is shown to the user when they click on the product gets it from the database otherwise it will show a static image -->
            <img src="<?php echo $item['item_image'] ?? "./assets/case/Bequiet-Orange-Dark-Base-Pro-900-Full.webp" ?>" alt="product" class="img-fluid">
            <div class="form-row pt-4 font-size-16 font-baloo">
              <div class="col">
                <button type="submit" class="btn btn-danger form-control">####</button>
              </div>
              <div class="col">
                <!-- Ability to the product to the cart for the user to view later -->
                <form method="post">
                  <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1'; ?>">
                  <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                <?php
                  if (in_array($item['item_id'], $Cart->getCartId($product->getData('cart')) ?? [])){
                    echo '<button type="submit" disabled class="btn btn-success font-size-16 form-control">In the Cart</button>';
                  }else{
                    echo '<button type="submit" name="top_sale_submit" class="btn btn-warning font-size-16 form-control">Add to Cart</button>';
                }
                ?>
              </form>

              </div>
            </div>
          </div>
          <div class="col-sm-6 py-5">
            <!-- The item name from the database table otherwise it will show otherwise to the user -->
            <h5 class="font-baloo font-size-20"><?php echo $item['item_name'] ?? "Unknown"; ?></h5>
            <!-- Gets the item section for the user and the product other it will show otherwise to the user -->
            <small>by <?php echo $item['item_section'] ?? "Section"; ?></small>
            <hr class="m-0">

            <!-- Individual product price for the page and system -->
            <table class="my-3">
              <tr class="font-rale font-size-14">
                <td>RRP:</td>
                <td><strike>£162.00</strike></td>
              </tr>
              <tr class="font-rale font-size-14">
                <td>Price:</td>
                <td class="font-size-20 text-danger">£<span><?php echo $item['item_price'] ?? 0; ?></span><small class="text-dark font-size-12">&nbsp;&nbsp;Inclusive of all taxes</small></td>
              </tr>
              <tr class="font-rale font-size-14">
                <td>You Save:</td>
                <td><span class="font-size-16 text-danger">£152.00</span></td>
              </tr>
            </table>

            <!-- Policy section for the page and system -->
            <div id="policy">
              <div class="d-flex">
                <div class="return text-center mr-5">
                  <div class="font-size-20 my-2 color-second">
                    <span class="fas fa-retweet border p-3 rounded-pill"></span>
                  </div>
                  <a href="#" class="font-rale font-size-12">30 Days <br> Return</a>
                </div>
                <div class="return text-center mr-5">
                  <div class="font-size-20 my-2 color-second">
                    <span class="fas fa-truck  border p-3 rounded-pill"></span>
                  </div>
                  <a href="#" class="font-rale font-size-12">Fast <br>Delivery</a>
                </div>
                <div class="return text-center mr-5">
                  <div class="font-size-20 my-2 color-second">
                    <span class="fas fa-check-double border p-3 rounded-pill"></span>
                  </div>
                  <a href="#" class="font-rale font-size-12">1 Year <br>Warranty</a>
                </div>
              </div>
            </div>
            <hr>

            <!-- Order details section for the page and system -->
            <div id="order-details" class="font-rale d-flex flex-column text-dark">
              <small>Delivery by : #### ####</small>
              <!--              <small>Sold by <a href="#">Daily Electronics </a>(4.5 out of 5 | 18,198 ratings)</small> -->
              <!--              <small><i class="fas fa-map-marker-alt color-primary"></i>&nbsp;&nbsp;Deliver to Customer - 424201</small> -->
            </div>

            <!-- Colour section for the page and system -->
            <div class="row">
              <div class="col-6">
                <!--                <div class="color my-3">
                  <div class="d-flex justify-content-between">
                    <h6 class="font-baloo">Color:</h6>
                    <div class="p-2 color-yellow-bg rounded-circle"><button class="btn font-size-14"></button></div>
                    <div class="p-2 color-primary-bg rounded-circle"><button class="btn font-size-14"></button></div>
                    <div class="p-2 color-second-bg rounded-circle"><button class="btn font-size-14"></button></div>
                  </div>
              </div>

              <div class="col-6">
                <!-- This is for the quanity section of the page and system -->
                <div class="qty d-flex">
                  <h6 class="font-baloo">Qty</h6>
                  <div class="px-4 d-flex font-rale">
                    <button class="qty-up border bg-light" data-id="pro1"><i class="fas fa-angle-up"></i></button>
                    <input type="text" data-id="pro1" class="qty_input border px-2 w-50 bg-light" disabled value="1" placeholder="1">
                    <button data-id="pro1" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                  </div>
                </div>
              </div>
            </div>

            <div class="size my-3">
              <hr>
              <br>
              <!--              <h6 class="font-baloo">Size :</h6>
              <div class="d-flex justify-content-between w-75">
                <div class="font-rubik border p-2">
                  <button class="btn p-0 font-size-14">###</button>
                </div>
                <div class="font-rubik border p-2">
                  <button class="btn p-0 font-size-14">###</button>
                </div>
                <div class="font-rubik border p-2">
                  <button class="btn p-0 font-size-14">###</button>
                </div> -->
            </div>
          </div>
        </div>
        <br>

        <div class="col-12">
          <h6 class="font-rubik">Product Description</h6>
          <hr>
          <!-- This variable will get that specific product description so it can be displayed to the user otherwise it will get otherwise -->
          <p class="font-rale font-size-14"><?php echo $item['item_desc'] ?? '0'; ?></p>
        </div>
      </div>
      </div>
    </section>

<?php
  // Closing code for this section of the system
  endif;
  endforeach;
?>
