<?php
    class connect{
        //thuộc tính
        var $db =null;
        //PDB(dsn, user, pass)
        //hàm tạo
        public function __construct(){
            $dsn = 'mysql:host=localhost;dbname=shoppers_php';
            $user = 'root';
            $pass ='';
            try {
                $this->db=new PDO($dsn, $user, $pass,array(PDO::MYSQL_ATTR_INIT_COMMAND=> "SET NAMES utf8"));
                // echo "Thành Công";
            }catch(\Throwable $th){
                echo "Thất bại";
                echo $th;
            }
        }
        public function getList($select)
        {
            $result = $this->db->query($select);
            return $result;
        }
        //phương thức trả về 1 object
        public function getInstance($select)
        {
            $result = $this->db->query($select);
            $result = $result->fetch();
            return $result;
        }

        public function exec($query)
        {
            $result = $this->db->exec($query);
            return $result;
        }
    }
?>