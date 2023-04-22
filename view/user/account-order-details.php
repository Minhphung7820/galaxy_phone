<?php
    if (isset($_SESSION['login_user'])){
        $loginUser = $_SESSION['login_user'];
    }
    $idHoaDon = $_GET['id'];
    $hoadon = getInvoice($idHoaDon);
    $chiTietHoaDon = getInvoiceDetail($idHoaDon);
    $tongCong = 0;
    $giamGia = 0;
?>
<div class="col-12 col-lg-9 mt-4 mt-lg-0">
    <div class="card">
        <div class="order-header">
            <div class="order-header__actions"><a href="user/history" class="btn btn-xs btn-secondary">Trở về danh sách</a></div>
            <h5 class="order-header__title">Mã hóa đơn #<?=$hoadon['idHoaDon'];?></h5>
            <div class="order-header__subtitle">Đã được đặt lúc <mark class="order-header__date"><?=date("d/m/Y h:i",strtotime($hoadon['ngayMua']));?></mark></div>
        </div>
        <div class="card-divider"></div>
        <div class="card-table">
            <div class="table-responsive-sm">
                <table>
                    <thead>
                        <tr>
                            <th>Sản phẩm</th>
                            <th>Tổng cộng</th>
                        </tr>
                    </thead>
                    <tbody class="card-table__body card-table__body--merge-rows">
                        <?php foreach($chiTietHoaDon as $chi_tiet_hoa_don) { ?>
                        <tr>

                            <?$sanPham = get_detail_product_id($chi_tiet_hoa_don['idSP']);
                            $giamGia = $giamGia + $sanPham['giamGia'];
                            ?>
                            <td><?=$chi_tiet_hoa_don['tenSP']?> x <?=$chi_tiet_hoa_don['soLuong']?></td>
                            <td><?=number_format($chi_tiet_hoa_don['donGia']*$chi_tiet_hoa_don['soLuong'], 0, ',', '.')?> vnđ</td>
                            <?php $tongCong = $tongCong + $chi_tiet_hoa_don['donGia']*$chi_tiet_hoa_don['soLuong']; ?>
                        </tr>
                        <?php }?>
                    </tbody>
                    <tbody class="card-table__body card-table__body--merge-rows">
                        <tr>
                            <th>Tổng cộng</th>
                            <td><?=number_format($tongCong, 0, ',', '.')?> vnđ</td>
                        </tr>
                        <tr>
                            <th>Giảm giá</th>
                            <td><?=number_format($giamGia, 0, ',', '.')?> vnđ</td>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Thành tiền</th>
                            <td><?=number_format($tongCong-$giamGia, 0, ',', '.')?> vnđ</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    <div class="row mt-3 no-gutters mx-n2">
        <div class="col-sm-12 col-12 px-2">
            <div class="card address-card address-card--featured">
                <div class="address-card__body">
                    <div class="address-card__badge address-card__badge--muted">Địa chỉ giao hàng
                    </div>
                    <div class="address-card__name"><?=$loginUser['ten'];?></div>
                    <div class="address-card__row"><?=$hoadon['diaChi'];?></div>
                    <div class="address-card__row">
                        <div class="address-card__row-title">Số điện thoại</div>
                        <div class="address-card__row-content"><?=$loginUser['soDienThoai'];?></div>
                    </div>
                    <div class="address-card__row">
                        <div class="address-card__row-title">Địa chỉ Email</div>
                        <div class="address-card__row-content"><?=$loginUser['email'];?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>