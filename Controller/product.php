<?php
    $act = "product";
    if(isset($_GET['act']))
    {
        $act=$_GET['act'];//ketqua
    }
    switch($act)
    {
        case 'product':
            include "./View/hanghoa.php";
            break;
        // case 'khuyenmai':
        //     include "./View/sanpham.php";
        //     break;
        case 'details':
            include "./View/chitietsanpham.php";
            break;
        // case 'timkiem':
        //     include "./View/sanpham.php";
        //     break;
    }
    // include "./View/sanpham.php";
?>