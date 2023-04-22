<?php  if (isset($_SESSION['login_user'])){
        $loginUser = $_SESSION['login_user'];
    }?>
<div class="col-12 col-lg-9 mt-4 mt-lg-0">
    <div class="card">
        <div class="card-header">
            <h5>Lịch sử mua hàng</h5>
        </div>
        <div class="card-divider"></div>
        <div class="card-table">
            <div class="table-responsive-sm">
                <table>
                    <thead>
                        <tr>
                            <th>Mã hóa đơn</th>
                            <th>Ngày mua</th>
                            <th>Tổng cộng</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $hoaDon = getInvoiceByIDUser($loginUser['idUser']); ?>
                        <?php foreach($hoaDon as $hoa_don){ ?>
                            <tr>
                                <td><?=$hoa_don['idHoaDon']?></td>
                                <td><?=date("d/m/Y h:i:s",strtotime($hoa_don['ngayMua']))?></td>
                                <td><?=number_format($hoa_don['thanhTien'])?></td>
                                <td><a href="user/order-detail-view?id=<?=$hoa_don['idHoaDon'];?>">Chi tiết</a></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-divider"></div>
        <div class="card-footer">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled"><a class="page-link page-link--with-arrow"
                        href="#" aria-label="Previous"><svg
                            class="page-link__arrow page-link__arrow--left" aria-hidden="true"
                            width="8px" height="13px">
                            <use xlink:href="images/sprite.svg#arrow-rounded-left-8x13"></use>
                        </svg></a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active"><a class="page-link" href="#">2 <span
                            class="sr-only">(current)</span></a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link page-link--with-arrow" href="#"
                        aria-label="Next"><svg class="page-link__arrow page-link__arrow--right"
                            aria-hidden="true" width="8px" height="13px">
                            <use xlink:href="images/sprite.svg#arrow-rounded-right-8x13"></use>
                        </svg></a></li>
            </ul>
        </div>
    </div>
</div>