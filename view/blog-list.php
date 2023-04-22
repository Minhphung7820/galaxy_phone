<div class="container" style="margin-top: 20px;">
    <div class="row">
        <div class="col-12 col-lg-8">
            <div class="block">
                <div class="posts-view">
                    <div class="posts-view__list posts-list posts-list--layout--list">
                        <div class="posts-list__body">
                            <?php foreach ($new as $news) {?>
                            <div class="posts-list__item">
                                <div class="post-card post-card--layout--list post-card--size--nl">
                                    <div class="post-card__image"><a href="view-news/<?=seo1($news['tieuDe'])?>/<?=$news['idTin'] ?>"><img src="<?=$news['hinhAnh']?>" alt=""></a></div>
                                    <div class="post-card__info">
                                        <div class="post-card__category">Số lượt xem: <?=$news['luotXem']?></div>
                                        <div class="post-card__name"><a href="view-news/<?=seo1($news['tieuDe'])?>/<?=$news['idTin'] ?>"><?=$news['tieuDe']?></a></div>
                                        <div class="post-card__date"><?=date("d/m/y h:i:s", strtotime($news['ngayDang']))?></div>
                                        <div class="post-card__content"><?=$news['tomTat']?></div>
                                        <div class="post-card__read-more"><a href="view-news/<?=seo1($news['tieuDe'])?>/<?=$news['idTin'] ?>" class="btn btn-secondary btn-sm">ĐỌC THÊM</a></div>
                                    </div>
                                </div>
                            <hr>
                            </div>
                            <?php  }?>
                        </div>
                    </div>
                    <div class="posts-view__pagination">
                        <?php   
                            echo taoLinkPhanTrang($base_url, $total_rows, $page_num, $page_size);
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-4">
            <div class="block block-sidebar block-sidebar--position--end">
                <div class="block-sidebar__item">
                    <div class="widget-aboutus widget">
                        <h4 class="widget__title">Tin tức</h4>
                        <div class="widget-aboutus__text">Cập nhật tin tức về công nghệ.</div>
                        <!-- social-links -->
                        <div class="social-links widget-aboutus__socials social-links--shape--rounded">
                            <ul class="social-links__list">
                                <li class="social-links__item"><a class="social-links__link social-links__link--type--youtube" href="https://www.youtube.com/channel/UCTSMRdLqIiNNCLLdQ6RJEFw" target="_blank"><i class="fab fa-youtube"></i></a></li>
                                <li class="social-links__item"><a class="social-links__link social-links__link--type--facebook" href="https://www.facebook.com/adphcbook" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            </ul>
                        </div><!-- social-links / end -->
                    </div>
                </div>
                <?php $lastestBlog = getLastestBlogs() ?>
                <div class="block-sidebar__item">
                    <div class="widget-posts widget">
                        <h4 class="widget__title">Bài viết mới</h4>
                        <div class="widget-posts__list">
                            <?php foreach($lastestBlog as $lastest_Blog){ ?>
                            <div class="widget-posts__item">
                                <div class="widget-posts__image"><a href="view-news/<?=seo1($lastest_Blog['tieuDe'])?>/<?=$lastest_Blog['idTin'] ?>"><img src="<?=$lastest_Blog['hinhAnh'];?>" alt=""></a></div>
                                <div class="widget-posts__info">
                                    <div class="widget-posts__name"><a href="view-news/<?=seo1($lastest_Blog['tieuDe'])?>/<?=$lastest_Blog['idTin'] ?>"><?=$lastest_Blog['tieuDe'];?></a></div>
                                    <div class="widget-posts__date"><?=date("d/m/y h:i:s", strtotime($lastest_Blog['ngayDang']))?></div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <?php $mostViewedBlogs = getMostViewedBlogs() ?>
                <div class="block-sidebar__item">
                    <div class="widget-posts widget">
                        <h4 class="widget__title">Bài viết được xem nhiều</h4>
                        <div class="widget-posts__list">
                            <?php foreach($mostViewedBlogs as $most_Viewed_Blogs){ ?>
                            <div class="widget-posts__item">
                                <div class="widget-posts__image"><a href="view-news/<?=seo1($most_Viewed_Blogs['tieuDe'])?>/<?=$most_Viewed_Blogs['idTin'] ?>"><img src="<?=$most_Viewed_Blogs['hinhAnh'];?>" alt=""></a></div>
                                <div class="widget-posts__info">
                                    <div class="widget-posts__name"><a href="view-news/<?=seo1($most_Viewed_Blogs['tieuDe'])?>/<?=$most_Viewed_Blogs['idTin'] ?>"><?=$most_Viewed_Blogs['tieuDe'];?></a></div>
                                    <div class="widget-posts__date"><?=date("d/m/y h:i:s", strtotime($most_Viewed_Blogs['ngayDang']))?></div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>