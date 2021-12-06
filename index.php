<?php
require_once "./templates/nightwingmobile/inc/header.php"
?>
<?php
require_once "./templates/nightwingmobile/inc/leftbar.php"
?>
<?php
if (isset($_GET['msg']) && $_GET['msg']) {
    echo $_GET['msg'];
}
?>
<!-- Start slider -->
<section id="aa-slider">
    <div class="aa-slider-area">
        <div id="sequence" class="seq">
            <div class="seq-screen">
                <ul class="seq-canvas">
                    <!-- single slide item -->
                    <li>
                        <div class="seq-model">
                            <img data-seq src="templates/nightwingmobile/img/slider/iphone.jpg" alt="Men slide img" />
                        </div>
                        <div class="seq-title">
                            <span data-seq>Save Up to 75% Off</span>
                            <h2 data-seq>IPHONE 12 SERIES</h2>
                            <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">Mua Ngay</a>
                        </div>
                    </li>
                    <!-- single slide item -->
                    <li>
                        <div class="seq-model">
                            <img data-seq src="templates/nightwingmobile/img/slider/Wristwatch.jpg" alt="Wristwatch slide img" />
                        </div>
                        <div class="seq-title">
                            <span data-seq>Save Up to 40% Off</span>
                            <h2 data-seq>Wristwatch Collection</h2>
                            <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">Mua Ngay</a>
                        </div>
                    </li>
                    <!-- single slide item -->
                    <li>
                        <div class="seq-model">
                            <img data-seq src="templates/nightwingmobile/img/slider/ipad.jpg" alt="Women Jeans slide img" />
                        </div>
                        <div class="seq-title">
                            <span data-seq>Save Up to 75% Off</span>
                            <h2 data-seq>IPAD</h2>
                            <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">Mua Ngay</a>
                        </div>
                    </li>
                    <!-- single slide item -->
                    <li>
                        <div class="seq-model">
                            <img data-seq src="templates/nightwingmobile/img/slider/samsung fold.jpg" alt="Shoes slide img" />
                        </div>
                        <div class="seq-title">
                            <span data-seq>Save Up to 75% Off</span>
                            <h2 data-seq>SAMSUNG FOLD2</h2>
                            <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">Mua Ngay</a>
                        </div>
                    </li>
                    <!-- single slide item -->
                    <li>
                        <div class="seq-model">
                            <img data-seq src="templates/nightwingmobile/img/slider/laptop.jpg" alt="Male Female slide img" />
                        </div>
                        <div class="seq-title">
                            <span data-seq>Save Up to 40% Off</span>
                            <h2 data-seq>Ecosystem Apple</h2>
                            <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">Mua Ngay</a>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- slider navigation btn -->
            <fieldset class="seq-nav" aria-controls="sequence" aria-label="Slider buttons">
                <a type="button" class="seq-prev" aria-label="Previous"><span class="fa fa-angle-left"></span></a>
                <a type="button" class="seq-next" aria-label="Next"><span class="fa fa-angle-right"></span></a>
            </fieldset>
        </div>
    </div>
</section>
<!-- / slider -->
<!-- Start Promo section -->
<section id="aa-promo">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-promo-area">
                    <div class="row">
                        <!-- promo left -->
                        <div class="col-md-5 no-padding">
                            <div class="aa-promo-left">
                                <div class="aa-promo-banner">
                                    <img src="templates/nightwingmobile/img/banner-iphone.jpg" alt="img">
                                    <div class="aa-prom-content">
                                        <span>IPHONE</span>
                                        <h4><a href="./product/iphone.php">mua ngay</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- promo right -->
                        <div class="col-md-7 no-padding">
                            <div class="aa-promo-right">
                                <div class="aa-single-promo-right">
                                    <div class="aa-promo-banner">
                                        <img src="templates/nightwingmobile/img/banner-samsung.jpg" alt="img">
                                        <div class="aa-prom-content">
                                            <span>SAMSUNG</span>
                                            <h4><a href="./product/samsung.php">mua ngay</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="aa-single-promo-right">
                                    <div class="aa-promo-banner">
                                        <img src="templates/nightwingmobile/img/banner-oppo.jpg" alt="img">
                                        <div class="aa-prom-content">
                                            <span>OPPO</span>
                                            <h4><a href="./product/oppo.php">mua ngay</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="aa-single-promo-right">
                                    <div class="aa-promo-banner">
                                        <img src="templates/nightwingmobile/img/banner-vsmart.jpg" alt="img">
                                        <div class="aa-prom-content">
                                            <span>VSMART</span>
                                            <h4><a href="./product/vsmart.php">mua ngay</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="aa-single-promo-right">
                                    <div class="aa-promo-banner">
                                        <img src="templates/nightwingmobile/img/banner-xiomi.jpg" alt="img">
                                        <div class="aa-prom-content">
                                            <span>XIOMI</span>
                                            <h4><a href="./product/xiomi.php">mua ngay</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="aa-popular-category">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="aa-popular-category-area">
                        <!-- start prduct navigation -->
                        <ul class="nav nav-tabs aa-products-tab">
                            <li class="active"><a href="#popular" data-toggle="tab">CELLPHONE</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <!-- Start men popular category -->
                            <div class="tab-pane fade in active" id="popular">
                                <ul class="aa-product-catg aa-popular-slider">
                                    <!-- start single product item -->
                                    <?php
                                    $query = "SELECT * FROM product WHERE parent_id = 1";
                                    $result = $mysqli->query($query);
                                    while ($arProduct = mysqli_fetch_assoc($result)) {
                                        $cat_id = $arProduct['cat_id'];
                                    ?>
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="product-detail.php?product_id=<?php echo $arProduct['product_id'] ?>"><img src="files/uploads/<?php echo $arProduct['picture'] ?>" alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn" href="cart.php?product_id=<?php echo $arProduct['product_id'] ?>"><span class="fa fa-shopping-cart"></span>Thêm Vào Giỏ Hàng</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#"><?php echo $arProduct['name'] ?></a></h4>
                                                    <span class="aa-product-price"><?php echo number_format($arProduct['price']) ?></span>
                                                </figcaption>
                                            </figure>
                                        </li>
                                    <?php } ?>
                                </ul>
                                <a class="aa-browse-btn" href="./product/cellphone.php">Xem Thêm <span class="fa fa-long-arrow-right"></span></a>
                            </div>
                            <!-- / popular product category -->
                            <section id="aa-banner">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="aa-banner-area">
                                                    <a href="#"><img src="templates/nightwingmobile/img/laptop.jpg" alt="fashion banner img"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="aa-popular-category">
    <div class="container">
        <div class="row">
            <div class="col-md-20">
                <div class="row">
                    <div class="aa-popular-category-area">
                        <!-- start prduct navigation -->
                        <ul class="nav nav-tabs aa-products-tab">
                            <li class="active"><a href="#popular" data-toggle="tab">LAPTOP</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <!-- Start men popular category -->
                            <div class="tab-pane fade in active" id="popular">
                                <ul class="aa-product-catg aa-popular-slider">
                                    <!-- start single product item -->
                                    <?php
                                    $query = "SELECT * FROM product WHERE parent_id = 2";
                                    $result = $mysqli->query($query);
                                    while ($arProduct = mysqli_fetch_assoc($result)) {
                                        $cat_id = $arProduct['cat_id'];
                                    ?>
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="product-detail.php?product_id=<?php echo $arProduct['product_id'] ?>"><img src="files/uploads/<?php echo $arProduct['picture'] ?>" alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn" href="cart.php?product_id=<?php echo $arProduct['product_id'] ?>"><span class="fa fa-shopping-cart"></span>Thêm Vào Giỏ Hàng</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#"><?php echo $arProduct['name'] ?></a></h4>
                                                    <span class="aa-product-price"><?php echo number_format($arProduct['price']) ?></span>
                                                </figcaption>
                                            </figure>
                                        </li>
                                    <?php } ?>
                                </ul>
                                <a class="aa-browse-btn" href="./product/laptop.php">Xem Thêm <span class="fa fa-long-arrow-right"></span></a>
                            </div>
                            <!-- / popular product category -->
                            <section id="aa-banner">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="aa-banner-area">
                                                    <a href="#"><img src="templates/nightwingmobile/img/slider/ipad1.jpg" alt="fashion banner img"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="aa-popular-category">
    <div class="container">
        <div class="row">
            <div class="col-md-20">
                <div class="row">
                    <div class="aa-popular-category-area">
                        <!-- start prduct navigation -->
                        <ul class="nav nav-tabs aa-products-tab">
                            <li class="active"><a href="#popular" data-toggle="tab">TABLET</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <!-- Start men popular category -->
                            <div class="tab-pane fade in active" id="popular">
                                <ul class="aa-product-catg aa-popular-slider">
                                    <!-- start single product item -->
                                    <?php
                                    $query = "SELECT * FROM product WHERE parent_id = 4";
                                    $result = $mysqli->query($query);
                                    while ($arProduct = mysqli_fetch_assoc($result)) {
                                        $cat_id = $arProduct['cat_id'];
                                    ?>
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="product-detail.php?product_id=<?php echo $arProduct['product_id'] ?>"><img src="files/uploads/<?php echo $arProduct['picture'] ?>" alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn" href="cart.php?product_id=<?php echo $arProduct['product_id'] ?>"><span class="fa fa-shopping-cart"></span>Thêm Vào Giỏ Hàng</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#"><?php echo $arProduct['name'] ?></a></h4>
                                                   <span class="aa-product-price"><?php echo number_format($arProduct['price']) ?></span>
                                                </figcaption>
                                            </figure>
                                        </li>
                                    <?php } ?>
                                </ul>
                                <a class="aa-browse-btn" href="./product/tablet.php">Xem Thêm <span class="fa fa-long-arrow-right"></span></a>
                            </div>
                            <!-- / popular product category -->
                            <section id="aa-banner">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="aa-banner-area">
                                                    <a href="#"><img src="templates/nightwingmobile/img/slider/Wristwatch1.jpg" alt="fashion banner img"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="aa-popular-category">
    <div class="container">
        <div class="row">
            <div class="col-md-20">
                <div class="row">
                    <div class="aa-popular-category-area">
                        <!-- start prduct navigation -->
                        <ul class="nav nav-tabs aa-products-tab">
                            <li class="active"><a href="#popular" data-toggle="tab">WRISWATCH</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <!-- Start men popular category -->
                            <div class="tab-pane fade in active" id="popular">
                                <ul class="aa-product-catg aa-popular-slider">
                                    <!-- start single product item -->
                                    <?php
                                    $query = "SELECT * FROM product WHERE parent_id = 3";
                                    $result = $mysqli->query($query);
                                    while ($arProduct = mysqli_fetch_assoc($result)) {
                                        $cat_id = $arProduct['cat_id'];
                                    ?>
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="product-detail.php?product_id=<?php echo $arProduct['product_id'] ?>"><img src="files/uploads/<?php echo $arProduct['picture'] ?>" alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn" href="cart.php?product_id=<?php echo $arProduct['product_id'] ?>"><span class="fa fa-shopping-cart"></span>Thêm Vào Giỏ Hàng</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#"><?php echo $arProduct['name'] ?></a></h4>
                                                    <span class="aa-product-price"><?php echo number_format($arProduct['price']) ?></span>
                                                </figcaption>
                                            </figure>
                                        </li>
                                    <?php } ?>
                                </ul>
                                <a class="aa-browse-btn" href="./product/wristwatch.php">Xem Thêm <span class="fa fa-long-arrow-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / popular section -->
<!-- Support section -->
<section id="aa-support">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-support-area">
                    <!-- single support -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="aa-support-single">
                            <span class="fa fa-truck"></span>
                            <h4>FREE SHIP</h4>
                            <P></P>
                        </div>
                    </div>
                    <!-- single support -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="aa-support-single">
                            <span class="fa fa-clock-o"></span>
                            <h4>Hoàn trả lại tiền trong 30 ngày</h4>
                            <P></P>
                        </div>
                    </div>
                    <!-- single support -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="aa-support-single">
                            <span class="fa fa-phone"></span>
                            <h4>Hỗ trợ 24/7</h4>
                            <P></P>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / Support section -->
<?php
require_once "./templates/nightwingmobile/inc/footer.php"
?>