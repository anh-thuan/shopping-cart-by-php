<?php
get_header();
?>

<?php
// $show_array=$_SESSION('cart');
$list_buy=get_list_buy_cart();
// show_array($list_buy);
?>
<div id="main-content-wp" class="cart-page">
    <div class="section" id="breadcrumb-wp">
        <div class="wp-inner">
            <div class="section-detail">
                <h3 class="title">Giỏ hàng</h3>
            </div>
        </div>
    </div>
    <div id="wrapper" class="wp-inner clearfix">
        <?php
        if(!empty($list_buy)){
        ?>
            <div class="section" id="info-cart-wp">
                <div class="section-detail table-responsive">
                    <!--Form chứa thông tin-->
                    <form action="?mod=cart&act=update" method="POST">
                        <table class="table">
                            <thead>
                                <tr>
                                    <td>Mã sản phẩm</td>
                                    <td>Ảnh sản phẩm</td>
                                    <td>Tên sản phẩm</td>
                                    <td>Giá sản phẩm</td>
                                    <td>Số lượng</td>
                                    <td colspan="2">Thành tiền</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach($list_buy as $product){
                                    ?>
                                <tr>
                                    <td><?php echo $product['code']?></td>
                                    <td>
                                        <a href="<?php echo $product['url']?>" title="" class="thumb">
                                            <img src="<?php echo $product['product_thumb']?>" alt="">
                                        </a>
                                    </td>
                                    <td>
                                        <a href="<?php echo $product['url']?>" title="<?php echo $product['product_title']?>" class="name-product"><?php echo $product['product_title']?></a>
                                    </td>
                                    <td><?php echo currency_format($product['price'])?></td><!--Tạo giá trị tiền tệ-->
                                    <td>
                                        <input type="number" min="1" max="10" name="qty[<?php echo $product['id']?>]" value="<?php echo $product['qty']?>" class="num-order">
                                    </td>
                                    <td><?php echo currency_format($product['sub_total'])?></td>
                                    <td>
                                        <a href="<?php echo $product['url_delete_cart']?>" title="Xóa sản phẩm" class="del-product"><i class="fa fa-trash-o"></i></a>
                                    </td>
                                </tr>
                                <?php
                                }
                                ?>
                            
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="7">
                                        <div class="clearfix">
                                            <!--Bài 18.12 Show tổng giá khi mua hàng-->
                                            <p id="total-price" class="fl-right">Tổng giá: <span><?php echo currency_format(get_total_cart())?></span></p>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="7">
                                        <div class="clearfix">
                                            <div class="fl-right">
                                                <input type="submit" id="update_cart" name="btn_update_cart" value="Cập nhật giỏ hàng">
                                                <!-- <a href="" title="" id="update-cart">Cập nhật giỏ hàng</a> -->
                                                <a href="?mod=cart&act=checkout" title="" id="checkout-cart">Thanh toán</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </form> 
                </div>
            </div>
            <div class="section" id="action-cart-wp">
                <div class="section-detail">
                    <p class="title">Click vào <span>“Cập nhật giỏ hàng”</span> để cập nhật số lượng. Nhập vào số lượng <span>0</span> để xóa sản phẩm khỏi giỏ hàng. Nhấn vào thanh toán để hoàn tất mua hàng.</p>
                    <a href="?" title="" id="buy-more">Mua tiếp</a><br/>
                    <a href="?mod=cart&act=delete_all" title="" id="delete-cart">Xóa giỏ hàng</a>
                </div>
            </div>
    
        <?php
        }else{
            ?>
        <div class="section" id="cart_empty"><!--Nếu cart ko có sản phẩm thì sẽ chứa thông tin empty-->
        <p>Ko có sản phẩm nào trong giỏ hàng, Click <a href="?">Vào đây </a>Để quay trở lại trang chủ</p>
        </div>
        
        <?php
        }
        ?>
        
    </div>
</div>

<?php 
get_footer();
?>