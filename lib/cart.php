<?php
function add_cart($id){
global $list_product; 
$item = get_product_by_id($id);

// show_array($item);

#Thêm thông tin vào giỏ hàng
$qty=1; // Số lượng
if(isset($_SESSION['cart'])&&array_key_exists($id,$_SESSION['cart']['buy'])){
    $qty=$_SESSION['cart']['buy'][$id]['qty']+1;
}
$_SESSION['cart']['buy'][$id] = array(
    'id' => $item['id'],
    'url'=> $item['url'],
    'product_title' => $item['product_title'], 
    'price' => $item['product_price'],
    'product_thumb' => $item['product_thumb'], // Đường dẫn ảnh
    'code'=> $item['product_code'],
    'qty' => $qty,
    'sub_total' => $item['product_price'] * $qty,
);
//Cập nhật hóa đơn
update_info_cart();
}

function update_info_cart(){
    if(isset($_SESSION['cart'])){
        $num_order=0;
        $total=0;
        foreach($_SESSION['cart']['buy'] as $product){ //Tính ra giá tổng sản phẩm khách hàng có được
            $num_order+=$product['qty'];
            $total+=$product['sub_total'];

        }
        $_SESSION['cart']['info']=array(
            'num_order'=>$num_order,
            'total'=>$total
        );  
    }
 }

 //Xóa sản phẩm cần thiết (Sử dụng tham chiếu)
 function get_list_buy_cart(){
    if(isset($_SESSION['cart'])){
        foreach($_SESSION['cart']['buy'] as &$product){
            $product['url_delete_cart']="?mod=cart&act=delete&id={$product['id']}";
            // $_SESSION['cart']['buy'][$product['id']]=$product;
        }
        return $_SESSION['cart']['buy'];
    }
    return false;
 }

 function get_num_order_cart(){
    if(isset($_SESSION['cart'])){
        return $_SESSION['cart']['info']['num_order'];
    }
    return false;
 }

 //Nhận được tổng giá toàn bộ sản phẩm
 function get_total_cart(){
    if(isset($_SESSION['cart'])){
        return $_SESSION['cart']['info']['total'];
    }
    return false;
 }

 //Thông tin xóa sản phẩm
function delete_cart($id){
    if(isset($_SESSION['cart'])){
    #Xóa sản phẩm có $id trong giỏ hàng
    if(!empty($id)){
        unset($_SESSION['cart']['buy'][$id]);
        #Cập nhật lại giỏ hàng
        update_info_cart();
    }else{#Nếu ko có tham số id
        unset($_SESSION['cart']); 

    }
    }
}

function update_cart($qty){
    foreach($qty as $id=>$new_qty){
        $_SESSION['cart']['buy'][$id]['qty']=$new_qty;
        $_SESSION['cart']['buy'][$id]['sub_toal']=$new_qty*$_SESSION['cart']['buy'][$id]['price'];
    }
    update_info_cart();
}

?>