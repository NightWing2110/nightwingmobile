<?php
require_once "../inc/header.php";
$story_id = $_GET['story_id'];
$query ="DELETE FROM blog WHERE story_id = {$story_id}";
$result = $mysqli->query($query);
if($result){
    header('location:index.php?msg=Xóa bài viết thành công');
}else{
    echo "Lỗi khi xóa bài viết";
}
?>