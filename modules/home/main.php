<!--home-->
<?php
get_header('');
?>
<?php

?>

<?php
    $list_mobile=get_list_product_by_cat_id(1);
    $list_laptop=get_list_product_by_cat_id(2);

    $info_cat_mobile=get_info_cat(1);
    $info_cat_laptop=get_info_cat(2);
?>

<div id="main-content-wp" class="home-page">
    <div class="wp-inner clearfix">
        <?php get_sidebar();?>
        <div id="content" class="fl-right">
            <!--Điện thoại-->
            <div class="section list-cat">
                <div class="section-head">
                    <a class="section-title" href="<?php echo $info_cat_mobile['url']?>"><?php echo $info_cat_mobile['cat_title']?></a>
                </div>
                <div class="section-detail">
                <?php
                    if (!empty($list_mobile)) {
                    ?>
                        <ul class="list-item clearfix">
                            <?php foreach ($list_mobile as $product_id => $product) { ?>
                                <li>
                                    <a href="<?php echo $product['url'] ?>" title="" class="thumb">
                                        <img src="<?php echo $product['product_thumb'] ?>" alt="">
                                    </a>
                                    <a href="<?php echo $product['url'] ?>" title="" class="title"><?php echo $product['product_title'] ?></a>
                                    <p class="price"><?php echo currency_format($product['product_price']) ?></p>
                                </li>
                            <?php } ?>
                        </ul>
                    <?php
                    }
                    ?>
                </div>
            </div>
            <!--Laptop-->
            <div class="section list-cat">
                <div class="section-head">
                    <a class="section-title" href="<?php echo $info_cat_laptop['url']?>"><?php echo $info_cat_laptop['cat_title']?></a>
                </div>
                <div class="section-detail">
                <?php
                    if (!empty($list_laptop)) {
                    ?>
                        <ul class="list-item clearfix">
                            <?php foreach ($list_laptop as $product_id => $product) { ?>
                                <li>
                                    <a href="<?php echo $product['url'] ?>" title="" class="thumb">
                                        <img src="<?php echo $product['product_thumb'] ?>" alt="">
                                    </a>
                                    <a href="<?php echo $product['url'] ?>" title="" class="title"><?php echo $product['product_title'] ?></a>
                                    <p class="price"><?php echo currency_format($product['product_price']) ?></p>
                                </li>
                            <?php } ?>
                        </ul>
                    <?php
                    }
                    ?>
                </div>
                </div>
            </div>
            <!-- <div class="section list-cat">
                <div class="section-head">
                    <h3 class="section-title">Máy tính bảng</h3>
                </div>
                <div class="section-detail">
                    <ul class="list-item clearfix">
                        <li>
                            <a href="?page=detail_product" title="" class="thumb">
                                <img src="public/images/img-product.png" alt="">
                            </a>
                            <a href="?page=detail_product" title="" class="title">Lenovo IdeaPad 100S</a>
                            <p class="price">5.000.000đ</p>
                        </li>
                        <li>
                            <a href="?page=detail_product" title="" class="thumb">
                                <img src="public/images/img-product.png" alt="">
                            </a>
                            <a href="?page=detail_product" title="" class="title">Lenovo IdeaPad 100S</a>
                            <p class="price">5.000.000đ</p>
                        </li>
                        <li>
                            <a href="?page=detail_product" title="" class="thumb">
                                <img src="public/images/img-product.png" alt="">
                            </a>
                            <a href="?page=detail_product" title="" class="title">Lenovo IdeaPad 100S</a>
                            <p class="price">5.000.000đ</p>
                        </li>
                        <li>
                            <a href="?page=detail_product" title="" class="thumb">
                                <img src="public/images/img-product.png" alt="">
                            </a>
                            <a href="?page=detail_product" title="" class="title">Lenovo IdeaPad 100S</a>
                            <p class="price">5.000.000đ</p>
                        </li>
                        <li>
                            <a href="?page=detail_product" title="" class="thumb">
                                <img src="public/images/img-product.png" alt="">
                            </a>
                            <a href="?page=detail_product" title="" class="title">Lenovo IdeaPad 100S</a>
                            <p class="price">5.000.000đ</p>
                        </li>
                        <li>
                            <a href="?page=detail_product" title="" class="thumb">
                                <img src="public/images/img-product.png" alt="">
                            </a>
                            <a href="?page=detail_product" title="" class="title">Lenovo IdeaPad 100S</a>
                            <p class="price">5.000.000đ</p>
                        </li>
                        <li>
                            <a href="?page=detail_product" title="" class="thumb">
                                <img src="public/images/img-product.png" alt="">
                            </a>
                            <a href="" title="" class="title">Lenovo IdeaPad 100S</a>
                            <p class="price">5.000.000đ</p>
                        </li>
                        <li>
                            <a href="?page=detail_product" title="" class="thumb">
                                <img src="public/images/img-product.png" alt="">
                            </a>
                            <a href="" title="" class="title">Lenovo IdeaPad 100S</a>
                            <p class="price">5.000.000đ</p>
                        </li>
                    </ul>
                </div>
            </div> -->
        </div>
    </div>
</div>

<?php
get_footer();
?>