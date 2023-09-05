<!--product-detail-->
<?php
get_header();
?>

<?php
$id=(int)($_GET['id']); 
#Lấy dữ liệu bài viết theo id
$product = get_product_by_id($id);
//show_array($product);

?>
<div id="main-content-wp" class="detail-product-page clearfix">
    <div class="wp-inner clearfix">
        <!-- <div id="sidebar" class="fl-left">
            <div id="main-menu-wp">
                <ul class="list-item">
                    <li class="active">
                        <a href="?page=home" title="Trang chủ">Trang chủ</a>
                    </li>
                    <li>
                        <a href="?page=detail_news" title="Giới thiệu">Giới thiệu</a>
                    </li>
                    <li>
                        <a href="?page=category_product" title="">Laptop</a>
                    </li>
                    <li>
                        <a href="?page=category_product" title="">Điện thoại</a>
                    </li>
                    <li>
                        <a href="?page=category_product" title="">Máy tính bảng</a>
                    </li>
                    <li>
                        <a href="?page=detail_news" title="Liên hệ">Liên hệ</a>
                    </li>
                </ul>
            </div>
        </div> -->
        <?php get_sidebar();?>
        <div id="content" class="fl-right">
            <div class="section" id="info-product-wp">
                <div class="section-detail clearfix">
                    <div class="thumb fl-left">
                        <img src="<?php echo $product['product_thumb']?>" alt="">
                    </div>
                    <div class="detail fl-right">
                        <h3 class="title"><?php echo $product['product_title']?></h3>
                        <p class="price"><?php echo currency_format($product['product_price'])?></p>
                        <p class="product-code">Mã sản phẩm: <span><?php echo $product['product_code']?></span></p>
                        <div class="desc-short">
                            <h5>Mô tả sản phẩm:</h5>
                            <p><?php echo $product['product_desc'] ?></p>
                        </div>
                        <div class="num-order-wp">
                            <!-- <span>Số lượng:</span>
                            <input type="text" id="num-order" name="num-order" value="1"> -->
                            <a href="<?php echo $product['url_add_cart']?>" title="" class="add-to-cart">Thêm giỏ hàng</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="section" id="desc-wp">
                <div class="section-head">
                    <h3 class="section-title">Chi tiết sản phẩm</h3>
                </div>
                <div class="section-detail">
                    <?php echo $product['product_content']?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>