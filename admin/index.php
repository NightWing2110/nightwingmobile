<?php
require_once "../util/dbConnect.php";

if (!isset($_SESSION['login'])) {
  header('location:../admin/auth/login.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Page Admin</title>
  <base href="http://localhost:8080/nightwingmobile/">
  <link href="templates/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="templates/admin/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <link href="templates/admin/css/sb-admin.css" rel="stylesheet">
</head>

<body id="page-topf">
  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="">Welcome to page Admin</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>
    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item"><?php echo $_SESSION['login'] ?></a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">????ng xu???t</a>
        </div>
      </li>
    </ul>
  </nav>
  <div id="wrapper">

    <!-- Sidebar -->

    <ul class="sidebar navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="admin">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Home</span>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="admin/users">
          <i class="fas fa-user-lock"></i>
          <span>Member</span>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="admin/cat">
          <i class="fas fa-list"></i>
          <span>Cat</span>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="admin/product">
          <i class="fas fa-tshirt"></i>
          <span>Product</span>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="admin/transaction">
          <i class="fa fa-table"></i>
          <span>Transaction</span>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="admin/contact">
          <i class="fa fa-phone"></i>
          <span>Contact</span>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="admin/blog">
          <i class="fa fa-blog"></i>
          <span>Blog</span>
        </a>
      </li>
    </ul>

    <div id="content-wrapper" class="d-flex flex-column">
      <div class="container-fluid">

        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Home Page</li>
        </ol>
        <h1>Welcome to page Admin</h1>
        <hr>


        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">T???ng quan</h1>
          <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> T???i xu???ng b???n ghi</a>
        </div>

        <!-- Content Row -->
        <div class="row">

          <!-- Earnings (Monthly) Card Example -->
          <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">S???n ph???m nh???p v??o</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">s???n ph???m</div>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">S???n ph???m b??n ???????c</div>
                    <div class="row no-gutters align-items-center">
                      <div class="col-auto">
                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">s???n ph???m</div>
                      </div>

                    </div>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">T???ng doanh thu</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">VND</div>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>



          <!-- Content Row -->
          <div class="row">

            <!-- Content Column -->
            <div class="col-lg-6 mb-4">

              <!-- Project Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">D??? ??n</h6>
                </div>
                <div class="card-body">
                  <h4 class="small font-weight-bold">Theo d??i doanh s??? <span class="float-right">40%</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <h4 class="small font-weight-bold">C?? s??? d??? li???u kh??ch h??ng <span class="float-right">60%</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <h4 class="small font-weight-bold">Chi ti???t xu???t chi <span class="float-right">80%</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <h4 class="small font-weight-bold">C??i ?????t t??i kho???n <span class="float-right">Ho??n th??nh!</span></h4>
                  <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 mb-4">

              <!-- Illustrations -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Ph??t tri???n website</h6>
                </div>
                <div class="card-body">
                  <div class="text-center">
                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="img/undraw_posting_photo.svg" alt="">
                  </div>
                  <p>N???u b???n mu???n ph??t tri???n trang web c???a c???a h??ng h??y li??n h??? v???i c??ng ty ch??ng t??i </p>
                  <a target="_blank" rel="nofollow" href="https://undraw.co/">Li??n h??? ngay &rarr;</a>
                </div>
              </div>

              <!-- Approach -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">C??ng ty ABC</h6>
                </div>
                <div class="card-body">
                  <p class="mb-0">C??ng ty ABC c???a ch??ng t??i h??n h???nh ???????c mang ?????n cho admin v?? ng?????i d??ng nh???ng tr???i nghi???m tuy???t v???i nh???t </p>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
      <?php require_once "../admin/inc/footer.php" ?>
    </div>