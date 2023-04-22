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
                <div class="col-12 col-lg-3 d-flex">
                    <div class="account-nav flex-grow-1">
                        <h4 class="account-nav__title">Điều hướng</h4>
                        <ul>
                            <li class="account-nav__item account-nav__item--active"><a href="user/home">Điều khiển</a></li>
                            <li class="account-nav__item"><a href="user/change-profile">Chỉnh sửa thông tin</a></li>
                            <li class="account-nav__item"><a href="user/history">Lịch sử mua hàng</a></li>
                            <!-- <li class="account-nav__item"><a href="account-order-details.php">Chi tiết hóa đơn</a>
                            </li> -->
                            <li class="account-nav__item"><a href="user/password">Mật khẩu</a></li>
                            <li class="account-nav__item"><a href="user/logOut">Đăng xuất</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-lg-9 mt-4 mt-lg-0">
                    

                    <?php 
                        if(file_exists($view_page_user))
                            include_once($view_page_user); 
                        else
                            echo "Trang khong ton tai";
                    ?>

            </div>
        </div>
    </div>
</div>