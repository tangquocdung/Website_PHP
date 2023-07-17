<?php
    $act = 'loaiadmin';
    if(isset($_GET['act'])) {
        $act = $_GET['act'];
    }
    switch($act) {
        case 'loaiadmin':
            include "./View/loaiadmin.php";
            break;
        case 'edit':
            include "./View/editloaiadmin.php";
            break;
        case 'themloai':
            include "./View/editloaiadmin.php";
            break;
        case 'edit_action':
            if(isset($_GET['id']))
            {
                $maloai=$_GET['id'];
                $tenloai=$_POST['tenloai'];
                $idmenu=$_POST['idmenu'];

                $hh=new loaiadmin();

                $checkup=$hh->updatesp($maloai,$tenloai,$idmenu);
                if($checkup !== false)
                {
                    echo '<script> alert("Update thành công");</script>';
                    include("./View/loaiadmin.php");
                }
                else
                {
                    echo '<script> alert("Update không thành công");</script>';
                    include('./view/editloaiadmin.php');
                }
            break;
            }
        case 'themloai_action':
            $tenloai=$_POST['tenloai'];
            $idmenu=$_POST['idmenu'];
            //đem toàn bộ thông tin này update vap2 database
            $hh=new loaiadmin();
            $checkinsert=$hh->insertloai($tenloai,$idmenu);
            if($checkinsert !== false)
            {
                echo '<script> alert("insert thành công");</script>';
                include("./View/loaiadmin.php");
            }
            else
            {
                echo '<script> alert("insert không thành công");</script>';
                include('./view/editloaiadmin.php');
            }
            break;
        case 'delete':
            if(isset($_GET['id']))
            {
                $id=$_GET['id'];
                $hh=new loaiadmin();
                $hh->deletesp($id);
                echo '<script> alert("Delete thành công");</script>';
                include "./View/loaiadmin.php";
            }
            break;
        case 'importloai_action':
            if(isset($_POST['submit_file']))
            {
                //b1 ;lấy về
                $file=$_FILES['file']['tmp_name'];
                //b2: thêm vào ký tự trong file xBB xBF xEF
                file_put_contents($file,str_replace("\xEF\xBB\xBF","",file_get_contents($file)));
                //b3 : mở file đó ra
                $file_open=fopen($file, "r");
                //b4; đọc nội dung của file, fgetc, fgets
                $loai=new loaiadmin();
                while(($csv=fgetcsv($file_open,1000,",")) !== false)
                {
                    $maloai=$csv[0];
                    $tenloai=$csv[1];
                    $idmenu=$csv[2];
                    $loai->importloai($maloai,$tenloai,$idmenu);
                }
                echo '<script> alert("Import thành công"); </script>';
                include "./View/loaiadmin.php";
            }
            break;
    }
?>