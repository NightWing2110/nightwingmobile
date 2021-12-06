<?php require_once "../inc/header.php" ?>
<div id="content-wrapper">
    <div class="container-fluid">
        <h1 class="page-header">Add Blog</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="admin/index.php">Dashboard</a>
            </li>
            <li class="breadcrumb-item">
                <a href="admin/blog/index.php">Blog</a>
            </li>
            <li class="breadcrumb-item active">Add</li>
        </ol>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12">
                <?php
                if (isset($_POST['submit'])) {
                    $name = $_POST['name'];
                    $cat_id = $_POST['cat_id'];
                    $preview_text = $_POST['preview_text'];
                    $detail_text = $_POST['detail_text'];

                    if ($_FILES['picture']['name']) {
                        $fileName = $_FILES['picture']['name'];
                        $arFile = explode('.', $fileName);
                        $typeFile = end($arFile);
                        $newFileName = 'Blog_' . time() . '.' . $typeFile;
                        $tmpName = $_FILES['picture']['tmp_name'];
                        $resultUpload = move_uploaded_file($tmpName, '../../files/uploads/' . $newFileName);
                        if ($resultUpload) {
                            echo "Upload ảnh thành công";
                        }
                    }
                    $query = "INSERT INTO `blog`(`name`, `cat_id`, `preview_text`,`detail_text`, `picture`) 
                                VALUES ('{$name}','{$cat_id}','{$preview_text}','{$detail_text}','{$newFileName}')";
                    $result = $mysqli->query($query);
                    if ($result) {
                        header('location:index.php?msg=Thêm bài viết thành công');
                    } else {
                        echo "Lỗi khi thêm bài viết.Vui lòng thử lại!";
                    }
                }
                ?>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <select class="form-control" name="cat_id">
                            <option value="">Cat</option>
                            <?php
                            $queryCat = "SELECT * FROM cat";
                            $resultCat = $mysqli->query($queryCat);
                            while ($arCat = mysqli_fetch_assoc($resultCat)) {
                            ?>
                                <option value="<?php echo $arCat['cat_id'] ?>"><?php echo $arCat['name'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group col-sm-8">
                        <label for="exampleInputEmail1">Blog Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Nhập tên bài viết">
                        <p class="text-danger"></p>
                    </div>
                    <div class="form-group">
                        <label>Preview_Text:</label>
                        <textarea name="preview_text" id="" cols="10" rows="5" class="form-control" required></textarea>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-3">
                            <label for="exampleInputEmail1">Picture</label>
                            <input type="file" class="form-control " name="picture">
                            <p class="text-danger"></p>
                        </div>
                    </div>
                    <div class="form-group col-sm-8">
                        <label for="exampleInputEmail1">Detail_Text</label>
                        <textarea class="form-control" id="editor1" name="detail_text" rows="4"></textarea>
                        <script type="text/javascript">
                            CKEDITOR.replace('editor1', {
                                filebrowserBrowseUrl: '/nightwingshop/lib/library/ckfinder/ckfinder.html',
                                filebrowserImageBrowseUrl: '/nightwingshop/lib/library/ckfinder/ckfinder.html?type=Images',
                                filebrowserUploadUrl: '/nightwingshop/lib/library/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&currentFolder=/archive/',
                                filebrowserImageUploadUrl: '/nightwingshop/lib/library/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images&currentFolder=/cars/'
                            });
                        </script>
                        <p class="text-danger"></p>
                    </div>
                    <button type="submit" name="submit" class="btn btn-success">Lưu</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php require_once  "../inc/footer.php" ?>
</div>