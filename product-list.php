<?php
require_once "./templates/nightwingmobile/inc/header.php"
?>
<?php
require_once "./templates/nightwingmobile/inc/leftbar.php"
?>
<?php
$row_count = 10;
$query1 = mysqli_query($mysqli, "SELECT * FROM product");
$tongsodong = mysqli_num_rows($query1);
$sotrang = ceil($tongsodong / $row_count);
if (isset($_GET['page'])) {
  $curent_page = $_GET['page'];
} else {
  $curent_page = 1;
}
$offset = ($curent_page - 1) * $row_count;
?>


<!-- product category -->
<section id="aa-product-category">
  <div class="container">
    <div class="row">
      <div class="col-lg-9 col-md-9 col-sm-8 col-md-push-3">
        <div class="aa-product-catg-content">
          <div class="aa-product-catg-head">
            <div class="aa-product-catg-head-left">
              <form action="" class="aa-sort-form">
                <label for="">Sort by</label>
                <select name="">
                  <option value="1" selected="Default">Default</option>
                  <option value="2">Name</option>
                  <option value="3">Price</option>
                  <option value="4">Date</option>
                </select>
              </form>
              <form action="" class="aa-show-form">
                <label for="">Show</label>
                <select name="">
                  <option value="1" selected="12">12</option>
                  <option value="2">24</option>
                  <option value="3">36</option>
                </select>
              </form>
            </div>
            <div class="aa-product-catg-head-right">
              <a id="grid-catg" href="#"><span class="fa fa-th"></span></a>
              <a id="list-catg" href="#"><span class="fa fa-list"></span></a>
            </div>
          </div>
          <div class="aa-product-catg-body">
            <ul class="aa-product-catg">
              <!-- start single product item -->
              <?php
              $query = "SELECT * FROM product LIMIT $offset,$row_count";
              $result = $mysqli->query($query);
              while ($arProduct = mysqli_fetch_assoc($result)) {
              ?>
                <li>
                  <figure>
                    <a class="aa-product-img" href="#"><img src="files/uploads/<?php echo $arProduct['picture'] ?>" alt="polo shirt img"></a>
                    <a class="aa-add-card-btn" href="cart.php?product_id=<?php echo $arProduct['product_id'] ?>"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                    <figcaption>
                      <h4 class="aa-product-title"><a href="#"><?php echo $arProduct['name'] ?></a></h4>
                      <span class="aa-product-price"><?php echo number_format($arProduct['price']) ?></span>
                      <p class="aa-product-descrip">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam accusamus facere iusto, autem soluta amet sapiente ratione inventore nesciunt a, maxime quasi consectetur, rerum illum.</p>
                    </figcaption>
                  </figure>
                  <div class="aa-product-hvr-content">
                    <a href="product-detail.php?product_id=<?php echo $arProduct['product_id'] ?>" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                    <a href="product-detail.php?product_id=<?php echo $arProduct['product_id'] ?>" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                    <a href="product-detail.php?product_id=<?php echo $arProduct['product_id'] ?>"><i class="fa fa-search"></i></a>
                  </div>
                  <!-- product badge -->
                  <span class="aa-badge aa-sale" href="#">SALE!</span>
                </li>
              <?php } ?>
            </ul>
          </div>
          <div class="aa-product-catg-pagination">
            <nav>
              <ul class="pagination">
                <?php
                for ($i = 1; $i <= $sotrang; $i++) {
                  $active = '';
                  if ($i == $curent_page) {
                    $active = 'active';
                  }
                ?>
                  <li><a href="product-list.php?page=<?php echo $i ?>"><?php echo 'PAGE' . $i ?></a></li>
                <?php } ?>
              </ul>
            </nav>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-4 col-md-pull-9">
        <aside class="aa-sidebar">
          <!-- single sidebar -->
          <div class="aa-sidebar-widget">
            <h3>Category</h3>
            <ul class="aa-catg-nav">
              <li><a href="product/cellphone.php">CELLPHONE</a></li>
              <li><a href="product/wristwatch.php">WRISTWATCH</a></li>
              <li><a href="product/tablet.php">TABLET</a></li>
              <li><a href="product/laptop.php">LAPTOP</a></li>
            </ul>
          </div>
        </aside>
      </div>
    </div>
  </div>
</section>
<!-- / product category -->
<?php
require_once "./templates/nightwingmobile/inc/footer.php"
?>