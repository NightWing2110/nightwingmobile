<?php
require_once "./templates/nightwingmobile/inc/header.php"
?>
<?php
require_once "./templates/nightwingmobile/inc/leftbar.php"
?>

<!-- catg header banner section -->
<div class="aa-catg-head-banner-area">
  <div class="container">
    <div class="aa-catg-head-banner-content">
      <h2>NIGHTWINGMOBILE</h2>
      <ol class="breadcrumb">
        <li><a href="index.php">HOME</a></li>
        <li><a href="product-list.php">PRODUCT</a></li>
        <li class="active">PRODUCT-DETAIL</li>
      </ol>
    </div>
  </div>
</div>
<!-- / catg header banner section -->

<!-- product category -->
<section id="aa-product-details">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <?php
        $queryProductDetail = "SELECT * FROM product WHERE product_id = {$_GET['product_id']}";
        $result = $mysqli->query($queryProductDetail);
        while ($arProductDetail = mysqli_fetch_assoc($result)) {
        ?>
          <div class="aa-product-details-area">
            <div class="aa-product-details-content">
              <div class="row">
                <!-- Modal view slider -->
                <div class="col-md-5 col-sm-5 col-xs-12">
                  <div class="aa-product-view-slider">
                    <img src="files/uploads/<?php echo $arProductDetail['picture'] ?>" alt="Product Image">
                  </div>
                </div>
                <!-- Modal view content -->
                <div class="col-md-7 col-sm-7 col-xs-12">
                  <div class="aa-product-view-content">
                    <form method="GET" action="cart.php">
                      <h3><?php echo $arProductDetail['name'] ?></h3>
                      <div class="aa-price-block">
                        <span class="aa-product-view-price"><?php echo $arProductDetail['price'] . '$' ?></span>
                        <p class="aa-product-avilability">Avilability: <span>In stock</span></p>
                      </div>
                      <div class="aa-prod-quantity">

                        <div class="action">
                          <input type="number" name="qty" value="1">
                          <input type="hidden" name="product_id" value="<?php echo $arProductDetail['product_id'] ?>">
                          <button class="btn" type="submit"><i class="fa fa-shopping-bag"></i>Buy Now</button>
                        </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="aa-product-details-bottom">
            <ul class="nav nav-tabs" id="myTab2">
              <li><a href="#description" data-toggle="tab">Description</a></li>
              <li><a href="#review" data-toggle="tab">Reviews</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
              <div class="tab-pane fade in active" id="description">
                <p><?php echo $arProductDetail['content'] ?></p>
              </div>
            <?php } ?>
            <!-- Comment -->
            <div class="tab-pane fade " id="review">
              <div class="row">
                <div class="col-lg-8">
                  <form id="form">
                    <div class="inputBox">
                      <div class="col-md-6">
                        <label for="name">Name:</label>
                        </br>
                        <input type="text" id="name" class="form-control" placeholder="Nhập tên của bạn" required>
                      </div>
                    </div>
                    <div class="inputBox">
                      <div class="col-md-8">
                        <label for="msg">Message:</label>
                        </br>
                        <textarea id="msg" class="form-control" rows="5" cols="35" placeholder="Đánh giá sản phẩm" required></textarea>
                      </div>
                    </div>
                    <button id="btn" class="btn btn-info">SEND</button>
                  </form>
                  </br>
                  <div id="content">
                  </div>
                </div>
              </div>
            </div>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script>
              $(document).ready(function() {
                function loadData() {
                  $.ajax({
                    url: 'select-data.php',
                    type: 'POST',
                    success: function(data) {
                      $("#content").html(data);
                    }
                  });
                }

                loadData();

                $("#btn").on("click", function(e) {
                  e.preventDefault();
                  var name = $("#name").val();
                  var msg = $("#msg").val();

                  $.ajax({
                    url: 'insert-data.php',
                    type: 'POST',
                    data: {
                      name: name,
                      msg: msg
                    },
                    success: function(data) {
                      if (data == 1) {
                        loadData();
                        alert('Comment success');
                        $("$form").trigger("reset");
                      } else {
                        alert("Comment failed");
                      }
                    }
                  });
                });
              });
            </script>
            </div>
          </div>
          <!-- Related product -->
          <div class="aa-product-related-item">
            <h3>Related Products</h3>
            <ul class="aa-product-catg aa-related-item-slider">
              <!-- start single product item -->
              <li>
                <figure>
                  <a class="aa-product-img" href="#"><img src="templates/nightwingmobile/img/women/girl-1.png" alt="polo shirt img"></a>
                  <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                  <figcaption>
                    <h4 class="aa-product-title"><a href="#">This is Title</a></h4>
                    <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                  </figcaption>
                </figure>
                <div class="aa-product-hvr-content">
                  <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                  <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                  <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                </div>
                <!-- product badge -->
                <span class="aa-badge aa-sale" href="#">SALE!</span>
              </li>
            </ul>
            <!-- quick view modal -->
            <div class="modal fade" id="quick-view-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <div class="row">
                      <!-- Modal view slider -->
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="aa-product-view-slider">
                          <div class="simpleLens-gallery-container" id="demo-1">
                            <div class="simpleLens-container">
                              <div class="simpleLens-big-image-container">
                                <a class="simpleLens-lens-image" data-lens-image="img/view-slider/large/polo-shirt-1.png">
                                  <img src="templates/nightwingmobile/img/view-slider/medium/polo-shirt-1.png" class="simpleLens-big-image">
                                </a>
                              </div>
                            </div>
                            <div class="simpleLens-thumbnails-container">
                              <a href="#" class="simpleLens-thumbnail-wrapper" data-lens-image="templates/nightwingmobile/img/view-slider/large/polo-shirt-1.png" data-big-image="templates/nightwingmobile/img/view-slider/medium/polo-shirt-1.png">
                                <img src="templates/nightwingmobile/img/view-slider/thumbnail/polo-shirt-1.png">
                              </a>
                              <a href="#" class="simpleLens-thumbnail-wrapper" data-lens-image="templates/nightwingmobile/img/view-slider/large/polo-shirt-3.png" data-big-image="templates/nightwingmobile/img/view-slider/medium/polo-shirt-3.png">
                                <img src="templates/nightwingmobile/img/view-slider/thumbnail/polo-shirt-3.png">
                              </a>

                              <a href="#" class="simpleLens-thumbnail-wrapper" data-lens-image="templates/nightwingmobile/img/view-slider/large/polo-shirt-4.png" data-big-image="templates/nightwingmobile/img/view-slider/medium/polo-shirt-4.png">
                                <img src="templates/nightwingmobile/img/view-slider/thumbnail/polo-shirt-4.png">
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div>
            <!-- / quick view modal -->
          </div>
      </div>
    </div>
  </div>
  </div>
</section>
<!-- / product category -->
<?php
require_once "./templates/nightwingmobile/inc/footer.php"
?>