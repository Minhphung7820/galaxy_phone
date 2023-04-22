<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
?>
<?php
  session_start();
  if (isset($_SESSION['login_user'])){
    $UserLogin = $_SESSION['login_user'];
    if ($UserLogin['nhom']!=0){
      echo "<script>
      window.location='/';
      </script>";
    }
  } else {
    echo "<script>
      window.location='/';
      </script>";
  }
  // if ($UserLogin['nhom']!=0 || is_array($UserLogin)==false){
  //   echo "<script>
  //   window.location='../../../';
  //   </script>";
  // }
?>
<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from www.bootstrapdash.com/demo/skydash/template/demo/vertical-default-light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Nov 2021 04:35:30 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>GalaxyPhone Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../vendors/feather/feather.css">
  <link rel="stylesheet" href="../../vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="../../vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="../../vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="../../js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/favicon.png" />
  <script src="../../ckfinder/ckfinder.js"></script>
</head>
<?php
  require_once "../../../model/admin.php";
  require_once "../../../model/global.php";
?>
<body>
  <div class="container-scroller">
    <?php require_once "header.php" ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">MÀU SIDEBAR</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme">
            <div class="img-ss rounded-circle bg-light border me-3"></div>TRẮNG
          </div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme">
            <div class="img-ss rounded-circle bg-dark border me-3"></div>ĐEN
          </div>
          <p class="settings-heading mt-2">MÀU HEADER</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <?php require_once "leftSideBar.php"; ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Xin chào <?php if (isset($_SESSION['login_user'])) echo $UserLogin['ten'];?></h3>
                </div>
                <div class="col-12 col-xl-4">
                  <div class="justify-content-end d-flex">
                    <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                      <i class="mdi mdi-calendar"></i><?= date("d/m/Y")?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <?php
            if (isset($_GET['page'])) {
              switch ($_GET['page']) {
                case "productTypeList":
                  require_once "../vertical-default-light/pages/productType/productTypeList.php";
                  break;
                case "addProductType":
                  require_once "../vertical-default-light/pages/productType/addProductType.php";
                  break;
                case "updateProductType":
                  require_once "../vertical-default-light/pages/productType/updateProductType.php";
                  break;
                case "deleteProductType":
                  require_once "../vertical-default-light/pages/productType/deleteProductType.php";
                  break;
                case "userList":
                  require_once "../vertical-default-light/pages/users/userList.php";
                  break;
                case "addUser":
                  require_once "../vertical-default-light/pages/users/addUser.php";
                  break;
                case "updateUser":
                  require_once "../vertical-default-light/pages/users/updateUser.php";
                  break;
                case "deleteUser":
                  require_once "../vertical-default-light/pages/users/deleteUser.php";
                  break;
                case "productList":
                  require_once "../vertical-default-light/pages/products/productList.php";
                  break;
                case "addProduct":
                  require_once "../vertical-default-light/pages/products/addProduct.php";
                  break;
                case "updateProduct":
                  require_once "../vertical-default-light/pages/products/updateProduct.php";
                  break;
                case "deleteProduct":
                  require_once "../vertical-default-light/pages/products/deleteProduct.php";
                  break;
                case "comment":
                  require_once "../vertical-default-light/pages/comment/commentList.php";
                  break;
                case "deleteComment":
                  require_once "../vertical-default-light/pages/comment/deleteComment.php";
                  break;
                case "hideComment":
                  require_once "../vertical-default-light/pages/comment/hideComment.php";
                  break;
                case "blogList":
                  require_once "../vertical-default-light/pages/Blogs/blogList.php";
                  break;
                case "addBlog":
                  require_once "../vertical-default-light/pages/Blogs/addBlog.php";
                  break;
                case "updateBlog":
                  require_once "../vertical-default-light/pages/Blogs/updateBlog.php";
                  break;
                case "deleteBlog":
                  require_once "../vertical-default-light/pages/Blogs/deleteBlog.php";
                  break;
                case "logOut":
                  require_once "logOut.php";
                  break;
                case "invoice":
                  require_once "../vertical-default-light/pages/invoice/invoiceList.php";
                  break;
                case "detailInvoice":
                  require_once "../vertical-default-light/pages/invoice/detailInvoice.php";
                  break;
                case "dashboard":
                  require_once "../vertical-default-light/pages/dashboard/dashboard.php";
                  break; 
              }
            } else {
              require_once "../vertical-default-light/pages/dashboard/dashboard.php";
            }
            ?>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <?php require_once "footer.php" ?>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="../../vendors/chart.js/Chart.min.js"></script>
  <script src="../../vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="../../vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="../../js/dataTables.select.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <script src="../../js/settings.js"></script>
  <script src="../../js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../../js/jquery.cookie.js" type="text/javascript"></script>
  <script src="../../js/dashboard.js"></script>
  <script src="../../js/Chart.roundedBarCharts.js"></script>
  <script src="../../js/data-table.js"></script>
</body>


<!-- Mirrored from www.bootstrapdash.com/demo/skydash/template/demo/vertical-default-light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Nov 2021 04:35:56 GMT -->

</html>