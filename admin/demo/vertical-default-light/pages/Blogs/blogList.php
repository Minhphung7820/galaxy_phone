<div class="card">
    <div class="card-body">
        <h4 class="card-title">Tin</h4>
        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table id="order-listing" class="table">
                        <thead>
                            <tr>
                                <th>ID Tin</th>
                                <th>Tiêu đề</th>
                                <th>Ngày đăng</th>
                                <th>Hình ảnh</th>
                                <th>Người đăng</th>
                                <th>Lượt xem</th>
                                <th>Ẩn hiện</th>
                                <th style="text-align: center;">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $tin = getAllBlog();
                            foreach ($tin as $tintuc) { ?>
                                <tr>
                                    <td><?= $tintuc['idTin']; ?></td>
                                    <td><p><?= $tintuc['tieuDe']; ?></p></td>
                                    <td><?= date("d/m/Y", strtotime($tintuc['ngayDang'])); ?></td>
                                    <td><img src="<?= $tintuc['hinhAnh']; ?>" alt=""></td>
                                    <?php $user = getUser($tintuc['idUser']);?>
                                    <td><?= $user['ten']; ?></td>
                                    <td><?= $tintuc['luotXem']; ?></td>
                                    <td><?php if ($tintuc['anHien'] == 1) echo "Ẩn";
                                        else echo "Hiện"; ?></td>
                                    <td style="text-align: center;">
                                        <a href="?page=updateBlog&idTin=<?= $tintuc['idTin']; ?>"><button class="btn btn-outline-primary">Sửa</button></a>
                                        <a href="?page=deleteBlog&idTin=<?= $tintuc['idTin']; ?>"><button class="btn btn-outline-primary" onclick="return confirm('Bạn có muốn xóa tin này ?')">Xóa</button></a>
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