<?php
    class loaiadmin{
        function __construct(){}

        //phương thức insert vào bảng hóa dơn

        public function getLoaiAll(){
            //b1 kết nối với datebase
            $db = new connect();
            //b2 viết câu truy vấn dữ liệu
            $select = "SELECT * FROM loai";
            //b3 thực thi
            $result = $db ->getList($select);
            return $result;//đây là kết quả trả về 12 sản phẩm
        }

        public function getLoaiId($id)
        {
            $db=new connect();
            $select="select * from loai where maloai=$id";
            $result=$db->getInstance($select);
            return $result;//array
        }

        function updatesp($id,$tenloai,$idmenu)
        {
            $db=new connect();
            $query="update loai
                    set maloai='$id',
                    tenloai='$tenloai',
                    idmenu='$idmenu'
                    where maloai=$id
            ";
           
            $db->exec($query);
        }

        function insertloai($tenloai,$idmenu)
        {
            $db=new connect();
            $query="insert into loai (maloai,tenloai,idmenu)
                    values (NULL,'$tenloai',$idmenu)";
        
            $db->exec($query);
        }

        //phương thức xóa sp
        function deletesp($id){
            $db=new connect();
            $query="delete from loai where maloai=$id";
            $db->exec($query);
        }

        public function importloai($maloai, $tenloai, $idmenu)
        {
            $db = new connect();
            $query="insert into loai (maloai,tenloai,idmenu) values ($maloai, '$tenloai', $idmenu)";
            $db->exec($query);
        }
    }
?>