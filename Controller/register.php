<?php
    $act="register";
    if(isset($_GET['act']))
    {
        $act=$_GET['act'];
    }
    switch($act){
        case 'register':
            include "./View/register.php";
            break;
        case 'register_action':
            //truyền qua thông tin dang ky
            if(isset($_POST['name']))
            {
                $tenkh = $_POST['name'];
                $username = $_POST['username'];
                $password = $_POST['pass'];
                $email = $_POST['email'];
                $diachi = $_POST['address'];
                $dt = $_POST['phone'];
                $cdau='GHT%#';
                $ccuoi='&TUY9';
                $crypt = md5($cdau.$password.$ccuoi);
                //controller yeu cau model viết lệnh insert vào trong database
                $ur = new user();
                $check=$ur->CkeckUserName($username);
                if($check == false)
                {
                    $ur->InsertUser($tenkh, $username, $crypt, $email, $diachi, $dt);
                    if($ur->InsertUser($tenkh, $username, $crypt, $email, $diachi, $dt) !='false')
                    {
                        echo '<script> alert("Đăng ký thành công") </script>';
                        include "./View/home.php";
                    }
                    else{
                        echo '<script> alert("Đăng ký không thành công") </script>';
                        include "./View/register.php";
                    }
                }
                else{
                    echo '<script> alert("Username đã tồn tại, vui lòng chọn user khác") </script>';
                    include "./View/register.php";
                }

            }
            break;
    }
?>