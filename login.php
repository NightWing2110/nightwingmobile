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
            <div class="col-md-6">
              <?php
              if (isset($_POST['submit'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $query = "SELECT * FROM users WHERE username = '{$username}' AND password = '{$password}'";
                $result = $mysqli->query($query);
                $count = mysqli_num_rows($result);
                $row_login = mysqli_fetch_array($result);
                $infoUser = mysqli_fetch_assoc($result);
                if ($count > 0) {
                  $_SESSION['user'] = $row_login;
                  $_SESSION['login'] = $row_login['username'];
                  $_SESSION['users_id'] = $row_login['users_id'];
                  if (isset($_GET['action'])) {
                    $action = $_GET['action'];
                    header('location: ' . $action . '.php');
                  } else {
                    header('location:index.php');
                  }
                } else {
                  echo "Tài khoản hoặc mật khẩu không chính xác";
                }
              }
              ?>
              <div class="aa-myaccount-login">
                <h4>Login</h4>
                <form action="" class="aa-login-form" method="POST">
                  <label for="">Tên Đăng Nhập<span>*</span></label>
                  <input type="text" name="username" placeholder="Nhập tên đăng nhập" required>
                  <label for="">Mật Khẩu<span>*</span></label>
                  <input type="password" name="password" placeholder="Nhập mật khẩu">
                  <button type="submit" name="submit" class="aa-browse-btn">Đăng Nhập</button>
                  <label class="rememberme" for="rememberme"><input type="checkbox" id="rememberme"> Remember me </label>
                  <p class="aa-lost-password"><a href="register.php">Chưa đăng ký tài khoản?</a></p>
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