<?php
    $act='login';
    if(isset($_GET['act']))
    {
        $act=$_GET['act'];
    }
    switch($act){
        case 'login':
            include "./View/login.php";
            break;
        case 'login_action':
            //gửi qua username,pass
            if(isset($_POST['username']) && isset($_POST['pass']))
            {
                $user=$_POST['username'];
                $pass=$_POST['pass'];
                //mã hóa pass về cùng với pass trong database
                $cdau='GHT%#';
                $ccuoi='&TUY9';
                $crypt=md5($cdau.$pass.$ccuoi);

                $ur=new user();
                $urs=$ur->loginUser($user, $crypt);

                if($urs == true)
                {
                    $_SESSION['makh']=$urs['makh'];
                    $_SESSION['tenkh']=$urs['tenkh'];
                    $_SESSION['username']=$urs['username'];
                    echo '<script> alert("Đăng nhập thành công") </script>';
                    echo '<meta http-equiv="refresh" content="0; url=./index.php?action=home"/>';
                }
                else
                {
                    echo '<script> alert("Đăng nhập không thành công") </script>';
                    include "./View/register.php";
                }
            }
            break;
        case 'logout':
            if(isset($_SESSION['makh']))
            {
                unset($_SESSION['makh']);
                unset($_SESSION['tenkh']);
                unset($_SESSION['username']);
                unset($_SESSION['cart']);
            }
            echo '<meta http-equiv="refresh" content="0; url=./index.php?action=home"/>';
            break;
    }   
?>