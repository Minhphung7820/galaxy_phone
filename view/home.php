<script>
    $(document).ready(function(){
        $('.nav-panel').addClass('nav-panel--sticky');
        $('.departments').addClass('departments--open departments--fixed');
    });
</script>

<div class="site__body">
    <!-- .block-slideshow -->
    <div class="block-slideshow block-slideshow--layout--with-departments block">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 d-none d-lg-block"></div>
                <div class="col-12 col-lg-9">
                    <div class="block-slideshow__body">
                        <div class="owl-carousel">
                            <a class="block-slideshow__slide">
                                <img src="libary/images/banners/banner1.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .block-slideshow / end -->
    <!-- .block-features -->
    <div class="block block-features block-features--layout--classic">
        <div class="container">
            <div class="block-features__list">
                <div class="block-features__item">
                    <div class="block-features__icon">
                        <svg width="48px" height="48px">
                            <use xlink:href="libary/images/sprite.svg#fi-free-delivery-48"></use>
                        </svg>
                    </div>
                    <div class="block-features__content">
                        <div class="block-features__title">Giao hàng miễn phí</div>
                        <div class="block-features__subtitle">Cho đơn hàng trên 200k</div>
                    </div>
                </div>
                <div class="block-features__divider"></div>
                <div class="block-features__item">
                    <div class="block-features__icon">
                        <svg width="48px" height="48px">
                            <use xlink:href="libary/images/sprite.svg#fi-24-hours-48"></use>
                        </svg>
                    </div>
                    <div class="block-features__content">
                        <div class="block-features__title">Hỗ trợ 24/7</div>
                        <div class="block-features__subtitle">Gọi chúng tôi mọi lúc</div>
                    </div>
                </div>
                <div class="block-features__divider"></div>
                <div class="block-features__item">
                    <div class="block-features__icon">
                        <svg width="48px" height="48px">
                            <use xlink:href="libary/images/sprite.svg#fi-payment-security-48"></use>
                        </svg>
                    </div>
                    <div class="block-features__content">
                        <div class="block-features__title">100% Bảo mật</div>
                        <div class="block-features__subtitle">Chỉ các đơn thanh toán</div>
                    </div>
                </div>
                <div class="block-features__divider"></div>
                <div class="block-features__item">
                    <div class="block-features__icon">
                        <svg width="48px" height="48px">
                            <use xlink:href="libary/images/sprite.svg#fi-tag-48"></use>
                        </svg>
                    </div>
                    <div class="block-features__content">
                        <div class="block-features__title">Ưu đãi hấp dẫn</div>
                        <div class="block-features__subtitle">Giảm giá đến 90%</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .block-features / end -->
    <!-- .block-products-carousel -->
    <div class="block block-products-carousel" data-layout="grid-4" data-mobile-grid-columns="2">
        <div class="container">
            <div class="block-header">
                <h3 class="block-header__title">Sản phẩm nổi bật</h3>
                <div class="block-header__divider"></div>

            </div>
            <div class="block-products-carousel__slider">
                <div class="block-products-carousel__preloader"></div>
                <div class="owl-carousel">
                    <?php foreach($sanpham_hot as $sanphams){ ?>
                        <div class="block-products-carousel__column">
                            <div class="block-products-carousel__cell">
                                    <div class="product-card product-card--hidden-actions">
                                        <div class="product-card__image product-image">
                                            <a href="view-product/<?=seo1($sanphams['tenSP'])?>/<?=$sanphams['idSP']?>" class="product-image__body"><img class="product-image__img" src="<?=$sanphams['hinhAnh'] ?>" alt="" width="100%">
                                            </a>
                                        </div>
                                        <div class="product-card__info">
                                            <div class="product-card__name"><a href="view-product/<?=seo1($sanphams['tenSP'])?>/<?=$sanphams['idSP']?>"><?=$sanphams['tenSP'] ?></a>
                                            </div>
                                            
                                            <div class="product-card__rating">
                                                <div class="product-card__rating-stars">
                                                    <div class="rating">
                                                        <div class="rating__body">
                                                            <i class="far fa-eye" style="color:#F9CC76;"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-card__rating-legend"><?=number_format($sanphams['luotXem'])?> Lượt xem</div>
                                            </div>

                                        </div>
                                        <div class="product-card__actions">
                                            <div class="product-card__prices"><?=number_format($sanphams['donGia'])?>đ</div>
                                            <div class="product-card__buttons">
                                            </div>
                                        </div>
                                    </div>

                                        
                                </div>
                            </div>

                            <?php } ?>

                </div>
            </div>
        </div>
    </div>
    <!-- .block-products-carousel / end -->
    <!-- .block-banner -->
    <div class="block block-banner">
        <div class="container">
            <a href="#" class="block-banner__body">
                <div class="block-banner__image block-banner__image--desktop" style="background-image: url('libary/images/banners/bannerdt.png');background-size:contain;"></div>
                <div class="block-banner__image block-banner__image--mobile" style="background-image: url('libary/images/banners/banner-1-mobile.jpg')"></div>


            </a>
        </div>
    </div>
    <!-- .block-banner / end -->
    <!-- .block-products -->
    <div class="block block-products block-products--layout--large-first" data-mobile-grid-columns="2">
        <div class="container">
            <div class="block-header">
                <h3 class="block-header__title">Sản phẩm bán chạy nhất</h3>
                <div class="block-header__divider"></div>
            </div>
                <div class="block-products__body">
                       
                        <div class="block-products__list">
                
                         <?php foreach($sanpham_bc as  $sanpham_bcss) {?>
                            <div class="block-products__list-item">
                                <div class="product-card product-card--hidden-actions">
                              
                                    <div class="product-card__badges-list">
                                        <div class="product-card__badge product-card__badge--hot">Hot</div>
                                    </div>
                                    <div class="product-card__image product-image">
                                        <a href="view-product/<?=seo1($sanpham_bcss['tenSP'])?>/<?=$sanpham_bcss['idSP']?>" class="product-image__body">
                                            <img class="product-image__img" src="<?=$sanpham_bcss['hinhAnh'] ?>" alt="">
                                        </a>
                                    </div>
                                    <div class="product-card__info">
                                        <div class="product-card__name">
                                            <a href="view-product/<?=seo1($sanpham_bcss['tenSP'])?>/<?=$sanpham_bcss['idSP'] ?>">
                                                <?=$sanpham_bcss['tenSP'] ?>
                                            </a>
                                        </div>
                                        <div class="product-card__rating">
                                            <div class="product-card__rating-stars">
                                                <div class="rating">
                                                    <div class="rating__body">
                                                        <i class="far fa-eye" style="color:#F9CC76;"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-card__rating-legend"><?=number_format($sanpham_bcss['luotXem'])?> Lượt xem</div>
                                        </div>
                                    
                                    </div>
                                    <div class="product-card__actions">

                                        <div class="product-card__prices"><?=number_format($sanpham_bcss['donGia'])?>đ</div>
                                        <div class="product-card__buttons">
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>

                
                                                
                        <div class="posts-view__pagination" style="margin: 0 auto;">
                                <a class="btn btn-primary col-12" href="product/view-all">Xem thêm sản phẩm</a>
                        </div>
                        
                        
                        </div>
                    </div>
        </div>
    </div>
    <!-- .block-products / end -->
    <!-- .block-categories -->
</div>
