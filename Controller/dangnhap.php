<?php
    $act="dangnhap";
    if(isset($_GET['act']))
    {
        $act = $_GET['act'];
    }
    switch ($act){
        case 'dangnhap':
            include "./View/dangnhap.php";
            break;
        case 'dangnhap_action':
            if(isset($_POST['txtusername']) && isset($_POST['txtpassword']))
            {
                $user = $_POST['txtusername'];
                $pass = $_POST['txtpassword'];
                $dn = new dangnhap();   
                $checkadmin = $dn->getAdmin($user, $pass);
                if($checkadmin != false)
                {
                    $_SESSION['admin'] = $checkadmin[0];
                    echo '<script> alert("Đăng nhập thành công"); </script>';
                    echo '<meta http-equiv=refresh content="0;url=./index.php?action=hanghoa"/>';
                }
                else{
                    echo '<script> alert("Đăng nhập ko thành công"); </script>';
                    include "./View/dangnhap.php";
                }
            }
    }
?>