<?php
class hanghoa
{
    public function __construct()
    {
    }

    public function getHangHoaAll()
    {
        $db = new connect();
        $select = "select * from product";
        $result = $db->getList($select);
        return $result;
    }

    public function getHangHoaID($id)
    {
        $db = new connect();
        $select = "select * from product where mahh=$id";
        $result = $db->getInstance($select);
        return $result;
    }
    function updatesp($id, $tenhh, $dongia, $giamgia, $hinh, $Nhom, $maloai, $dacbiet, $soluotxem, $ngaylap, $mota, $soluongton, $mausac, $size)
    {
        $db = new connect();
        $query = "update product
                    set tenhh='$tenhh',
                    dongia=$dongia,
                    giamgia=$giamgia,
                    hinh='$hinh',
                    Nhom=$Nhom,
                    maloai=$maloai,
                    dacbiet=$dacbiet,
                    soluotxem=$soluotxem,
                    ngaylap='$ngaylap',
                    mota='$mota',
                    soluongton=$soluongton,
                    mausac='$mausac',
                    size=$size
                    where mahh=$id
            ";

        return $db->exec($query);
    }
    // phương thức insert vào database
    function insertsp($tenhh, $dongia, $giamgia, $hinh, $Nhom, $maloai, $dacbiet, $soluotxem, $ngaylap, $mota, $soluongton, $mausac, $size)
    {
        $date = new DateTime($ngaylap);
        $ngay = $date->format("Y-m-d");
        $db = new connect();
        $query = "insert into `product`(`mahh`, `tenhh`, `dongia`, `giamgia`, `hinh`, `Nhom`, `maloai`, `dacbiet`, `soluotxem`, `ngaylap`, `mota`, `soluongton`, `mausac`, `size`
                    values (NULL,'$tenhh',$dongia,$giamgia,'$hinh',$Nhom,$maloai,$dacbiet,$soluotxem,'$ngay','$mota',$soluongton,'$mausac','$size')";

        return $db->exec($query);
    }

    //phương thức xóa sp
    function deletesp($id)
    {
        $db = new connect();
        $query = "delete from product where mahh=$id";
        $db->exec($query);
    }
    function gethoadon()
    {
        $db = new connect();
        $select = "Select * from hoadon1";
        return $db->getList($select);
    }
    function getcthoadon()
    {
        $db = new connect();
        $select = "Select * from cthoadon1";
        return $db->getList($select);
    }
    function getloai()
    {
        $db = new connect();
        $select = "SELECt hh.mahh, hh.tenhh, l.tenloai from product hh, category l WHERE hh.maloai = l.maloai";
        return $db->getList($select);
    }
    function getThongKeMatHang()
    {
        $db = new connect();
        $select = "SELECT a.tenhh,sum(b.soluongmua) as soluong 
            FROM product a, cthoadon1 b 
            where a.mahh=b.mahh group by a.tenhh";
        $result = $db->getList($select);
        return $result;
    }
}
