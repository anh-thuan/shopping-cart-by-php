<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 17-4 Nâng cao</title> 

    <!--Boostrapcode-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" rel="stylesheet">
    <!-- <script src="https://kit.fontawesome.com/1954a5386a.js" crossorigin="anonymous"></script> -->

    <!--Css link-->
    <!-- <link href="public/css/style.css" rel="stylesheet" type="text/css"> -->
    
</head>
<body>
    <div id="wrapper">
    <?php
    session_start();
    ob_start();
//header
    //Lib
    require 'lib/templete.php';
    require 'lib/users.php';
    require 'lib/data.php';
    require 'lib/url.php';
    require 'lib/pages.php';
    require 'lib/product.php';
    require 'lib/number.php';
    require 'lib/cart.php';
    //Data
    require 'data/users.php';
    //require product data
    require 'data/pages.php';
    require 'data/products.php';
    
    // get_header();
    ?>
   
    <?php

    // $page=$_GET['page'];
    $mod=!empty($_GET['mod']) ? $_GET['mod'] : 'home';
    $act=!empty($_GET['act']) ? $_GET['act'] : 'main';
    $path = "modules/{$mod}/{$act}.php";
    // echo $path;
//Kiểm tra login
// if(!is_login()&&$page!='login')
// redirect ("?page=login");

//Tìm file có tồn tại ko=> Nếu mà ko tồn tại file thì sẽ chuyển đến file error và quay lại trang chủ
    if(file_exists($path)){
        require $path;
    }else{
        require 'inc/404.php';
    }
    ?>

    <?php
//footer
    // get_footer();
    ?>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>
</html>