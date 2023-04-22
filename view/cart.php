<div class="site__body">
    <div class="page-header">
        <div class="page-header__container container">
            <div class="page-header__breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Trang chủ</a>
                        </li>
                     
                        <li class="breadcrumb-item active" aria-current="page">Thanh toán</li>
                    </ol>
                </nav>
            </div>
            <div class="page-header__title">
                <h1>Giỏ hàng và Thanh toán</h1>
            </div>
        </div>
    </div>
    <div class="cart block">
        <?php if(count($data) <= 0){ ?>
            <h3 style="text-align: center;">Bạn chưa có gì trong giỏ hàng</h3>
            <img src="libary/images/9bdd8040b334d31946f49e36beaf32db.png" width="30%" style="display: flex;margin: 0 auto;">
        <?php }else{ ?>
            <div class="container">
                <table class="cart__table cart-table">
                    <thead class="cart-table__head">
                        <tr class="cart-table__row">
                            <th class="cart-table__column cart-table__column--image">Hình ảnh</th>
                            <th class="cart-table__column cart-table__column--product">Thông tin sản phẩm</th>
                            <th class="cart-table__column cart-table__column--price">Giá</th>
                            <th class="cart-table__column cart-table__column--quantity">Số lượng</th>
                            <th class="cart-table__column cart-table__column--total">Thành tiền</th>
                        </tr>
                    </thead>
                    <tbody class="cart-table__body">
                        
                        <?php foreach($data as $key => $value) { $allCart += $value['price'];?>
                        <tr class="cart-table__row">
                            <td class="cart-table__column cart-table__column--image">
                                <div class="product-image">
                                    <a class="product-image__body"><img class="product-image__img" src="<?=$value['thumb']?>" alt="">
                                    </a>
                                </div>
                            </td>
                            <td class="cart-table__column cart-table__column--product"><a class="cart-table__product-name"><?=$value['nameProduct']?></a>
                                <ul class="cart-table__options">
                                    Mặc định
                                </ul>
                            </td>
                            <td class="cart-table__column cart-table__column--price" data-title="Giá"><?= number_format($value['price'] / $value['quantity']) ?>đ</td>
                            <td class="cart-table__column cart-table__column--quantity" data-title="Số lượng">
                                <?= $value['quantity'] ?>
                            </td>
                            <td class="cart-table__column cart-table__column--total" data-title="Thành tiền"><?= number_format($value['price']) ?>đ</td>
                        
                        </tr>
                        <?php } ?>
                    
                    </tbody>
                </table>
                <div class="cart__actions">
                    <div class="cart__coupon-form">
                    </div>
                    <div class="cart__buttons"><a href="controller" class="btn btn-light">Bạn muốn tiếp tục lựa sản phẩm?</a>
                    </div>
                </div>
                <div class="row justify-content-end pt-5">
                    
                    <div class="col-12 col-md-7 col-lg-6 col-xl-7">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Địa chỉ</h3>
                                <div class="address-card__badge">Địa chỉ giao hàng</div>
                                <div class="address-card__body">

                                    <form id="dia_chi_giao_hang" method="post">
                                        <div class="address-card__name">
                                            <label for="">Tên: </label>
                                            <input type="text" class="form-control" name="ten_nguoi_nhan" value="<?=$loginUser['tenDangNhap']?>" placeholder="Tên người nhận">
                                        </div>
                                        <div class="address-card__row">
                                            <label for="">Địa chỉ: </label>
                                            <input type="text" class="form-control" name="dia_chi" placeholder="Địa chỉ người nhận">
                                        </div>
                                        <div class="address-card__row">
                                            <label for="">Số điện thoại: </label>
                                            <input type="text" class="form-control" name="so_dien_thoai" value="<?=$loginUser['soDienThoai']?>" placeholder="Số điện thoại người nhận">
                                        </div>
                                        <div class="address-card__row">
                                            <label for="">Ghi chú cho giao hàng: </label>
                                            <textarea class="form-control" name="ghi_chu">Không có</textarea>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-12 col-md-7 col-lg-6 col-xl-5">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Thanh toán</h3>
                                <table class="cart__totals">
                                    <thead class="cart__totals-header">
                                        <tr>
                                            <th>Tạm tính</th>
                                            <td><?=number_format($allCart)?>đ</td>
                                        </tr>
                                    </thead>
                                    <tbody class="cart__totals-body">
                                        <tr>
                                            <th>Phí vận chuyển</th>
                                            <td><?=number_format($shipping)?>đ</td>
                                        </tr>
                                    </tbody>
                                    <tfoot class="cart__totals-footer">
                                        <tr>
                                            <th>Thành tiền</th>
                                            <td id="total"><?=number_format($allCart + $shipping)?>đ</td>
                                        </tr>
                                    </tfoot>
                                </table>
                                <?php if(isset($_SESSION['login_user'])){ ?>
                                    <button class="btn btn-primary btn-xl btn-block cart__checkout-button" id="checkout">Thanh toán ngay!</button>
                                <?php } else { ?>
                                    <a class="btn btn-primary btn-xl btn-block cart__checkout-button" href="login-account">Đăng nhập để tiếp tục!</a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

<script>


    $(document).ready(function () {
        $('#checkout').click(function () {
            
            $.ajax({
                url: 'controller/?act=api-checkout',
                type: 'POST',
                dataType: 'json',
                data: $('#dia_chi_giao_hang').serialize(),
                success: function (data) {
                    document.getElementById("checkout").disabled = true;
                    swal(data.msg, "", "success");
                },
                error: function (data) {
                    swal('Có lỗi xẩy ra trong quá trình đặt hàng! Vui lòng kiểm tra lại thông tin!', "", "error");
                }
            });
            
        });
     
    });
</script>

