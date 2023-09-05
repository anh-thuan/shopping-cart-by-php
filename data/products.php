<?php
#Danh mục
/*
 * id=>id
 * Tên danh mục => cat_title
 * 
 * 
 */

$list_product_cat = array(
    1=>array(
        'id'=>1,
        'cat_title'=>'Điện thoại',
    ),
    2=>array(
        'id'=>2,
        'cat_title'=>'Máy tính',
    ),
    3=>array(
        'id'=>3,
        'cat_title'=>'Máy tính bảng',
    ),
);

#Dữ liệu sản phẩm
/*
*id=>id
*Tên sản phẩm => product_title
*Giá => product_price
*Mã sp => product_code
*Mô tả => product_desc
*Ảnh => product_thumb => url
*Nội dung => product_content
*Id danh mục => product_cat_id
*/
$list_product = array(
    1=> array(
        'id'=>1,
        'product_title'=>'Điện thoại iPhone 14 Pro Max 128GB ',
        'product_price'=>26490000,
        'product_code'=>'SP001',
        'product_desc'=>'iPhone 14 Pro Max một siêu phẩm trong giới smartphone được nhà Táo tung ra thị trường vào tháng 09/2022. Máy trang bị con chip Apple A16 Bionic vô cùng mạnh mẽ, đi kèm theo đó là thiết kế hình màn hình mới, hứa hẹn mang lại những trải nghiệm đầy mới mẻ cho người dùng iPhone.',
        'product_thumb'=>'https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_75/https://cdn.tgdd.vn/Products/Images/42/251192/iphone-14-pro-max-tim-thumb-200x200.jpg',
        'product_content'=>"<p>iPhone năm nay sẽ được thừa hưởng nét đặc trưng từ người anh iPhone 13 Pro Max, vẫn sẽ là khung thép không gỉ và mặt lưng kính cường lực kết hợp với tạo hình vuông vức hiện đại thông qua cách tạo hình phẳng ở các cạnh và phần mặt lưng.</p>
                            <p><img src='https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_75/https://cdn.tgdd.vn/Products/Images/42/251192/iphone-14-pro-max-tim-thumb-200x200.jpg'></p>",
        'cat_id'=>1
    ),

    2=> array(
        'id'=>2,
        'product_title'=>'Điện thoại OPPO A58 ',
        'product_price'=>4690000,
        'product_code'=>'SP002',
        'product_desc'=>'OPPO là nhà sản xuất điện thoại di động hàng đầu của Trung Quốc, tiếp tục thể hiện sự đổi mới và sáng tạo với dòng sản phẩm mới mang tên OPPO A58. Thiết kế của chiếc điện thoại này mang đậm tính hiện đại, đẹp mắt, cùng với nhiều tính năng hấp dẫn, hứa hẹn sẽ làm thỏa mãn nhu cầu của người dùng.',
        'product_thumb'=>'https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_75/https://cdn.tgdd.vn/Products/Images/42/275435/oppo-a78-4g-green-thumb-200x200.jpg',
        'product_content'=>"<p>Một trong những điểm nổi bật đầu tiên của OPPO A58 là thiết kế vuông vức, mang đến sự gọn gàng, cứng cáp nhưng không kém phần sang trọng. Mặt lưng và màn hình của điện thoại được thiết kế phẳng, tạo nên một tổng thể hài hòa và bắt mắt.</p>",
        'cat_id'=>1
    ),

    3=> array(
        'id'=>3,
        'product_title'=>'Điện thoại Xiaomi Redmi 12 4GB',
        'product_price'=>3990000,
        'product_code'=>'SP003',
        'product_desc'=>'Xiaomi Redmi 12 mẫu điện thoại mới nhất được nhà Xiaomi tung ra vào tháng 06/2023 khiến cho cộng đồng đam mê công nghệ vô cùng thích thú. Máy khoác lên mình một vẻ ngoài cá tính, màn hình lớn đem đến trải nghiệm đã mắt cùng một hiệu năng ổn định với mọi tác vụ.',
        'product_thumb'=>'https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_75/https://cdn.tgdd.vn/Products/Images/42/307556/xiaomi-redmi-12-bac-thumb-200x200.jpg',
        'product_content'=>'Thiết kế của Xiaomi Redmi 12 4GB được lấy cảm hứng từ sự tối giản khi mặt lưng được làm từ kính bóng bẩy đi cùng với thân máy khá mỏng nhẹ mang đến vẻ ngoài thời trang, trẻ trung cùng khả năng cầm nắm tốt hơn khi sử dụng trong thời gian dài.',
        'cat_id'=>1
    ),

    4=> array(
        'id'=>4,
        'product_title'=>'Máy tính bảng iPad 9 WiFi 64GB',
        'product_price'=>7490000,
        'product_code'=>'SP004',
        'product_desc'=>'Sau thành công của iPad 8, Apple cho đã cho ra mắt máy tính bảng iPad 9 WiFi 64GB - phiên bản tiếp theo của dòng iPad 10.2 inch, về cơ bản nó kế thừa những điểm mạnh từ các phiên bản trước đó và được cải tiến thêm hiệu suất, trải nghiệm người dùng nhằm giúp nhu cầu sử dụng giải trí và làm việc tiện lợi, linh hoạt hơn.',
        'product_thumb'=>'https://cdn.tgdd.vn/Products/Images/522/247517/Slider/iPad-gen-9-slide-tong-quan-1020x570.jpg',
        'product_content'=>'iPad 9 sở hữu hình dạng chữ nhật kèm viền trên dưới quen thuộc, có 2 màu sắc chính để bạn lựa chọn là xám thanh lịch và màu bạc thời thượng cho bạn tùy chọn theo sở thích của mình.',
        'cat_id'=>3
    ),

    5=> array(
        'id'=>5,
        'product_title'=>'Laptop HP 240 G8 i3 1115G4/8GB/256GB/Win11 (6L1A1PA) ',
        'product_price'=>9590000,
        'product_code'=>'SP005',
        'product_desc'=>'Vẻ ngoài thanh lịch, cấu hình ổn định cùng mức giá lý tưởng là những ưu điểm mà sinh viên hay dân văn phòng nên lựa chọn chiếc laptop HP 240 G8 i3 (6L1A1PA) làm trợ thủ đắc lực hàng đầu cho các công việc thiết yếu hằng ngày. ',
        'product_thumb'=>'https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_75/https://cdn.tgdd.vn/Products/Images/44/285962/hp-240-g8-i3-6l1a1pa-210423-031503-200x200.jpg',
        'product_content'=>'Đáp ứng tốt mọi tác vụ của một chiếc laptop học tập - văn phòng trên Word, Excel,... đến giải trí, lướt web, xem hay hay chỉnh sửa ảnh cơ bản cũng mượt mà nhờ sự kết hợp của bộ vi xử lý Intel Core i3 Tiger Lake 1115G4 cùng card đồ họa Intel UHD Graphics. ',
        'cat_id'=>2
    ),

    6=> array(
        'id'=>6,
        'product_title'=>'Laptop Lenovo ThinkBook 14 G3 ACL R3 5300U/8GB/256GB/Win11 (21A200RWVN) ',
        'product_price'=>7990000,
        'product_code'=>'SP006',
        'product_desc'=>'Laptop Lenovo ThinkBook 14 G3 ACL R3 5300U (21A200RWVN) với hiệu năng ổn định giúp vận hành hiệu quả và mượt mà mọi tác vụ thường ngày của bạn, đi kèm với đó là một mức giá phù hợp, chắc chắn sẽ là sự lựa chọn tối ưu trong dòng laptop học tập - văn phòng.',
        'product_thumb'=>'https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_75/https://cdn.tgdd.vn/Products/Images/44/309601/lenovo-thinkbook-14-g3-acl-r3-21a200rwvn-thumb-200x200.jpg',
        'product_content'=>' Laptop hỗ trợ bạn vận hành hiệu quả các tác vụ làm việc thường ngày trên Word, Excel, PowerPoint,... hay các hoạt động giải trí như xem phim, lướt web, nghe nhạc,... với hiệu năng mạnh đến từ chip AMD Ryzen 3 5300U và card AMD Radeon Graphics.',
        'cat_id'=>2
    ),

    7=> array(
        'id'=>7,
        'product_title'=>'Máy tính bảng iPad Air 5 M1 Wifi 64GB',
        'product_price'=>14090000,
        'product_code'=>'SP007',
        'product_desc'=>'iPad Air 5 M1 Wifi 64 GB đã được công bố tại sự kiện Peek Performance diễn ra hôm 9/3 (theo giờ Việt Nam). Năm nay Apple đã có những thay đổi lớn về cả hiệu năng và bổ sung màu sắc mới cho thiết bị.',
        'product_thumb'=>'https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_75/https://cdn.tgdd.vn/Products/Images/522/248096/ipad-air-5-200x200.jpg',
        'product_content'=>'Apple M1 8 nhân là vi xử lý do chính Apple nghiên cứu và sản xuất. Con chip này đã được chứng minh sức mạnh qua nhiều dòng sản phẩm và bây giờ đã xuất hiện trên iPad Air 5 M1 Wifi 64 GB. Với 8 nhân CPU, vi xử lý này sẽ giúp thiết bị có thể hoạt động ổn định cùng với RAM 8 GB. ',
        'cat_id'=>3
    ),

    8=> array(
        'id'=>8,
        'product_title'=>'Máy tính bảng Samsung Galaxy Tab S8 Ultra 5G',
        'product_price'=>30990000,
        'product_code'=>'SP008',
        'product_desc'=>'Samsung Galaxy Tab S8 Ultra ra mắt với kích thước màn hình siêu to cùng một cấu hình mạnh mẽ, được xem là thiết bị phù hợp đối với những ai thường xuyên làm các công việc thiết kế hay thao tác trên trình duyệt web, bên cạnh đó Tab S8 Ultra còn mang đến những trải nghiệm tương tự một chiếc laptop khi sử dụng kèm với bàn phím.',
        'product_thumb'=>'https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_75/https://cdn.tgdd.vn/Products/Images/522/247513/samsung-galaxy-tab-s8-ultra-1-200x200.jpg',
        'product_content'=>'Samsung Galaxy Tab S8 Ultra trang bị tấm nền Super AMOLED với kích thước lên đến 14.6 inch, điều này giúp cho hình ảnh hiển thị được rực rỡ và bắt mắt hơn khi trải nghiệm trên một chiếc màn hình khủng.',
        'cat_id'=>3
    ),

    9=> array(
        'id'=>9,
        'product_title'=>'Laptop MSI Modern 14 C11M i3 1115G4/8GB/512GB/Win11 (011VN)',
        'product_price'=>9900000,
        'product_code'=>'SP009',
        'product_desc'=>'Laptop MSI Modern 14 C11M i3 1115G4 (011VN) được thiết kế để đáp ứng nhu cầu sử dụng cơ bản của những người dùng cần một chiếc máy tính có khả năng xử lý tốt các tác vụ học tập, làm việc văn phòng với hiệu suất ổn định.',
        'product_thumb'=>'https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_75/https://cdn.tgdd.vn/Products/Images/44/304539/msi-modern-14-c11m-i3-011vn-040523-124356-200x200.jpg',
        'product_content'=>'Laptop MSI được trang bị bộ vi xử lý Intel Core i3 1115G4 cùng với card đồ họa tích hợp Intel UHD Graphics, giúp máy xử lý nhanh chóng và hiệu quả các tác vụ không quá nặng như làm việc trên Word, Excel, PowerPoint,... hay chỉnh sửa hình ảnh 2D cơ bản trên các ứng dụng nhà Adobe.',
        'cat_id'=>2
    ),

    10=> array(
        'id'=>10,
        'product_title'=>'Điện thoại vivo Y36 128GB',
        'product_price'=>5990000,
        'product_code'=>'SP0010',
        'product_desc'=>'vivo Y36 128GB là một trong những sản phẩm điện thoại thông minh nổi bật và đáng chú ý của thương hiệu vivo. Với những tính năng và thông số kỹ thuật vượt trội, vivo Y36 hứa hẹn mang đến cho người dùng trải nghiệm di động đỉnh cao.',
        'product_thumb'=>'https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_75/https://cdn.tgdd.vn/Products/Images/42/311120/vivo-y36-128gb-220723-105141-200x200.jpg',
        'product_content'=>'vivo Y36 được thiết kế nguyên khối, với khung kim loại và mặt lưng kính, tạo nên vẻ đẹp sang trọng và cao cấp. Kích thước của điện thoại là dài 164.06 mm - ngang 76.17 mm - dày 8.07 mm và nặng 202 g, mang đến cảm giác cầm nắm chắc chắn và thoải mái trong lòng bàn tay.',
        'cat_id'=>1
    ),



);
?>


