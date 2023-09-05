<?php
$cat_id=(int)($_GET['cat_id']);
// echo $cat_id;
#Lấy thông tin của danh mục
$info_cat=get_info_cat($cat_id);
// show_array($info_cat);
#Lấy danh sách bài viết
$list_item=get_list_product_by_cat_id($cat_id);
// echo currency_format(10000000000);
// show_array($list_item);
?>

<!--product-list-->
<?php
get_header('');
?>



<div id="main-content-wp" class="category-product-page">
    <div class="wp-inner clearfix">

        <?php get_sidebar();?>
        <div id="content" class="fl-right">
            <div class="section list-cat">
                <div class="section-head">
                    <h3 class="section-title"><?php echo $info_cat['cat_title']?></h3>
                    <p class="section-desc">Có <?php echo count($list_item)?> Sản phẩm trong thư mục này</p>
                </div>
                <div class="section-detail">
                    <?php
                    if (!empty($list_item)) {
                    ?>
                        <ul class="list-item clearfix">
                            <?php foreach ($list_item as $product_id => $product) { ?>
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
            <!-- <div class="section" id="pagenavi-wp">
                <div class="section-detail">
                    <ul id="list-pagenavi">
                        <li class="active">
                            <a href="" title="">1</a>
                        </li>
                        <li>
                            <a href="" title="">2</a>
                        </li>
                        <li>
                            <a href="" title="">3</a>
                        </li>
                    </ul>
                    <a href="" title="" class="next-page"><i class="fa fa-angle-right"></i></a>
                </div>
            </div> -->
        </div>
    </div>
</div>

<?php
get_footer();
?>