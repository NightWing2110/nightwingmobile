<?php require_once "../inc/header.php" ?>
<div id="content-wrapper">
    <div class="container-fluid">
        <h1 class="page-header">Edit Blog</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="admin/index.php">Dashboard</a>
            </li>
            <li class="breadcrumb-item">
                <a href="admin/blog/index.php">Blog</a>
            </li>
            <li class="breadcrumb-item active">Edit</li>
        </ol>
        <div class="clearfix"></div>
        <div class="form-group row">
            <div class="form-group col-md-12">
                <?php
                $story_id = $_GET['story_id'];
                $select = "SELECT * FROM blog WHERE story_id = $story_id";
                if ($mysqli->query($select)) {
                    $infoBlog = mysqli_fetch_assoc($mysqli->query($select));
                }
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
                            echo "thêm thành công";
                        }
                    }
                    $query = "UPDATE `blog` SET `name`='{$name}',
                                                  `cat_id`='{$cat_id}',
                                                  `preview_text`='{$preview_text}',
                                                  `detail_text`='{$detail_text}',
                                                  `picture`='{$newFileName}'
                                                   WHERE story_id = $story_id";
                    $result = $mysqli->query($query);
                    if ($result) {
                        header('location:index.php?msg=Cập nhật bài viết thành công');
                    } else {
                        echo "Lỗi khi cập nhật bài viết.Vui lòng thử lại!";
                    }
                }
                ?>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group col-sm-8">
                        <label for="exampleInputEmail1">Cat</label>
                        <select class="form-control" name="cat_id">
                            <option value="">Cat</option>
                            <?php
                            $queryCat = "SELECT * FROM cat";
                            $result = $mysqli->query($queryCat);
                            while ($arCat = mysqli_fetch_assoc($result)) {
                            ?>
                                <option value="<?php echo $arCat['cat_id'] ?>"><?php echo $arCat['name'] ?></option>
                            <?php } ?>
                        </select>
                        <p class="text-danger"></p>
                        <label for="exampleInputEmail1">Blog Name</label>
                        <input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="Nhập tên bài viết" value="<?php echo $infoBlog['name'] ?>">
                        <p class="text-danger"></p>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Preview_Text</label>
                            <textarea name="preview_text" id="" cols="10" rows="5" class="form-control" required><?php echo htmlspecialchars($infoBlog['preview_text']) ?></textarea>
                            <p class="text-danger"></p>
                        </div>
                        <label for="exampleInputEmail1">Picture</label>
                        <input type="file" class="form-control " name="picture">
                        <p class="text-danger"></p>
                        <label for="exampleInputEmail1">Detail_Text</label>
                        <textarea class="form-control ckeditor" name="detail_text" rows="4"><?php echo htmlspecialchars($infoBlog['detail_text']) ?></textarea>
                        <p class="text-danger"></p>
                    </div>
                    <button type="submit" name="submit" class="btn btn-success">Lưu</button>
                </form>
            </div>
        </div>
    </div>

</div>
<?php require_once "../inc/footer.php" ?>
</div>