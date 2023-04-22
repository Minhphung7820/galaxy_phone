<?php
    if (isset($_SESSION['login_user'])){
        $loginUser = $_SESSION['login_user'];
    }
    if(isset($_POST['btn'])){
        $currentPass = $_POST['password-current'];
        $newPass = $_POST['password-new'];
        $confirmPass = $_POST['password-confirm'];
        if ($currentPass==null){
            $error1 = "Vui lòng nhập mật khẩu hiện tại";
        } else if ($loginUser['matKhau']!=md5($currentPass)){
            $error1 = "Mật khẩu hiện tại không đúng";
        }
        if ($newPass==null){
            $error2 = "Vui lòng nhập mật khẩu mới";
        } else if ($currentPass==$newPass){
            $error2 = "Mật khẩu mới không thể trùng với mật khẩu hiện tại";
        }
        if ($confirmPass==null){
            $error3 = "Vui lòng nhập lại mật khẩu mới";
        } else if ($newPass!=$confirmPass){
            $error3 = "Nhập lại mật khẩu không đúng";
        }
        if (isset($error1)==false&&isset($error2)==false&&isset($error3)==false){
            updatePasswordUser(md5($newPass),$loginUser['email']);
            $_SESSION['login_user'] = check_login($loginUser['email'],md5($newPass));
            echo "<script>alert('Bạn đã cập nhật mật khẩu thành công')</script>";
            $loginUser = $_SESSION['login_user'];
        }
    }
?>
<form action="" method="post">
    <div class="col-12 col-lg-9 mt-4 mt-lg-0">
        <div class="card">
            <div class="card-header">
                <h5>Thay đổi mật khẩu</h5>
            </div>
            <div class="card-divider"></div>
            <div class="card-body">
                <div class="row no-gutters">
                    <div class="col-12 col-lg-7 col-xl-6">
                        <div class="form-group"><label for="password-current">Mật khẩu hiện tại</label><?php if (isset($error1)) echo "</br>" ?> <span style="color: red; font-weight:bold;"><?php if (isset($error1)) echo $error1;?></span><input name="password-current" type="password" class="form-control" id="password-current" placeholder="Mật khẩu hiện tại" ></div>
                        <div class="form-group"><label for="password-new">Mật khẩu mới</label><?php if (isset($error2)) echo "</br>" ?> <span style="color: red; font-weight:bold;"><?php if (isset($error2)) echo $error2;?></span>
                            <input type="password" name="password-new" class="form-control" id="password-new" placeholder="Mật khẩu mới" minlength="8" oninvalid="this.setCustomValidity('Mật khẩu phải có ít nhất 8 ký tự')" oninput="this.setCustomValidity('')">
                        </div>
                        <div class="form-group"><label for="password-confirm">Nhập lại mật khẩu</label><?php if (isset($error3)) echo "</br>" ?> <span style="color: red; font-weight:bold;"><?php if (isset($error3)) echo $error3;?></span> <input name="password-confirm" type="password" class="form-control" id="password-confirm" placeholder="Nhập lại mật khẩu" minlength="8" oninvalid="this.setCustomValidity('Mật khẩu phải có ít nhất 8 ký tự')" oninput="this.setCustomValidity('')"></div>
                        <div class="form-group mt-5 mb-0"><button name="btn" class="btn btn-primary">Đổi</button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
