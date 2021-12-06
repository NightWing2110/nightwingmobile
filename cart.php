<?php
require_once "./templates/nightwingmobile/inc/header.php"
?>
<?php
require_once "./templates/nightwingmobile/inc/leftbar.php"
?>


<!-- Cart view section -->
<section id="cart-view">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="cart-view-area">
          <div class="cart-view-table">
            <form action="">
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th></th>
                      <th></th>
                      <th>Product</th>
                      <th>Price</th>
                      <th>Quantity</th>
                      <th>Total</th>
                    </tr>
                  </thead>
                  <tbody class="align-middle">
                  <?php
                  if (isset($_GET['product_id'])) {
                    $product_id = $_GET['product_id'];
                  }
                  $action = (isset($_GET['action'])) ? $_GET['action'] : 'add';
                  $qty = (isset($_GET['qty'])) ? $_GET['qty'] : 1;
                  if ($qty <= 0) {
                    $qty = 1;
                  }
                  //  session_destroy();
                  //  die();
                  //  echo $action;
                  //  var_dump($action);
                  //       die();

                  $query = mysqli_query($mysqli, "SELECT * FROM product WHERE product_id = $product_id");
                  if ($query) {
                    $product = mysqli_fetch_assoc($query);
                  }
                  $item = [
                    'product_id' => $product['product_id'],
                    'name' => $product['name'],
                    'picture' => $product['picture'],
                    'price' => $product['price'],
                    'qty' => $qty
                  ];
                  if ($action == 'add') {
                    // Thêm mới giỏ hàng
                    if (isset($_SESSION['cart'][$product_id])) {
                      $_SESSION['cart'][$product_id]['qty'] += $qty;
                    } else {
                      $_SESSION['cart'][$product_id] = $item;
                    }
                  }
                  // Cập nhật giỏ hàng
                  if($action == 'update'){
                    $_SESSION['cart'][$product_id]['qty'] = $qty;
                }
                  //Xóa sản phẩm trong giỏ hàng
                  if ($action == 'delete') {
                    unset($_SESSION['cart'][$product_id]);
                  }
                  header('location: viewcart.php');
                  echo "<pre>";
                  print_r($_SESSION['cart']);
                  echo "</pre>";
                  ?>
                  </tbody>
                </table>
              </div>
            </form>
            <!-- Cart Total view -->
            <div class="cart-view-total">
              <h4>Cart Totals</h4>
              <table class="aa-totals-table">
                <tbody>
                  <tr>
                    <th>Subtotal</th>
                    <td>$450</td>
                  </tr>
                  <tr>
                    <th>Total</th>
                    <td>$450</td>
                  </tr>
                </tbody>
              </table>
              <a href="#" class="aa-cart-view-btn">Proced to Checkout</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- / Cart view section -->
<?php
require_once "./templates/nightwingmobile/inc/footer.php"
?>