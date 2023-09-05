<?php
//Khai báo function header
function get_header($version=''){
    if(!empty($version)){
        $path_header = "inc/header-{$version}.php";
    }else{
        $path_header = "inc/header.php";
    }
    if(file_exists($path_header))
    require $path_header;
    else{
        echo "Ko tồn tại đường dẫn {$path_header}";
    }
}

//Khai báo function footer
function get_footer(){
    $path_footer = "inc/footer.php";
    if(file_exists($path_footer))
        require $path_footer;
    
        else{
            echo "Ko tồn tại đường dẫn {$path_footer}";
         }
}

//Khai báo sidebar
function get_sidebar(){
    $path_sidebar = "inc/sidebar.php";
    if(file_exists($path_sidebar))
        require $path_sidebar;
    
        else{
            echo "Ko tồn tại đường dẫn {$path_sidebar}";
         }
}
?>