<?php
    if (isset($_SESSION['login_user'])){
        $UserLogin = $_SESSION['login_user'];
    }
    $idUser = $_GET['idUser'];
    settype($idUser,"int");
    $user = getUser($idUser);
    if (isset($_POST['btn'])) {
        $tenDangNhap = $_POST['tenDangNhap'];
        $matKhau = $_POST['matKhau'];
        $ten = $_POST['ten'];
        $email = $_POST['email'];
        $soDienThoai = $_POST['soDienThoai'];
        $nhom = $_POST['nhom'];
        $tenDangNhap = trim(strip_tags($tenDangNhap));
        $email = trim(strip_tags($email));
        $matKhau = trim(strip_tags($matKhau));
        $matKhau=md5($matKhau);
        $kq = updateUser($tenDangNhap,$matKhau,$ten,$email,$soDienThoai,$nhom,$idUser);
        if ($idUser==$UserLogin){
            $_SESSION['login_user'] = getUserByIDUser($idUser);
        }
        if ($kq!=true){
            echo "<script>
            window.location='?page=userList';
            </script>";
        }
    }
?>
<div class="card">
    <div class="card-body">
        <h4 class="card-title">CẬP NHẬT TÀI KHOẢN</h4>
        <p class="card-description">
        </p>
        <form class="forms-sample" method="post">
            <div class="form-group">
                <label>Tên đăng nhập</label>
                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Tên đăng nhập" name="tenDangNhap" maxlength="30" value="<?=$user['tenDangNhap']?>">
            </div>
            <div class="form-group">
                <label>Mật khẩu</label>
                <input type="password" class="form-control" id="exampleInputUsername1" placeholder="Mật khẩu" name="matKhau" required value="<?=$user['matKhau']?>">
            </div>
            <div class="form-group">
                <label>Họ và tên</label>
                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Họ và tên" name="ten" required value="<?=$user['ten']?>">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" id="exampleInputUsername1" placeholder="Email" name="email" required value="<?=$user['email']?>">
            </div>
            <div class="form-group">
                <label>Số điện thoại</label>
                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Số điện thoại" name="soDienThoai" required pattern="(\+84|0)\d{9,10}" value="<?=$user['soDienThoai']?>">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Quyền</label><br>
                <input type="radio" id="nhomUser1" name="nhom" value="0" <?php if($user['nhom']==0) echo "checked"?>>
                <label for="nhomUser1">Admin</label>
                <input type="radio" id="nhomUser2" name="nhom" value="1" <?php if($user['nhom']==1) echo "checked"?>>
                <label for="nhomUser2">User</label>
            </div>
            <input type="submit" class="btn btn-primary me-2" name="btn" value="Cập nhật"></input>
            <!-- <button class="btn btn-light"></button> -->
        </form>
    </div>
</div>