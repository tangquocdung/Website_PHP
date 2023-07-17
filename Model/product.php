<?php
    class product {
        public function __construct(){}

        public function getProductAll(){
            $db = new connect();
            $select = "SELECT * FROM product";
            $result = $db ->getList($select);
            return $result;
        }
        public function getProductNew(){
            $db = new connect();
            $select = "SELECT * FROM product ORDER BY mahh desc limit 2";
            $result = $db ->getList($select);
            return $result;
        }
        public function getProductId($id)
        {
            $db=new connect();
            $select="select * from product where mahh=$id";
            $result=$db->getInstance($select);
            return $result;//array
        }
        public function getProductNhom($nhom)
        {
            $db=new connect();
            //b2 : viết câu truy vấn dữ liệu
            $select="select mausac,hinh from product WHERE Nhom=$nhom";
            //b3: Thực thi
            $result=$db->getlist($select);
            return $result;
            
        }
        public function getProductNhomsize($nhom)
        {
            $db=new connect();
            //b2 : viết câu truy vấn dữ liệu
            $select="select DISTINCT size FROM product WHERE Nhom=$nhom ORDER by size";
            //b3: Thực thi
            $result=$db->getlist($select);
            return $result;

        }
    }
?>