<?php
    class loai{
        function __construct(){}

        public function getLoai(){
            $db=new connect();
            $select="select * from loai";
            $result=$db->getList($select);
            return $result;
        }
        function deletesp($id){
            $db=new connect();
            $query="delete from product where mahh=$id";
            $db->exec($query);
        }
    }
?>