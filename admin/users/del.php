<?php
require_once "../inc/header.php";
$user_id = $_GET['users_id'];
$query = "DELETE FROM users WHERE users_id = $user_id";
$result = $mysqli->query($query);
if($result){
    header("location:index.php?msg=Xóa thành công");
}else{
    echo "Lỗi khi xóa.Vui lòng thử lại";
}
?>