<?php
$act = 'hanghoa';
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}
switch ($act) {
    case 'hanghoa':
        include "./View/hanghoa.php";
        break;
    case 'edit':
        include "./View/editproduct.php";
        break;
    case 'themsp':
        include "./View/addproduct.php";
        break;
    case 'edit_action':
        
        if (isset($_GET['mahh'])) {
            $mahh = $_GET['mahh'];
            $tenhh = $_POST['tenhh'];
            $dongia = $_POST['dongia'];
            $giamgia = $_POST['giamgia'];
            $hinh = $_FILES['image']['name'];
            $Nhom = $_POST['nhom'];
            $maloai = $_POST['maloai'];
            $dacbiet = $_POST['dacbiet'];
            $soluotxem = $_POST['slx'];
            $ngaylap = $_POST['ngaylap'];
            $mota = $_POST['mota'];
            $soluongton = $_POST['slt'];
            $mausac = $_POST['mausac'];
            $size = $_POST['size'];

            $hh = new hanghoa();

            $checkup = $hh->updatesp($mahh, $tenhh, $dongia, $giamgia, $hinh, $Nhom, $maloai, $dacbiet, $soluotxem, $ngaylap, $mota, $soluongton, $mausac, $size);
            if ($checkup !== false) {
                uploadhinh();
                echo '<script> alert("Update thành công");</script>';
                include("./View/hanghoa.php");
            } else {
                echo '<script> alert("Update không thành công");</script>';
                include('./view/editproduct.php');
            }
            break;
        }
    case 'themsp_action':
        $tenhh = $_POST['tenhh'];
        $dongia = $_POST['dongia'];
        $giamgia = $_POST['giamgia'];
        $hinh = $_FILES['image']['name'];
        $Nhom = $_POST['nhom'];
        $maloai = $_POST['maloai'];
        $dacbiet = $_POST['dacbiet'];
        $soluotxem = $_POST['slx'];
        $ngaylap = $_POST['ngaylap'];
        $mota = $_POST['mota'];
        $soluongton = $_POST['slt'];
        $mausac = $_POST['mausac'];
        $size = $_POST['size'];
        //đem toàn bộ thông tin này update vap2 database
        $hh = new hanghoa();
        $checkinsert = $hh->insertsp($tenhh, $dongia, $giamgia, $hinh, $Nhom, $maloai, $dacbiet, $soluotxem, $ngaylap, $mota, $soluongton, $mausac, $size);
        if ($checkinsert !== false) {
            uploadhinh();
            echo '<script> alert("insert thành công");</script>';
            include("./View/hanghoa.php");
        } else {
            echo '<script> alert("insert không thành công");</script>';
            include('./view/addproduct.php');
        }
        break;
    case 'delete':
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $hh = new hanghoa();
            $hh->deletesp($id);
            echo '<script> alert("Delete thành công");</script>';
            include "./View/hanghoa.php";
        }
        break;
    case 'hoadon':
        include "./View/hoadon.php";
        break;
    case 'cthoadon':
        include "./View/cthoadon.php";
        break;
    case 'category':
        include "./View/category.php";
        break;

}
