<?php
if (isset($_SESSION['login_user'])) {
    $loginUser = $_SESSION['login_user'];
}
if (isset($_POST['btn'])) {
    $comment = $_POST['comment'];
    comment($loginUser['idUser'], 0, $comment, $detai_pro['idSP']);
}
$binhLuan = getCommentByIDSP($detai_pro['idSP']);
?>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v12.0&appId=101714467363330&autoLogAppEvents=1" nonce="1RUbz9db"></script>
<div class="site__body">
    <div class="page-header">
        <div class="page-header__container container">
            <div class="page-header__breadcrumb">

            </div>
        </div>
    </div>
    <div class="block">
        <div class="container">
            <div class="product product--layout--standard" data-layout="standard">
                <div class="product__content">
                    <!-- .product__gallery -->


                    <div class="product__gallery">
                        <div class="product-gallery">
                            <div class="product-gallery__featured">
                                <button class="product-gallery__zoom">
                                    <svg width="24px" height="24px">
                                        <use xlink:href="images/sprite.svg#zoom-in-24"></use>
                                    </svg>
                                </button>
                                <div class="owl-carousel owl-loaded owl-drag" id="product-image">
                                    <div class="owl-stage-outer">
                                        <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 2655px;">


                                            <div class="owl-item active" style="width: 531px;">
                                                <div class="product-image product-image--location--gallery">
                                                    <a href="<?= $detai_pro['hinhAnh'] ?>" data-width="700" data-height="700" class="product-image__body" target="_blank">
                                                        <img class="product-image__img" src="<?= $detai_pro['hinhAnh'] ?>" alt="">
                                                    </a>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="owl-nav disabled">
                                        <button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span>
                                        </button>
                                        <button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span>
                                        </button>
                                    </div>
                                    <div class="owl-dots disabled"></div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- .product__gallery / end -->
                    <!-- .product__info -->
                    <div class="product__info">

                        <h1 class="product__name"><?php echo $detai_pro['tenSP'] ?></h1>
                        <div class="product__rating">
                            <div class="product__rating-stars">
                                <div class="rating">
                                    <div class="rating__body">
                                        <i class="far fa-eye" style="color:#F9CC76;"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="product__rating-legend"><a><?= number_format($detai_pro['luotXem']) ?> Lượt xem</a>
                            </div>
                        </div>
                        <ul class="product__meta">
                            <li class="product__meta-availability">Thể loại: <span class="text-success"><?= get_name_category($detai_pro['idLoai'])['tenLoai'] ?></span>
                            </li>

                        </ul>
                    </div><!-- .product__info / end -->
                    <!-- .product__sidebar -->
                    <div class="product__sidebar">

                        <div class="product__prices"><?= number_format($detai_pro['donGia']) ?>đ</div>

                        <form class="product__options" id="product_view" method="POST">
                            <input type="hidden" name="id_prod" value="<?php echo $detai_pro['idSP'] ?>">
                            <input type="hidden" name="gia" value="<?php echo $detai_pro['donGia'] ?>">
                            <input type="hidden" name="tensp" value="<?php echo $detai_pro['tenSP'] ?>">
                            <input type="hidden" name="hinhanh" value="<?php echo $detai_pro['hinhAnh'] ?>">
                            <div class="form-group product__option"><label class="product__option-label" for="product-quantity">Số lượng</label>
                                <div class="product__actions">
                                    <div class="product__actions-item">
                                        <div class="input-number product__quantity">
                                            <input name="soluong" id="product-quantity" class="input-number__input form-control form-control-lg" type="number" min="1" value="1">
                                            <div class="input-number__add"></div>
                                            <div class="input-number__sub"></div>
                                        </div>
                                    </div>
                                    <div class="product__actions-item product__actions-item--addtocart">
                                        <button onclick="addCart();" class="btn btn-primary btn-lg">Thêm giỏ hàng</button>
                                    </div>

                                </div>
                            </div>
                        </form><!-- .product__options / end -->
                    </div><!-- .product__end -->
                    <div class="product__footer">

                        <div class="product__share-links share-links">
                            <ul class="share-links__list">
                                <div class="fb-like" data-href="<?= $current_link ?>" data-width="" data-layout="standard" data-action="like" data-size="small" data-share="true"></div>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-tabs product-tabs--sticky">
                <div class="product-tabs__list">
                    <div class="product-tabs__list-body">
                        <div class="product-tabs__list-container container"><a href="#tab-description" class="product-tabs__item product-tabs__item--active">Đặc điểm</a> <a href="#tab-specification" class="product-tabs__item">Thông số</a></div>
                    </div>
                </div>
                <div class="product-tabs__content">
                    <div class="product-tabs__pane product-tabs__pane--active" id="tab-description">
                        <div class="typography">
                            <h3>Đặc điểm kỹ thuật</h3>
                            <p><?= $detai_pro['moTa'] ?></p>
                        </div>
                    </div>
                    <div class="product-tabs__pane" id="tab-specification">
                        <div class="spec">
                            <h3 class="spec__header">Thông số kỹ thuật</h3>
                            <div class="spec__section">
                                <h4 class="spec__section-title">Tổng quan</h4>
                                <div class="spec__row">
                                    <div class="spec__name">Màn hình </div>
                                    <div class="spec__value">
                                        <?= json_decode($detai_pro['thongSo'], true)['manHinh'] ?>
                                    </div>
                                </div>
                                <div class="spec__row">
                                    <div class="spec__name">Hệ điều hành </div>
                                    <div class="spec__value">
                                        <?= json_decode($detai_pro['thongSo'], true)['heDieuHanh'] ?>
                                    </div>
                                </div>
                                <div class="spec__row">
                                    <div class="spec__name">Camera trước </div>
                                    <div class="spec__value">
                                        <?= json_decode($detai_pro['thongSo'], true)['cameraTruoc'] ?>
                                    </div>
                                </div>
                                <div class="spec__row">
                                    <div class="spec__name">Camera sau </div>
                                    <div class="spec__value">
                                        <?= json_decode($detai_pro['thongSo'], true)['cameraSau'] ?>
                                    </div>
                                </div>
                                <div class="spec__row">
                                    <div class="spec__name">Vi xử lý </div>
                                    <div class="spec__value">
                                        <?= json_decode($detai_pro['thongSo'], true)['Chip'] ?>
                                    </div>
                                </div>
                                <div class="spec__row">
                                    <div class="spec__name">RAM </div>
                                    <div class="spec__value">
                                        <?= json_decode($detai_pro['thongSo'], true)['RAM'] ?>
                                    </div>
                                </div>
                                <div class="spec__row">
                                    <div class="spec__name">Bộ nhớ trong </div>
                                    <div class="spec__value">
                                        <?= json_decode($detai_pro['thongSo'], true)['boNhoTrong'] ?>
                                    </div>
                                </div>
                                <div class="spec__row">
                                    <div class="spec__name">Hệ điều hành </div>
                                    <div class="spec__value">
                                        <?= json_decode($detai_pro['thongSo'], true)['SIM'] ?>
                                    </div>
                                </div>
                                <div class="spec__row">
                                    <div class="spec__name">Pin </div>
                                    <div class="spec__value">
                                        <?= json_decode($detai_pro['thongSo'], true)['pinVSac'] ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div><!-- .block-products-carousel -->

    <div class="block">
        <div class="container">
            <section class="post__section">
                <h4 class="post__section-title">Bình luận</h4>
                <!-- <ol class="comments-list comments-list--level--0"> -->
                <div class="comments-list__item" list-style-type: none;>
                    <?php foreach ($binhLuan as $binh_luan) { ?>
                        <div class="comment">
                            <div class="comment__avatar"><a href="#"><img src="./libary/images/avatars/261398589_1388375961559165_1613070334186862016_n.png" alt=""></a></div>
                            <div class="comment__content">
                                <div class="comment__header">
                                    <?php $tai_khoan_binh_luan = getUserByIDUser($binh_luan['idUser']) ?>
                                    <div class="comment__author"><?= $tai_khoan_binh_luan['ten']; ?></div>
                                </div>
                                <div class="comment__text"><?= $binh_luan['noiDung']; ?></div>
                                <div class="comment__date"> Đăng lúc <?= date("d/m/Y h:i", strtotime($binh_luan['ngayDang'])); ?></div>
                            </div>
                        </div>
                        <hr>
                    <?php } ?>
                </div>
                <!-- </ol> -->
            </section>
            <?php if (isset($loginUser)) echo '
            <section class="post__section">
                <h4 class="post__section-title">Viết bình luận của bạn</h4>
                <form method="post">
                    <div class="form-group"><label for="comment-content">Bình luận</label> <textarea
                            class="form-control" id="comment-content" name="comment" rows="6"></textarea></div>
                    <div class="form-group mt-4"><button type="submit" name="btn"
                            class="btn btn-primary btn-lg">Gửi bình luận</button></div>
                </form>
            </section>
            ';
            else {
                echo '
            <section class="post__section" style="text-align: center">
                <h4 class="post__section-title">Viết bình luận của bạn</h4>
                <a class="btn btn-primary btn-lg" href="login-account" role="button">ĐĂNG NHẬP ĐỂ BÌNH LUẬN</a>
            </section>';
            }
            ?>
        </div>
    </div>
    <div class="block block-products-carousel" data-layout="grid-5" data-mobile-grid-columns="2">
        <div class="container">
            <div class="block-header">
                <h3 class="block-header__title">Các sản phẩm liên quan</h3>
                <div class="block-header__divider"></div>
                <div class="block-header__arrows-list"><button class="block-header__arrow block-header__arrow--left" type="button"><svg width="7px" height="11px">
                            <use xlink:href="images/sprite.svg#arrow-rounded-left-7x11"></use>
                        </svg></button> <button class="block-header__arrow block-header__arrow--right" type="button"><svg width="7px" height="11px">
                            <use xlink:href="images/sprite.svg#arrow-rounded-right-7x11"></use>
                        </svg></button></div>
            </div>
            <div class="block-products-carousel__slider">
                <div class="block-products-carousel__preloader"></div>
                <div class="owl-carousel">
                    <?php $sanPhamLienQuan = getProductByIDLoai($detai_pro['idLoai']); ?>
                    <?php foreach ($sanPhamLienQuan as $san_Pham_Lien_Quan){ ?>
                    <div class="block-products-carousel__column">
                        <div class="block-products-carousel__cell">
                            <div class="product-card product-card--hidden-actions">
                                <div class="product-card__image product-image"><a href="view-product/<?=seo1($san_Pham_Lien_Quan['tenSP'])?>/<?=$san_Pham_Lien_Quan['idSP']?>" class="product-image__body"><img class="product-image__img" src="<?=$san_Pham_Lien_Quan['hinhAnh']?>" alt=""></a></div>
                                <div class="product-card__info">
                                    <div class="product-card__name"><a href="view-product/<?=seo1($san_Pham_Lien_Quan['tenSP'])?>/<?=$san_Pham_Lien_Quan['idSP']?>"><?=$san_Pham_Lien_Quan['tenSP']?></a></div>
                                    <div class="product-card__rating">
                                        <div class="product-card__rating-stars"></div>
                                        <div class="product-card__rating-legend"><?=number_format($san_Pham_Lien_Quan['luotXem'])?> Lượt xem</div>
                                    </div>
                                    <ul class="product-card__features-list">
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </div>
                                <div class="product-card__actions">
                                    <div class="product-card__prices"><?=number_format($san_Pham_Lien_Quan['donGia'])?>đ</div>
                                    <div class="product-card__buttons"><svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                            </svg> <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                        <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare" type="button"><svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#compare-16"></use>
                                            </svg> <span class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php  }?>
                </div>
            </div>
        </div>
    </div><!-- .block-products-carousel / end -->
    <script>
        function addCart(){
            event.preventDefault();
              
            $.ajax({
                    url: 'controller/?act=api-add-cart',
                    type: 'POST',
                    dataType: 'text',
                    data: $('#product_view').serialize(),
                    success: function(data){

                        swal("Đơn hàng đã được thêm vào giỏ!", "", "success");
                        $( "#listProduct_Cart" ).load("controller/?act=api-list-cart");
                        $( "#count_product" ).text(data);
                    },
                    error: function(){
                    
                        swal("Có lỗi đã xảy ra!", "", "error");
    
                    }
            });
              
        }
    </script>
</div><!-- site__body / end -->