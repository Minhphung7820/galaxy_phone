<div class="dashboard">
    <div class="dashboard__profile card profile-card">
        <div class="card-body profile-card__body">
            <div class="profile-card__avatar"><img src="./libary/images/avatars/261398589_1388375961559165_1613070334186862016_n.png" alt="">
            </div>
            <?php if (isset($_SESSION['login_user'])) {
                $loginUser = $_SESSION['login_user'];
            }; ?>
            <div class="profile-card__name"><?= $loginUser['ten'] ?></div>
            <div class="profile-card__email"><?= $loginUser['email'] ?></div>
            <div class="profile-card__edit"><a href="user/change-profile" class="btn btn-secondary btn-sm">Chỉnh sửa thông tin</a></div>
        </div>
    </div>
    <div class="dashboard__address card address-card address-card--featured">
        <div class="address-card__badge">Địa chỉ mặc định</div>
        <div class="address-card__body">
            <div class="address-card__name"><?= $loginUser['ten'] ?></div>
            <div class="address-card__row"><br>
            </div>
            <div class="address-card__row">
                <div class="address-card__row-title">Số điện thoại</div>
                <div class="address-card__row-content"><?= $loginUser['soDienThoai'] ?></div>
            </div>
            <div class="address-card__row">
                <div class="address-card__row-title">Địa chỉ Email</div>
                <div class="address-card__row-content"><?= $loginUser['email'] ?></div>
            </div>
            <div class="address-card__footer"><a href="user/change-profile"></a></div>
        </div>
    </div>
    <div class="dashboard__orders card">
        <div class="card-header">
            <h5>Các đơn hàng gần đây</h5>
        </div>
        <div class="card-divider"></div>
        <div class="card-table">
            <div class="table-responsive-sm">
                <table>
                    <thead>
                        <tr>
                            <th>Mã hóa đơn</th>
                            <th>Ngày đặt</th>
                            <th>Tổng cộng</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $hoaDon = getInvoiceByIDUser($loginUser['idUser']); ?>
                        <?php foreach ($hoaDon as $hoa_don) { ?>
                            <tr>
                                <td><?= $hoa_don['idHoaDon'] ?></td>
                                <td><?= date("d/m/Y h:i:s", strtotime($hoa_don['ngayMua'])) ?></td>
                                <td><?= number_format($hoa_don['thanhTien']) ?></td>
                                <td><a href="user/order-detail-view?id=<?= $hoa_don['idHoaDon']; ?>">Chi tiết</a></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>