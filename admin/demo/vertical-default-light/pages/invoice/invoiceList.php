<div class="card">
    <div class="card-body">
        <h4 class="card-title">Tin</h4>
        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table id="order-listing" class="table">
                        <thead>
                            <tr>
                                <th>ID Hóa đơn</th>
                                <th>Người mua</th>
                                <th>Ngày mua</th>
                                <th>Thành tiền</th>
                                <th>Địa chỉ</th>
                                <th style="text-align: center;">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $hoaDon = getAllInvoice();
                            foreach ($hoaDon as $hoa_don) { ?>
                                <tr>
                                    <td><?= $hoa_don['idHoaDon']; ?></td>
                                    <?php $user = getUser($hoa_don['idUser']);?>
                                    <td><?= $user['email']; ?></td>
                                    <td><?= date("d/m/Y", strtotime($hoa_don['ngayMua'])); ?></td>
                                    <td><?= number_format($hoa_don['thanhTien']); ?> vnđ</td>
                                    <td><?= $hoa_don['diaChi']; ?></td>
                                    <td style="text-align: center;">
                                        <a href="?page=detailInvoice&idHoaDon=<?= $hoa_don['idHoaDon']; ?>"><button class="btn btn-outline-primary">Chi Tiết</button></a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>