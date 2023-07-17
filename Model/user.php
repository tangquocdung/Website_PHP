<?php
    class user{
        public function __construct(){}
        function InsertUser($tenkh, $user, $matkhau, $email, $diachi, $dt){
            $db = new connect();
            $query = "insert into user(makh,tenkh,username,matkhau,email,diachi,sodienthoai,vaitro)
            values(NULL,'$tenkh','$user','$matkhau','$email','$diachi','$dt',default)";

            $db->exec($query);
        }
        function CkeckUserName($username)
        {
            $db=new connect();
            $select="select * from user where username='$username'";
            echo $select;
            $result=$db->getInstance($select);
            return $result;
        }

        function loginUser($username,$pass)
        {
            $db=new connect();
            $select="select * from user where username='$username' and matkhau='$pass'";
            echo $select;
            $result=$db->getInstance($select);
            return $result;
        }

        function getEmail($email,$pass)
        {
            $db=new connect();
            $select="select * from user where email='$email' and matkhau='$pass'";
            echo $select;
            $result=$db->getInstance($select);
            return $result;
        }
    }
?>