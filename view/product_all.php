<div class="site__body">
    <div class="page-header">
        <div class="page-header__container container">
                <div class="page-header__breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Trang chủ</a>
                            </li>
                            
                            <li class="breadcrumb-item active" aria-current="page">Danh sách sản phẩm</li>
                        </ol>
                    </nav>
                </div>
                <div class="page-header__title">
                    <h1><?=$name_page?></h1>
                </div>
        </div>
    </div>
    <div class="container">
        <div class="shop-layout shop-layout--sidebar--start">
            <div class="shop-layout__sidebar">
                <div class="block block-sidebar block-sidebar--offcanvas--mobile">
                    <div class="block-sidebar__backdrop"></div>
                    <div class="block-sidebar__body">
                        <div class="block-sidebar__header">
                            <div class="block-sidebar__title">Bộ lọc</div>
                            <button class="block-sidebar__close" type="button">
                                <i class="fas fa-search" style="margin-right:5px"></i>   
                            </button>

                        </div>
                        <div class="block-sidebar__item">
                            <div class="widget-filters widget widget-filters--offcanvas--mobile" data-collapse data-collapse-opened-class="filter--opened">
                                <h4 class="widget-filters__title widget__title">Bộ lọc</h4>
                                <div class="widget-filters__list">
                                    <div class="widget-filters__item">
                                        <div class="filter filter--opened" data-collapse-item><button type="button" class="filter__title" data-collapse-trigger>Danh mục</button>
                                            <div class="filter__body" data-collapse-content>
                                                <div class="filter__container">
                                                    <div class="filter-categories-alt">
                                                        <ul class="filter-categories-alt__list filter-categories-alt__list--level--1" data-collapse-opened-class="filter-categories-alt__item--open">
                                                            <?php foreach($danhmuc as $danhmucs){ ?>
                                                                <?php if(getProductByIDLoai($danhmucs['idLoai'])!=null) echo ' 
                                                            <li class="filter-categories-alt__item" data-collapse-item>
                                                                <a href="product-type/'.seo1($danhmucs["tenLoai"]).'/'.$danhmucs["idLoai"].'">'.$danhmucs["tenLoai"].'</a>
                                                            </li>
                                                            '; ?> 
                                                            <?php } ?>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shop-layout__content">
                <div class="block">
                    <div class="products-view">
                        <div class="products-view__list products-list" data-layout="grid-3-sidebar" data-with-features="false" data-mobile-grid-columns="2">
                            <div class="products-list__body">
                        <?php foreach($sanpham as  $sanphams){?>
                                <div class="products-list__item">
                                    <div class="product-card product-card--hidden-actions">
                                        <div class="product-card__badges-list">
                                            <div class="product-card__badge product-card__badge--hot">Hot</div>
                                        </div>

                                        <div class="product-card__image product-image">
                                            <a href="view-product/<?=seo1($sanphams['tenSP'])?>/<?=$sanphams['idSP'] ?>" class="product-image__body">
                                                <img class="product-image__img" src="<?php echo $sanphams['hinhAnh'] ?>" alt="">
                                            </a>
                                        </div>

                                        <div class="product-card__info">
                                            <div class="product-card__name"><a href="?act=detail_prod&id_source=<?php echo $sanphams['idSP'] ?>"><?php echo $sanphams['tenSP'] ?></a></div>
                                            
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
                                <?php }?>

                            
                
                            </div>
                        </div>
                        <div class="products-view__pagination">
                            <?php   
                                echo taoLinkPhanTrang($base_url, $total_rows, $page_num, $page_size);
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- site__body / end -->