<?php
require_once "./templates/nightwingmobile/inc/header.php"
?>
<?php
require_once "./templates/nightwingmobile/inc/leftbar.php"
?>
<!-- / catg header banner section -->

<!-- Cart view section -->
<section id="aa-myaccount">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="aa-myaccount-area">
          <div class="row">
            <div class="col-md-4">
              <?php
              if (isset($_POST['submit'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $fullname = $_POST['fullname'];
                $address = $_POST['address'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $query = "SELECT * FROM users WHERE username = '$username'";
                $result = $mysqli->query($query);
                if (mysqli_num_rows($result) > 0) {
                  echo "Trùng tên đăng nhập. Vui lòng nhập lại";
                } else {
                  $query1 = "INSERT INTO users(username,password,fullname,address,email,phone)
                                  VALUES ('{$username}','{$password}','{$fullname}','{$address}','{$email}','{$phone}')";
                  $result1 = $mysqli->query($query1);
                  if ($result1) {
                    header("location:login.php?msg=Thêm người dùng thành công");
                    die();
                  } else {
                    echo "Có lỗi khi thêm người dùng";
                    die();
                  }
                }
              }
              ?>
              <div class="aa-myaccount-register">
                <h4>Register</h4>
                <form action="" method="POST" class="aa-login-form">
                  <label for="">Tên Đăng Nhập<span>*</span></label>
                  <input type="text" name="username" placeholder="Nhập Tên Đăng Nhập" required>
                  <label for="">Mật Khẩu<span>*</span></label>
                  <input type="password" name="password" placeholder="Nhập Mật Khẩu" required>
                  <label for="">Họ Và Tên<span>*</span></label>
                  <input type="text" name="fullname" placeholder="Nhập Họ Và Tên" required>
                  <label for="">Địa Chỉ<span>*</span></label>
                  <input type="text" name="address" placeholder="Nhập Địa Chỉ" required>
                  <label for="">Email<span>*</span></label>
                  <input type="text" name="email" placeholder="Nhập Email" required>
                  <label for="">Số Điện Thoại<span>*</span></label>
                  <input type="text" name="phone" placeholder="Nhập Số Điện Thoại" required>
                  <button type="submit" name="submit" class="aa-browse-btn">Đăng Ký</button>
                </form>
              </div>
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