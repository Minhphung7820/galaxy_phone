<?php
require_once "../controller/sendMail.php";
if (isset($_POST['btn'])) {
    $hoVaTen = $_POST['hoVaTen'];
    $email = $_POST['email'];
    $tieuDe = $_POST['tieuDe'];
    $noiDung = $_POST['noiDung'];
    // echo $hoVaTen, $email, $tieuDe, $noiDung;
    GuiMailContact($email, $hoVaTen, $tieuDe, $noiDung);
    echo "<script>alert('Lời nhắn của bạn đã được gửi. Xin cảm ơn ^^')</script>";
}
?>
<div class="site__body">
    <div class="block-map block">
        <div class="block-map__body"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1647.5102911408544!2d106.62933437817026!3d10.852428524059736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x11690ada8c36f9bc!2zVHLGsOG7nW5nIENhbyDEkeG6s25nIFRo4buxYyBow6BuaCBGUFQgUG9seXRlY2huaWMgVFAuSENNIChDUzMp!5e0!3m2!1svi!2s!4v1638108202580!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
    </div>
    <div class="page-header">
        <div class="page-header__container container">
            <div class="page-header__breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Trang chủ</a> <svg class="breadcrumb-arrow" width="6px" height="9px">
                                <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                            </svg></li>
                            </svg></li>
                        <li class="breadcrumb-item active" aria-current="page">Liên hệ</li>
                    </ol>
                </nav>
            </div>
            <div class="page-header__title">
                <h1>LIÊN HỆ</h1>
            </div>
        </div>
    </div>
    <div class="block">
        <div class="container">
            <div class="card mb-0">
                <div class="card-body contact-us">
                    <div class="contact-us__container">
                        <div class="row">
                            <div class="col-12 col-lg-6 pb-4 pb-lg-0">
                                <h4 class="contact-us__header card-title">Địa chỉ</h4>
                                <div class="contact-us__address">
                                    <p>Cao đẳng FPT Polytechnic<br>Số điện thoại: 0366 390 249</p>
                                    <p><strong>Thời gian mở cửa</strong><br>Từ thứ 2 đến Chủ nhật: 8AM-8PM
                                    <p><strong>Phương châm</strong><br>Vừa lòng khách đến, khách đi thì kệ khách</p>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <h4 class="contact-us__header card-title">Hãy để lại lời nhắn cho chúng tôi</h4>
                                <form method="post">
                                    <div class="form-row">
                                        <div class="form-group col-md-6"><label for="form-name">Họ và tên</label> <input required oninvalid="this.setCustomValidity('Vui lòng nhập họ và tên')" oninput="this.setCustomValidity('')" name='hoVaTen' type="text" id="form-name" class="form-control" placeholder="Họ và tên"></div>
                                        <div class="form-group col-md-6"><label for="form-email">Email</label> <input required oninvalid="this.setCustomValidity('Vui lòng nhập email')" oninput="this.setCustomValidity('')" name='email' type="email" id="form-email" class="form-control" placeholder="Email"></div>
                                    </div>
                                    <div class="form-group"><label for="form-subject">Tiêu đề</label> <input required oninvalid="this.setCustomValidity('Vui lòng nhập tiêu đề lời nhắn')" oninput="this.setCustomValidity('')" name='tieuDe' type="text" id="form-subject" class="form-control" placeholder="Tiêu đề"></div>
                                    <div class="form-group"><label for="form-message">Nội dung</label> <textarea required oninvalid="this.setCustomValidity('Vui lòng nhập nội dung lời nhắn')" oninput="this.setCustomValidity('')" name='noiDung' id="form-message" class="form-control" rows="4"></textarea></div><button name='btn' type="submit" class="btn btn-primary">Gửi lời nhắn</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- site__body / end -->