<?php require_once  "../inc/header.php" ?>
<script type="text/javascript">
          document.title = 'Blog | VinaEnter Edu';
      </script>
<div id="content-wrapper">
  <div class="container-fluid">
    <h1 class="page-header">List Blog</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="admin/index.php">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Blog</li>
    </ol>
    <?php
    if(isset($_GET['msg']) && $_GET['msg']){
      echo $_GET['msg'];
    }
    ?>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12">
        <div class="card mb-3">
          <div class="card-header">
            <a href="admin/blog/add.php">
              <button class="btn btn-primary float-right">Add</button>
            </a>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>STT</th>
                    <th>Name</th>
                    <th>Preview_text</th>
                    <th>Cat_id</th>
                    <th>Picture</th>
                    <th>Created</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $query = "SELECT * FROM blog";
                  $result = $mysqli->query($query);
                  while($arBlog = mysqli_fetch_assoc($result)){
                  ?>
                    <tr>
                      <td><?php echo $arBlog['story_id']?></td>
                      <td><?php echo $arBlog['name']?></td>
                      <td><?php echo $arBlog['preview_text']?></td>
                      <td><?php echo $arBlog['cat_id']?></td>
                      <td>
                        <img src="files/uploads/<?php echo $arBlog['picture']?>" alt="" width="250px">
                      </td>
                      <td><?php echo $arBlog['created_at']?></td>
                      <td>
                        <a class="btn btn-xs btn-primary" href="admin/blog/edit.php?story_id=<?php echo $arBlog['story_id']?>"><i class="fa fa-edit"></i>Edit</a>
                        <a class="btn btn-xs btn-danger" href="admin/blog/del.php?story_id=<?php echo $arBlog['story_id']?>" onclick="return confirm('Bạn có thực sự muốn xóa danh mục này không?')"><i class="fa fa-times"></i></a>
                      </td>
                    </tr>
                </tbody>
                <?php }?>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php require_once  "../inc/footer.php" ?>
</div>