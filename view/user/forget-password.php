<?php
if (isset($_POST['btn'])) {
    $email = $_POST['email'];
    $email = trim(strip_tags($email));
    GuiMailResetPass($email);
    echo "<script>alert('Một email đã được gửi đến email của bạn. Vui lòng kiểm tra email để thực hiện việc reset password');
            </script>";
}
?>


<div class="block">
    <div class="container">
        <div class="row">
            <div class="col-md-12 d-flex flex-column" style="margin: 20px auto;">
                <div class="card flex-grow-3 mb-md-0">
                    <div class="card-body">
                        <h3 class="card-title">Quên mật khẩu</h3>
                        <form method="POST">
                            <div class="form-group"><label>Email của bạn</label><br><span style="color: red; font-weight:bold;"></span> <input required oninvalid="this.setCustomValidity('Vui lòng chính xác email và không để trống')" oninput="this.setCustomValidity('')" name="email" type="email" class="form-control" placeholder="Nhập Email"></div>
                    </div>
                    <div class="form-group">
                        <div class="form-check"><span class="form-check-input input-check"><span class="input-check__body"><input class="input-check__input" type="checkbox" id="login-remember"> <svg class="input-check__icon" width="9px" height="7px">
                                        <use xlink:href="../libary/images/sprite.svg#check-9x7"></use>
                                    </svg> </span></span>
                        </div>
                    </div><input type="submit" name="btn" class="btn btn-primary mt-4" value="Gửi mail">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>