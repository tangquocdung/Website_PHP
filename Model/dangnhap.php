<?php
    class dangnhap{
        public function __construct(){}

        public function getAdmin($user, $pass)
        {
            $db=new connect();
            $select="select * from admin where user ='$user' and password='$pass'";
            $result=$db->getInstance($select);
            return $result;
        }
    }
?>