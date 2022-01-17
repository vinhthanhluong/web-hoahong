<?php

/**
 * Template name: Home Page
 * @author : Hy Hý
 */
get_header();
while (have_posts()) :
    the_post();
?>
    <main class="main">
        <?php
        $mona_home_banner_slider_items = get_field('mona_home_banner_slider_items');
        if (is_array($mona_home_banner_slider_items)) {
        ?>
            <div class="banners">
                <div class="container-full">
                    <div class="banners-wrapper swiper-banner">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                <?php foreach ($mona_home_banner_slider_items as $key => $item) { ?>
                                    <div class="swiper-slide">
                                        <div class="banners-wrap" style="background-image: url(<?php echo wp_get_attachment_image_url($item['mona_home_banner_slider_item_nen'], 'full') ?>);">
                                            <div class="banners-inner">
                                                <h3 class="title tt-36 t-uppercase">
                                                    <?php echo $item['mona_home_banner_slider_item_title'] ?>
                                                </h3>
                                                <p class="desc tt-16">
                                                    <?php echo $item['mona_home_banner_slider_item_desc'] ?>
                                                </p>
                                                <?php
                                                $mona_home_banner_slider_item_link = $item['mona_home_banner_slider_item_link'];
                                                if ($mona_home_banner_slider_item_link) {
                                                ?>
                                                    <a href="<?php echo esc_url($mona_home_banner_slider_item_link) ?>" class="btn btn-more-r">
                                                        <?php echo __('Xem chi tiết', 'monamedia') ?>
                                                        <img src="<?php echo get_site_url() ?>/template/img/svg/icon-right-lg.svg" alt="icon-right-lg.svg">
                                                    </a>
                                                <?php } ?>
                                            </div>
                                            <?php
                                            $mona_home_banner_slider_item_gallery = $item['mona_home_banner_slider_item_gallery'];
                                            if (!empty($mona_home_banner_slider_item_gallery)) {
                                            ?>
                                                <div class="banners-slide">
                                                    <div class="swiper-con ">
                                                        <div class="swiper nots-loop">
                                                            <div class="swiper-wrapper">
                                                                <?php foreach ($mona_home_banner_slider_item_gallery as $k => $gallery_id) { ?>
                                                                    <div class="swiper-slide">
                                                                        <div class="img-s">
                                                                            <?php echo wp_get_attachment_image($gallery_id, '110x110') ?>
                                                                        </div>
                                                                    </div>
                                                                <?php } ?>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-prev"></div>
                                                        <div class="swiper-next"></div>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                            <div class="img-b-item">
                                                <?php echo wp_get_attachment_image($item['mona_home_banner_slider_item_image'], '600x600') ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
        <?php
        $mona_home_giamgia_items = get_field('mona_home_giamgia_items');
        if (is_array($mona_home_giamgia_items)) {
        ?>
            <div class="catalog-sp">
                <div class="container-full">
                    <div class="catalog-wrapper">
                        <div class="swiper-custom">
                            <div class="swiper">
                                <div class="swiper-wrapper">
                                    <?php foreach ($mona_home_giamgia_items as $key => $item) { ?>
                                        <div class="swiper-slide ">
                                            <div class="cata-inner wow animate__fadeIn" style="background-image: url(<?php echo wp_get_attachment_image_url($item['mona_home_giamgia_item_nen'], 'full') ?>);">
                                                <div class="content">
                                                    <p class="label f-bold t-uppercase main-cl-2">
                                                        <?php echo $item['mona_home_giamgia_item_textsale'] ?>
                                                    </p>
                                                    <h4 class="title tt-18 t-uppercase w-cl">
                                                        <?php echo $item['mona_home_giamgia_item_sptitle'] ?>
                                                    </h4>
                                                    <?php
                                                    $mona_home_giamgia_item_link = $item['mona_home_giamgia_item_link'];
                                                    if ($mona_home_giamgia_item_link) {
                                                    ?>
                                                        <a href="<?php echo esc_url($mona_home_giamgia_item_link) ?>" class="btn btn-more-r">
                                                            <?php echo __('Xem chi tiết', 'monamedia') ?>
                                                            <img src="<?php echo get_site_url() ?>/template/img/svg/icon-right-lg.svg" alt="icon-right-lg.svg">
                                                        </a>
                                                    <?php } ?>
                                                </div>
                                                <div class="cata-ig">
                                                    <?php echo wp_get_attachment_image($item['mona_home_giamgia_item_image'], '255x160') ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>

                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        <?php } ?>
        <?php
        $mona_home_hotro_items = get_field('mona_home_hotro_items');
        if (is_array($mona_home_hotro_items)) {
        ?>
            <div class="cate-home sec-40">
                <div class="container">
                    <div class="cate-wrapper">
                        <div class="columns">
                            <?php foreach ($mona_home_hotro_items as $key => $item) { ?>
                                <div class="column">
                                    <div class="cate-box" data-aos="zoom-in">
                                        <div class="cate-img">
                                            <?php echo wp_get_attachment_image($item['mona_home_hotro_item_icon'], '50x50') ?>
                                        </div>
                                        <p class="cate-text tt-16 f-bold">
                                            <?php echo $item['mona_home_hotro_item_desc'] ?>
                                        </p>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
        <?php
        $mona_home_thuonghieu_items = get_field('mona_home_thuonghieu_items');
        if (is_array($mona_home_thuonghieu_items)) {
        ?>
            <section class="brand-famous">
                <div class="container">
                    <div class="brand-wrapper">
                        <h3 class="title tt-32 f-bold main-cl-2 wow animate__bounceInLeft">
                            <?php echo __('Thương hiệu nổi bật', 'monamedia') ?>
                        </h3>
                        <div class="brand-slide swiper-row" id="lightgallery" data-aos="fade-up">
                            <div class="swiper">
                                <div class="swiper-wrapper">
                                    <?php foreach ($mona_home_thuonghieu_items as $key => $item) { ?>
                                        <div class="swiper-slide">
                                            <a href="<?php echo wp_get_attachment_image_url($item['mona_home_thuonghieu_item_image'], 'full') ?>" class="brand-box zoom-lightgallery">
                                                <?php echo wp_get_attachment_image($item['mona_home_thuonghieu_item_image'], '250x150') ?>
                                            </a>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                </div>
            </section>
        <?php } ?>
        <?php
        $mona_danhsach_chuyenvien = get_field('mona_danhsach_chuyenvien');
        $mona_danhsach_chuyenvien_items = $mona_danhsach_chuyenvien['mona_danhsach_chuyenvien_items'];
        if (is_array($mona_danhsach_chuyenvien_items)) {
        ?>
            <section class="section-support sec-40 --pb-0">
                <div class="container">
                    <div class="sp-wrapper">
                        <div class="sp-head">
                            <div class="sp-tx">
                                <h3 class="title tt-18 t-capitalize wow animate__rubberBand">
                                    <?php echo __('Hỗ trợ mua hàng', 'monamedia') ?>
                                </h3>
                            </div>
                        </div>
                        <div class="sp-main swiper-custom" data-aos="fade-up">
                            <div class="swiper">
                                <div class="swiper-wrapper">
                                    <?php foreach ($mona_danhsach_chuyenvien_items as $key => $item) { ?>
                                        <div class="swiper-slide">
                                            <div class="sp-inner">
                                                <a href="<?php echo mona_replace_tel($item['mona_danhsach_chuyenvien_item_sdt']) ?>" class="sp-img img-w-100">
                                                    <?php echo wp_get_attachment_image($item['mona_danhsach_chuyenvien_item_image'], '250x150') ?>
                                                </a>
                                                <div class="sp-content">
                                                    <a href="<?php echo mona_replace_tel($item['mona_danhsach_chuyenvien_item_sdt']) ?>" class="sp-name">
                                                        <?php echo $item['mona_danhsach_chuyenvien_item_name'] ?>
                                                    </a>
                                                    <a target="_blank" href="<?php echo esc_url($item['mona_danhsach_chuyenvien_item_hotro']) ?>" class="sp-chat">
                                                        <?php echo __('Chat online', 'monamedia') ?>
                                                    </a>
                                                    </br>
                                                    <a href="mailto:<?php echo $item['mona_danhsach_chuyenvien_item_email'] ?>" class="sp-email">
                                                        <?php echo $item['mona_danhsach_chuyenvien_item_email'] ?>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php } ?>
        <?php
        $mona_home_sanpham_items = get_field('mona_home_sanpham_items');
        if (is_array($mona_home_sanpham_items)) {
            foreach ($mona_home_sanpham_items as $key => $item) {
                $cate_parent = $item['mona_home_sanpham_item_cate_parent'];
                $cate_child_object = $item['mona_home_sanpham_item_cate_child_object'];
                $item_style = $item['mona_home_sanpham_item_style'];
                $style = '--pb-0';
                if ($item_style == 'line') {
                    $style = '';
                }
        ?>
                <section class="section-product sec-40 <?php echo @$style ?>">
                    <div class="container">
                        <div class="sec-wrapper swiper-hpro">
                            <div class="sec-head">
                                <div class="sec-tx">
                                    <h3 class="title tt-18 t-capitalize wow animate__rubberBand">
                                        <?php echo @$cate_parent->name ?>
                                    </h3>
                                </div>
                                <div class="sec-pagination">
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-button-next"></div>
                                </div>
                            </div>
                            <div class="sec-main" data-aos="fade-up">
                                <div class="cols">
                                    <div class="col tx">
                                        <div class="sec-list">
                                            <?php
                                            if (!empty($cate_child_object)) {
                                                foreach ($cate_child_object as $key => $childcate) {
                                            ?>
                                                    <div class="sec-item">
                                                        <a href="<?php echo get_term_link($childcate->term_id) ?>" class="sec-link">
                                                            <?php echo $childcate->name ?>
                                                        </a>
                                                    </div>
                                            <?php }
                                            } ?>
                                        </div>
                                    </div>
                                    <div class="col txt">
                                        <div class="sec-product">
                                            <div class="swiper">
                                                <div class="swiper-wrapper">
                                                    <?php
                                                    $argsProduct = [
                                                        'post_type' => 'mona_product',
                                                        'post_status' => 'publish',
                                                        'posts_per_page' => 24,
                                                        'tax_query' => [
                                                            'relation' => 'AND',
                                                            [
                                                                'taxonomy' => 'category_product',
                                                                'field' => 'term_id',
                                                                'terms' => (array)@$cate_parent->term_id,
                                                                'operator' => 'IN',
                                                                'include_children' => true,
                                                            ]
                                                        ]
                                                    ];
                                                    $queryProducts = new WP_Query($argsProduct);
                                                    if ($queryProducts->have_posts()) {
                                                        while ($queryProducts->have_posts()) :
                                                            $queryProducts->the_post();
                                                    ?>
                                                            <div class="swiper-slide">
                                                                <?php
                                                                /**
                                                                 * MONA GET LAYOUT - PRODUCT
                                                                 * SẢN PHẨM
                                                                 */
                                                                get_template_part('patch/loop/_sanpham', 'item');
                                                                ?>
                                                            </div>
                                                        <?php
                                                        endwhile;
                                                        wp_reset_query();
                                                    } else { ?>
                                                        <div class="mona-mess-empty">
                                                            <p><?php echo __('Nội dung đang được cập nhật', 'monamedia') ?></p>
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <?php
                $item_option = $item['mona_home_sanpham_item_option'];
                if ($item_option == 'product_sale') { ?>
                    <div class="catalog-sp catalog-sp-2">
                        <div class="container-full">
                            <div class="catalog-wrapper">
                                <div class="swiper">
                                    <div class="swiper-wrapper">
                                        <?php
                                        $mona_home_chensanpham_items = $item['mona_home_chensanpham_items'];
                                        if (is_array($mona_home_chensanpham_items)) {
                                            foreach ($mona_home_chensanpham_items as $s => $saleitem) {
                                        ?>
                                                <div class="swiper-slide">
                                                    <div class="cata-inner wow animate__fadeIn" style="background-image: url(<?php echo wp_get_attachment_image_url($saleitem['mona_home_chensanpham_item_nen'], 'full') ?>);">
                                                        <div class="content">
                                                            <p class="label f-bold t-uppercase main-cl-2">
                                                                <?php echo $saleitem['mona_home_chensanpham_item_textsale'] ?>
                                                            </p>
                                                            <h4 class="title tt-18 t-capitalize">
                                                                <?php echo $saleitem['mona_home_chensanpham_item_sptitle'] ?>
                                                            </h4>
                                                            <?php
                                                            $mona_home_chensanpham_item_link = $saleitem['mona_home_chensanpham_item_link'];
                                                            if ($mona_home_chensanpham_item_link) {
                                                            ?>
                                                                <a href="<?php echo esc_url($mona_home_chensanpham_item_link) ?>" class="btn btn-more-r">
                                                                    <?php echo __('Xem chi tiết', 'monamedia') ?>
                                                                    <img src="<?php echo get_site_url() ?>/template/img/svg/icon-right-lg.svg" alt="icon-right-lg.svg">
                                                                </a>
                                                            <?php } ?>
                                                        </div>
                                                        <div class="cata-ig">
                                                            <?php echo wp_get_attachment_image($saleitem['mona_home_chensanpham_item_image'], '260x260') ?>
                                                        </div>
                                                    </div>
                                                </div>
                                        <?php }
                                        } ?>
                                    </div>

                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-button-next"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } elseif ($item_option == 'banner_sale') { ?>
                    <div class="order-online">
                        <div class="order-wrapper">
                            <div class="swiper-custom">
                                <div class="swiper notslide">
                                    <div class="swiper-wrapper">
                                        <?php
                                        $mona_home_chenbanner_sales = $item['mona_home_chenbanner_sales'];
                                        if (is_array($mona_home_chenbanner_sales)) {
                                            foreach ($mona_home_chenbanner_sales as $key => $basales) {
                                        ?>
                                                <div class="swiper-slide">
                                                    <div class="swiper-wp">
                                                        <div class="container">
                                                            <div class="order-wrap" data-aos="fade-left">
                                                                <div class="order-inner">
                                                                    <p class="label tt-30 f-bold f-italic">
                                                                        <?php echo $basales['mona_home_chenbanner_sale_title1'] ?>
                                                                    </p>
                                                                    <h3 class="title tt-42 f-italic">
                                                                        <?php echo $basales['mona_home_chenbanner_sale_title2'] ?>
                                                                    </h3>
                                                                    <?php
                                                                    $mona_home_chenbanner_sale_link = $basales['mona_home_chenbanner_sale_link'];
                                                                    if ($mona_home_chenbanner_sale_link) {
                                                                    ?>
                                                                        <a href="<?php echo esc_url($mona_home_chenbanner_sale_link) ?>" class="btn btn-more-m">
                                                                            <?php echo __('Xem chi tiết', 'monamedia') ?>
                                                                            <img src="<?php echo get_site_url() ?>/template/img/svg/icon-right-lg.svg" alt="icon-right-lg.svg">
                                                                        </a>
                                                                    <?php } ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="img-order img-w-100">
                                                            <?php echo wp_get_attachment_image($basales['mona_home_chenbanner_sale_sale_image'], '1920x790') ?>
                                                        </div>
                                                        <div class="bg-order">
                                                            <?php echo wp_get_attachment_image($basales['mona_home_chenbanner_sale_image_nen'], '1920x790') ?>
                                                        </div>
                                                    </div>
                                                </div>
                                        <?php }
                                        } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
        <?php }
        } ?>
        <?php
        $mona_home_vechungtoi = get_field('mona_home_vechungtoi');
        if ($mona_home_vechungtoi['mona_home_vechungtoi_title'] || $mona_home_vechungtoi['mona_home_vechungtoi_desc']) {
        ?>
            <section class="about-home sec-60">
                <div class="container">
                    <div class="about-wrapper">
                        <div class="columns">
                            <div class="column txt">
                                <div class="about-inner">
                                    <h3 class="title tt-32 t-capitalize main-cl-2">
                                        <p class="wow animate__bounceInLeft"><?php echo $mona_home_vechungtoi['mona_home_vechungtoi_title'] ?></p>
                                    </h3>
                                    <p class="label tt-24 f-bold t-capitalize" data-aos="fade-up" data-aos-delay="300">
                                        <?php echo $mona_home_vechungtoi['mona_home_vechungtoi_title2'] ?>
                                    </p>
                                    <p class="desc tt-16" data-aos="fade-up" data-aos-delay="400">
                                        <?php echo $mona_home_vechungtoi['mona_home_vechungtoi_desc'] ?>
                                    </p>
                                    <?php
                                    $mona_home_vechungtoi_link = $mona_home_vechungtoi['mona_home_vechungtoi_link'];
                                    if ($mona_home_vechungtoi_link) {
                                    ?>
                                        <a href="<?php echo esc_url($mona_home_vechungtoi_link) ?>" class="btn btn-more-r" data-aos="fade-up" data-aos-delay="500">
                                            <?php echo __('Xem chi tiết', 'monamedia') ?>
                                            <img src="<?php echo get_site_url() ?>/template/img/svg/icon-right-lg.svg" alt="icon-right-lg.svg">
                                        </a>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="column ig" data-aos="fade-left">
                                <div class="about-ig img-w-100">
                                    <?php echo wp_get_attachment_image($mona_home_vechungtoi['mona_home_vechungtoi_image'], '600x600') ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php } ?>
        <?php
        $mona_home_sanphamdichvu_items = get_field('mona_home_sanphamdichvu_items');
        if (is_array($mona_home_sanphamdichvu_items)) {
        ?>
            <section class="service-home">
                <div class="service-wrapper">
                    <div class="swiper-custom">
                        <div class="swiper notslide">
                            <div class="swiper-wrapper">
                                <?php foreach ($mona_home_sanphamdichvu_items as $key => $item) { ?>
                                    <div class="swiper-slide">
                                        <div class="service-wrap" style="background-image: url(<?php echo get_site_url() ?>/template/img/bg-service.png);">
                                            <div class="container">
                                                <div class="swiper-inner">
                                                    <div class="columns">
                                                        <div class="column txt">
                                                            <div class="head">
                                                                <h3 class="title tt-48 t-uppercase">
                                                                    <?php echo $item['mona_home_sanphamdichvu_item_title1'] ?>
                                                                    <span class="main-cl">
                                                                        <?php echo $item['mona_home_sanphamdichvu_item_title2'] ?>
                                                                    </span>
                                                                    <?php echo $item['mona_home_sanphamdichvu_item_title3'] ?>
                                                                </h3>
                                                                <?php
                                                                $mona_home_sanphamdichvu_item_link = get_field('mona_home_sanphamdichvu_item_link');
                                                                if ($mona_home_sanphamdichvu_item_link) {
                                                                ?>
                                                                    <a href="<?php echo esc_url($mona_home_sanphamdichvu_item_link) ?>" class="btn btn-more-r" data-aos="fade-up">
                                                                        <?php echo __('Xem chi tiết', 'monamedia') ?>
                                                                        <img src="<?php echo get_site_url() ?>/template/img/svg/icon-right-lg.svg" alt="icon-right-lg.svg">
                                                                    </a>
                                                                <?php } ?>
                                                            </div>
                                                        </div>
                                                        <?php
                                                        $mona_home_sanphamdichvu_item_gallery = $item['mona_home_sanphamdichvu_item_gallery'];
                                                        if (!empty($mona_home_sanphamdichvu_item_gallery)) {
                                                        ?>
                                                            <div class="column ig">
                                                                <div class="servic-ig">
                                                                    <?php foreach ($mona_home_sanphamdichvu_item_gallery as $key => $sgallery_id) { ?>
                                                                        <div class="img" data-aos="fade-left" data-aos-delay="<?php echo ($key * 100) ?>">
                                                                            <?php echo wp_get_attachment_image($sgallery_id, '280x210') ?>
                                                                        </div>
                                                                    <?php } ?>
                                                                </div>
                                                            </div>
                                                        <?php } ?>
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
            </section>
        <?php } ?>
        <?php
        /**
         * MONA GET LAYOUT - FORM
         * TIẾP NHẬN YÊU CẦU
         */
        get_template_part('patch/loop/_tiepnhan', 'yeucau');
        ?>
        <?php
        $argsPost = [
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => 4,
            'orderby' => 'meta_value_num',
            'order' => 'DESC',
            'meta_query' => [
                'relation' => 'AND',
                [
                    'key' => 'mona_post_views_count',
                    'value' => 0,
                    'compare' => '>',
                ]
            ]
        ];
        $queryPosts = new WP_Query($argsPost);
        if ($queryPosts->have_posts()) {
        ?>
            <section class="news-home sec-40">
                <div class="container">
                    <div class="news-wrapper">
                        <div class="columns">
                            <?php
                            $count = 1;
                            while ($queryPosts->have_posts() && $count <= 1) :
                                $count++;
                                $queryPosts->the_post();
                            ?>
                                <div class="column ig">
                                    <div class="news-ig" data-aos="zoom-in">
                                        <div class="img img-w-100">
                                            <?php the_post_thumbnail('570x450') ?>
                                        </div>
                                        <div class="content">
                                            <a href="<?php the_permalink() ?>" class="news-link t-uppercase tt-18 f-bold">
                                                <?php the_title() ?>
                                            </a>
                                            <p class="date tt-16">
                                                <img src="<?php echo get_site_url() ?>/template/img/svg/icon-calendar.svg" alt="icon-calendar.svg">
                                                <?php echo get_the_date() ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            endwhile;
                            wp_reset_query();
                            ?>
                            <div class="column">
                                <div class="news-inner">
                                    <h3 class="title tt-32 main-cl-2 wow animate__bounceInRight">
                                        <?php echo __('Tin tức nổi bật', 'monmaedia') ?>
                                    </h3>
                                    <div class="news-list">
                                        <?php
                                        if ($queryPosts->post_count > 1) {
                                            while ($queryPosts->have_posts()) :
                                                $queryPosts->the_post();
                                        ?>
                                                <div class="news-item" data-aos="fade-up">
                                                    <div class="item-date tt-16 f-bold">
                                                        <p>
                                                            <?php echo get_the_date('d') ?>
                                                        </p>
                                                        <p>
                                                            <?php echo 'T.' . ' ' . get_the_date('m') ?>
                                                        </p>
                                                    </div>
                                                    <a href="<?php the_permalink() ?>" class="item-tt tt-18 f-bold t-uppercase">
                                                        <?php the_title() ?>
                                                    </a>
                                                </div>
                                        <?php
                                            endwhile;
                                            wp_reset_query();
                                        } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
        <?php } ?>
    </main>
<?php
endwhile;
get_footer();
?>