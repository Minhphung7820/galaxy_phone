<div class="card">
    <div class="card-body">
        <h4 class="card-title">Tài khoản</h4>
        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table id="order-listing" class="table">
                        <thead>
                            <tr>
                                <th>ID User</th>
                                <th>Tên đăng nhập</th>
                                <th>Mật khẩu</th>
                                <th>Tên</th>
                                <th>Email</th>
                                <th>Số điện thoại</th>
                                <th>Ngày tạo</th>
                                <th>Quyền</th>
                                <th style="text-align: center;">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $taiKhoan = getAllUser();
                            foreach ($taiKhoan as $tai_khoan) { ?>
                                <tr>
                                    <td><?= $tai_khoan['idUser']; ?></td>
                                    <td><?= $tai_khoan['tenDangNhap']; ?></td>
                                    <td><?= $tai_khoan['matKhau']; ?></td>
                                    <td><?= $tai_khoan['ten']; ?></td>
                                    <td><?= $tai_khoan['email']; ?></td>
                                    <td><?= $tai_khoan['soDienThoai']; ?></td>
                                    <td><?= date("d/m/Y",strtotime($tai_khoan['ngayTao'])); ?></td>
                                    <td><?php if ($tai_khoan['nhom'] == 1) echo "User";
                                        else echo "Admin"; ?></td>
                                    <td style="text-align: center;">
                                        <a href="?page=updateUser&idUser=<?= $tai_khoan['idUser']; ?>"><button class="btn btn-outline-primary">Sửa</button></a>
                                        <a href="?page=deleteUser&idUser=<?= $tai_khoan['idUser']; ?>"><button class="btn btn-outline-primary" onclick="return confirm('Bạn có muốn xóa tài khoản này ?')">Xóa</button></a>
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