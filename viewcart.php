<?php
require_once "./templates/nightwingmobile/inc/header.php"
?>
<?php
require_once "./templates/nightwingmobile/inc/leftbar.php"
?>
<?php
// echo "<pre>";
// print_r($cart);
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
                                            <th>STT</th>
                                            <th>Product Name</th>
                                            <th>Picture</th>
                                            <th>Number</th>
                                            <th>Price</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($cart as $key => $value) : ?>
                                            <tr>
                                                <td><?php echo $key++ ?></td>
                                                <td><?php echo $value['name'] ?></td>
                                                <td><img src="files/uploads/<?php echo $value['picture'] ?>" alt="" width="100px"></td>
                                                <form action="cart.php">
                                                    <input type="hidden" name="action" value="update">
                                                    <input type="hidden" name="product_id" value="<?php echo $value['product_id'] ?>">
                                                    <td><input type="text" name="qty" value="<?php echo $value['qty'] ?>">
                                                        <button type="submit">Update</button>
                                                </form>
                                                </td>
                                                <td><?php echo number_format($value['price'] * $value['qty']); ?> VNĐ</td>
                                                <td><a href="cart.php?product_id=<?php echo $value['product_id'] ?>&action=delete" title="" class="btn btn-danger">Delete</a></td>
                                            </tr>
                                        <?php endforeach ?>
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
                                        <th>Total</th>
                                        <td><?php echo number_format(total_price($cart))?>VNĐ</td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="checkout.php?product_id=<?php echo $value['product_id']?>" class="aa-cart-view-btn">Proced to Checkout</a>
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