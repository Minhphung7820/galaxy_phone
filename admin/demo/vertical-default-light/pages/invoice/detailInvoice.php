<?php
    $idHoaDon = $_GET['idHoaDon'];
    $thuTu=1;
?>
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Tin</h4>
        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table id="order-listing" class="table">
                        <thead>
                            <tr>
                                <th>Thứ tự</th>
                                <th>Tên sản phẩm</th>
                                <th>Đơn giá</th>
                                <th>Số lượng</th>
                                <th>Thành tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $hoaDonChiTiet = getDetailInvoice($idHoaDon);
                            foreach ($hoaDonChiTiet as $hoa_Don_Chi_Tiet) { ?>
                                <tr>
                                    <td><?= $thuTu; ?></td>
                                    <td><?= $hoa_Don_Chi_Tiet['tenSP']; ?></td>
                                    <td><?= number_format($hoa_Don_Chi_Tiet['donGia']); ?> vnđ</td>
                                    <td><?= $hoa_Don_Chi_Tiet['soLuong']; ?></td>
                                    <td><?= number_format($hoa_Don_Chi_Tiet['donGia']*$hoa_Don_Chi_Tiet['soLuong']);?> vnđ</td>
                                </tr>
                            <?php  $thuTu++; } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>