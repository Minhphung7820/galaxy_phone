<div class="card">
    <div class="card-body">
        <h4 class="card-title">Loại sản phẩm</h4>
        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table id="order-listing" class="table">
                        <thead>
                            <tr>
                                <th>ID Loại</th>
                                <th>Tên Loại</th>
                                <th>Ẩn hiện</th>
                                <th style="text-align: center;">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $loaiSanPham = getAllProductType();
                            foreach ($loaiSanPham as $loai_san_pham) { ?>
                                <tr>
                                    <td><?= $loai_san_pham['idLoai']; ?></td>
                                    <td><?= $loai_san_pham['tenLoai']; ?></td>
                                    <td><?php if ($loai_san_pham['anHien'] == 1) echo "Ẩn";
                                        else echo "Hiện"; ?></td>
                                    <td style="text-align: center;">
                                        <?php 
                                            $sanPham = getProductByIDLoai($loai_san_pham['idLoai']);
                                            $thongBao1 = "return confirm('Bạn có muốn xóa loại sản phẩm này ?')";
                                            $thongBao2 = "return alert('Bạn không thể xóa loại sản phẩm này !')";
                                            if(is_array($sanPham)) $thongBao = $thongBao2; else $thongBao = $thongBao1;
                                        ?>
                                        <a href="?page=updateProductType&idLoai=<?= $loai_san_pham['idLoai']; ?>"><button class="btn btn-outline-primary">Sửa</button></a>
                                        <a <?php if(is_array($sanPham)==false) echo "href="?>"?page=deleteProductType&idLoai=<?= $loai_san_pham['idLoai']; ?>"><button class="btn btn-outline-primary" onclick="<?=$thongBao?>">Xóa</button></a>
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