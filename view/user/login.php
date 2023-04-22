<div class="site__body">
    <div class="page-header">
        <div class="page-header__container container">
            <div class="page-header__breadcrumb">

            </div>
            <div class="page-header__title">
                <h1>Tài khoản của tôi</h1>

            </div>
        </div>
    </div>
    <div class="block">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex flex-column">
                    <div class="card flex-grow-1 mb-md-0">
                        <div class="card-body">
                            <h3 class="card-title">Đăng nhập</h3>

                            <form method="POST">
                                <input type="hidden" name="type_" value="login_account">
                                <div class="form-group"><label>Địa chỉ Email</label><br><span style="color: red; font-weight:bold;"><?php if (isset($error['not_email']) && ($error['not_email'] != "")) echo $error['not_email'];
                                                                                                                                    if (isset($error['not_active'])) echo $error['not_active']; ?></span> <input name="email" type="email" class="form-control" placeholder="Nhập Email"></div>
                                <div class="form-group"><label>Mật khẩu</label> <br><span style="color: red; font-weight:bold;"><?php if (isset($error['not_pass']) && ($error['not_pass'] != "")) echo $error['not_pass']; ?></span> <input name="pass" type="password" class="form-control" placeholder="Mật khẩu"> <small class="form-text text-muted"><a href="forget-pass">Quên mật khẩu</a></small>
                                </div>
                                <div class="form-group">
                                    <div class="form-check"><span class="form-check-input input-check"><span class="input-check__body"><input class="input-check__input" type="checkbox" id="login-remember"> <svg class="input-check__icon" width="9px" height="7px">
                                                    <use xlink:href="../libary/images/sprite.svg#check-9x7"></use>
                                                </svg> </span></span>
                                    </div>

                                    <span style="color: red; font-weight:bold;"><?php if (isset($tb) && $tb != "") echo $tb; ?></span>
                                </div><input type="submit" name="login" class="btn btn-primary mt-4" value="Đăng nhập">
                            </form>





                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex flex-column mt-4 mt-md-0">
                    <div class="card flex-grow-1 mb-0">
                        <div class="card-body">
                            <h3 class="card-title">Đăng ký</h3>
                            <span style="color: red; font-weight:bold;"><?php if (isset($error['tontai_email']) && ($error['tontai_email'] != "")) echo $error['tontai_email']; ?></span>
                            <form method="POST">
                                <input type="hidden" name="type_" value="register_account">
                                <div class="form-group"><label>Địa chỉ Email</label> <br><span style="color: red; font-weight:bold;"><?php if (isset($error['not_email_dk']) && ($error['not_email_dk'] != "")) echo $error['not_email_dk']; ?></span> <input name="dk_email" type="email" class="form-control" placeholder="Nhập email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" oninvalid="this.setCustomValidity('Email không đúng')" oninput="this.setCustomValidity('')"></div>
                                <div class="form-group"><label>Mật khẩu</label> <br><span style="color: red; font-weight:bold;"><?php if (isset($error['not_pass_dk']) && ($error['not_pass_dk'] != "")) echo $error['not_pass_dk']; ?></span> <input name="dk_pass" type="password" class="form-control" placeholder="Mật khẩu"></div>
                                <div class="form-group"><label>Nhập lại mật khẩu</label><br><span style="color: red; font-weight:bold;"><?php if (isset($error['not_rp_pass']) && ($error['not_rp_pass'] != "")) echo $error['not_rp_pass']; ?></span> <input name="dk_rp_pass" type="password" class="form-control" placeholder="Mật khẩu"></div>
                                <div class="form-group"><label>Họ và tên: </label><br><span style="color: red; font-weight:bold;"><?php if (isset($error['not_hvt']) && ($error['not_hvt'] != "")) echo $error['not_hvt']; ?></span> <input name="dk_hvt" type="text" class="form-control" placeholder="Họ và tên"></div>
                                <div class="form-group"><label>Số điện thoại: </label><br><span style="color: red; font-weight:bold;"><?php if (isset($error['not_sdt']) && ($error['not_sdt'] != "")) echo $error['not_sdt']; ?></span> <input name="dk_sdt" type="text" class="form-control" placeholder="Số điện thoại" pattern="(\+84|0)\d{9,10}" oninvalid="this.setCustomValidity('Số điện thoại không đúng')" oninput="this.setCustomValidity('')"></div>
                                <span style="color: red; font-weight:bold;"><?php if (isset($error['not_like_pass']) && ($error['not_like_pass'] != "")) echo $error['not_like_pass']; ?></span> <br><span style="color: red; font-weight:bold;"><?php if (isset($error['pass_ngan']) && ($error['pass_ngan'] != "")) echo $error['pass_ngan']; ?></span> <br><input name="register" type="submit" class="btn btn-primary mt-4" value="Đăng ký">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- site__body / end -->