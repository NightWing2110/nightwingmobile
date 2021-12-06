<?php
require_once "./templates/nightwingmobile/inc/header.php"
?>
<?php
require_once "./templates/nightwingmobile/inc/leftbar.php"
?>
<?php
$row_count = 6;
$query1 = mysqli_query($mysqli, "SELECT * FROM blog");
$tongsodong = mysqli_num_rows($query1);
$sotrang = ceil($tongsodong / $row_count);
if (isset($_GET['page'])) {
  $curent_page = $_GET['page'];
} else {
  $curent_page = 1;
}
$offset = ($curent_page - 1) * $row_count;
?>
<!-- catg header banner section -->
<section id="aa-catg-head-banner">
  <img src="templates/nightwingmobile/img/fashion/blog.jpg" alt="fashion img">
  <div class="aa-catg-head-banner-area">
    <div class="container">
      <div class="aa-catg-head-banner-content">
        <ol class="breadcrumb">
          <li><a href="index.php">Home</a></li>
          <li class="active">24h Công Nghệ</li>
        </ol>
      </div>
    </div>
  </div>
</section>
<!-- / catg header banner section -->

<!-- Blog Archive -->
<section id="aa-blog-archive">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="aa-blog-archive-area">
          <div class="row">
            <div class="col-md-9">
              <div class="aa-blog-content">
                <div class="row">
                  <?php
                  $query = "SELECT * FROM blog LIMIT $offset,$row_count";
                  $result = $mysqli->query($query);
                  while ($arStory = mysqli_fetch_assoc($result)) {
                    $cat_id = $arStory['cat_id'];
                    $name = $arStory['name'];
                    $story_id = $arStory['story_id'];
                  ?>

                    <div class="col-md-4 col-sm-4">
                      <article class="aa-blog-content-single">
                        <figure class="aa-blog-img">
                          <a href="blog-single.php?story_id=<?php echo $arStory['story_id'] ?>"><img src="files/uploads/<?php echo $arStory['picture'] ?>" alt="fashion img"></a>
                        </figure>
                        <a href="blog-single.php?story_id=<?php echo $arStory['story_id'] ?>"><?php echo $arStory['preview_text'] ?></a>
                        <div class="aa-article-bottom">
                          <div class="aa-post-author">
                            Posted By <a href="#">Hoàng Duy</a>
                          </div>
                          <div class="aa-post-date"><?php echo $arStory['created_at'] ?></div>
                        </div>
                      </article>
                    </div>
                  <?php } ?>
                </div>
              </div>
              <!-- Blog Pagination -->
              <div class="aa-blog-archive-pagination">
                <nav>
                  <ul class="pagination">
                    <?php
                    for ($i = 1; $i <= $sotrang; $i++) {
                      $active = '';
                      if ($i == $curent_page) {
                        $active = 'active';
                      }
                    ?>
                      <li><a href="blog-archive.php?page=<?php echo $i ?>"><?php echo 'PAGE' . $i ?></a></li>
                    <?php } ?>
                  </ul>
                </nav>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>
<!-- / Blog Archive -->
<?php
require_once "./templates/nightwingmobile/inc/footer.php"
?>