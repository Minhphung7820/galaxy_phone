<div class="card">
    <div class="card-body">
        <h4 class="card-title">Sản phẩm</h4>
        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table id="order-listing" class="table">
                        <thead>
                            <tr>
                                <th>ID Sản phẩm</th>
                                <th>Tên Sản phẩm</th>
                                <th>Giá</th>
                                <th>Giảm giá</th>
                                <th>Ngày nhập</th>
                                <th>Hình ảnh</th>
                                <th>Lượt xem</th>
                                <th>Thông số</th>
                                <th>Loại</th>
                                <th>Ẩn hiện</th>
                                <th style="text-align: center;">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $sanPham = getAllProduct();
                            foreach ($sanPham as $san_pham) {
                                $thongSo = json_decode($san_pham['thongSo'], true);
                            ?>
                                <tr>
                                    <td max-width="1px"><?= $san_pham['idSP']; ?></td>
                                    <td max-width="1px"><?= $san_pham['tenSP']; ?></td>
                                    <td max-width="1px"><?= number_format($san_pham['donGia']); ?></td>
                                    <td max-width="1px"><?= number_format($san_pham['giamGia']); ?></td>
                                    <td max-width="1px"><?= date("d/m/Y", strtotime($san_pham['ngayNhap'])); ?></td>
                                    <td max-width="1px">
                                        <img src="<?= $san_pham['hinhAnh']; ?>" alt="">
                                    </td>
                                    <td><?= $san_pham['luotXem']; ?></td>
                                    <td max-width="1px">
                                        <span>Màn hình: </span> <?= $thongSo["manHinh"]; ?> <br>
                                        <span>Hệ điều hành: </span> <?= $thongSo["heDieuHanh"]; ?><br>
                                        <span>Camera trước: </span> <?= $thongSo["cameraTruoc"]; ?><br>
                                        <span>Camera sau: </span> <?= $thongSo["cameraSau"]; ?><br>
                                        <span>Chip: </span> <?= $thongSo["Chip"]; ?><br>
                                        <span>RAM: </span> <?= $thongSo["RAM"]; ?><br>
                                        <span>Bộ nhớ trong: </span> <?= $thongSo["boNhoTrong"]; ?><br>
                                        <span>SIM: </span> <?= $thongSo["SIM"]; ?><br>
                                        <span>Pin/Sạc: </span> <?= $thongSo["pinVSac"]; ?>
                                    </td>
                                    <?php $loai_san_pham = getProductType($san_pham['idLoai']);?>
                                    <td max-width="1px"><?= $loai_san_pham['tenLoai']; ?></td>
                                    <td max-width="1px"><?php if ($san_pham['anHien'] == 1) echo "Ẩn";
                                        else echo "Hiện"; ?></td>
                                    <td max-width="1px" style="text-align: center;">
                                        <a href="?page=updateProduct&idSP=<?= $san_pham['idSP']; ?>"><button class="btn btn-outline-primary">Sửa</button></a>
                                        <a href="?page=deleteProduct&idSP=<?= $san_pham['idSP']; ?>"><button class="btn btn-outline-primary" onclick="return confirm('Bạn có muốn xóa sản phẩm này ?')">Xóa</button></a>
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