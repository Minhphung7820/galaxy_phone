<?php
if (isset($_POST['btn'])) {
    $newPass = $_POST['password-new'];
    $confirmPass = $_POST['password-confirm'];
    $randomkey = $_GET['randomkey'];
    echo $randomkey;
    if ($newPass == null) {
        $error2 = "Vui lòng nhập mật khẩu mới";
    }
    if ($confirmPass == null) {
        $error3 = "Vui lòng nhập lại mật khẩu mới";
    } else if ($newPass != $confirmPass) {
        $error3 = "Nhập lại mật khẩu không đúng";
    }
    if (isset($error2) == false && isset($error3) == false) {
        require_once "../../model/hamnguoidung.php";
        $user = getEmailUser();
        foreach($user as $taiKhoan){
            if (substr(md5($taiKhoan['email']),7,-3)==$randomkey){
                updatePasswordUser(md5($newPass),$taiKhoan['email']);
                echo "<script>alert('Tài khoản của bạn đã được đổi mật khẩu thành công');
                        document.location='../../index.php';
                </script>";
                break;
            }
        }
    }
    
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <title>GalaxyPhone</title>
    <link rel="icon" type="image/png" href="libary/images/favicon.png">
    <!-- fonts -->
    <base href="http://localhost/duan1/duan1nhom6/">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i">
    <!-- css -->
    <link rel="stylesheet" href="libary/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="libary/vendor/owl-carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="libary/vendor/photoswipe/photoswipe.css">
    <link rel="stylesheet" href="libary/vendor/photoswipe/default-skin/default-skin.css">
    <link rel="stylesheet" href="libary/vendor/select2/css/select2.min.css">
    <link rel="stylesheet" href="libary/css/style.css">
    <!-- font - fontawesome -->
    <link rel="stylesheet" href="libary/vendor/fontawesome/css/all.min.css">
    <!-- font - stroyka -->
    <link rel="stylesheet" href="libary/fonts/stroyka/stroyka.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
<div class="block">
    <div class="container">
        <div class="row">
            <div class="col-md-12 d-flex flex-column" style="margin: 20px auto;">
                <div class="card flex-grow-3 mb-md-0">
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="card-header">
                                <h2>Thay đổi mật khẩu</h2>
                            </div>
                            <div class="card-divider"></div>
                            <div class="card-body">
                                <div class="row no-gutters">
                                    <div class="col-12 col-lg-7 col-xl-6">
                                        <div class="form-group"><label for="password-new">Mật khẩu mới</label><?php if (isset($error2)) echo "</br>" ?> <span style="color: red; font-weight:bold;"><?php if (isset($error2)) echo $error2; ?></span>
                                            <input type="password" name="password-new" class="form-control" id="password-new" placeholder="Mật khẩu mới" minlength="8" oninvalid="this.setCustomValidity('Mật khẩu phải có ít nhất 8 ký tự')" oninput="this.setCustomValidity('')">
                                        </div>
                                        <div class="form-group"><label for="password-confirm">Nhập lại mật khẩu</label><?php if (isset($error3)) echo "</br>" ?> <span style="color: red; font-weight:bold;"><?php if (isset($error3)) echo $error3; ?></span> <input name="password-confirm" type="password" class="form-control" id="password-confirm" placeholder="Nhập lại mật khẩu" minlength="8" oninvalid="this.setCustomValidity('Mật khẩu phải có ít nhất 8 ký tự')" oninput="this.setCustomValidity('')"></div>
                                        <div class="form-group mt-5 mb-0"><button name="btn" class="btn btn-primary">Đổi</button></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>