<?php
    if(!isset($_SESSION['cart']))
    {
        //tạo giỏ hàng
        $_SESSION['cart'] = array();
    }
    $act ="cart";
    if(isset($_GET['act']))
    {
        $act=$_GET['act'];
    }
    switch($act){
        case 'cart':
            if(isset($_POST['mahh']))
            {
                $mahh = $_POST["mahh"];
                $soluong = $_POST["soluong"];
                $mausac = $_POST["mymausac"];
                $size = $_POST["size"];
        
                $gh = new cart();
                $gh->add_items($mahh,$soluong,$mausac,$size);
        
            }
                include "./View/cart.php";
        break;     
        case 'delete_item':
            if(isset($_GET['id']))
            {
                $vitri = $_GET['id'];
                $gh = new cart();
                $gh->delete_item($vitri);
            }
            include "./View/cart.php";
        break;

        case 'update_item':
            if(isset($_POST['newqty']))
            {
                $new_list = $_POST['newqty'];
                foreach($new_list as $vitri => $qty)
                {
                    if($_SESSION['cart'][$vitri]['quanty'] != $qty)
                    {
                        $gh = new cart;
                        $gh->update_items($vitri, $qty);
                    }
                }
            }
            include "./View/cart.php";
        break;
    }
    //click nút mua sẽ truyền qua dây
    //nhận
?>