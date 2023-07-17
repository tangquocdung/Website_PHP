
<?php
    class cart{
        public function add_items($key,$quantity,$mycolor,$size)
        {
            $sl=0;
            foreach($_SESSION['cart'] as $maid =>$item){
              if($item['mahh'] == $key && $item['size'] == $size && $item['mausac']==$mycolor){
                $sl=$item['quanty'];
                unset($_SESSION['cart'][$maid]);
                break;
              }
            }
            $produ=new product();
            $pros=$produ->getProductId($key);
            $hinh=$pros["hinh"];
            $ten = $pros["tenhh"];
            $dongia=$pros["dongia"];
            $quantity=$quantity + $sl;
            $total = $quantity*$dongia;

            //tạo 1 object
            $item = array(
                'mahh' =>$key,
                'hinh' => $hinh,
                'name' => $ten,
                'mausac' => $mycolor,
                'size' => $size,
                'quanty' => $quantity,
                'cost' => $dongia,
                'total' => $total,
            );
            //đưa đối tượng vào trong session
            $_SESSION['cart'][]=$item;
        }
        //pp tính tổng thành tiền
        public function getTotal()
        {
            $subtotal = 0;
            foreach($_SESSION['cart'] as $item)
            {
                $subtotal += $item['total'];
            }
            return number_format($subtotal, 2);
        }

        public function delete_item($vitri)
        {
            unset($_SESSION['cart'][$vitri]);
        }

        public function update_items($vitri, $soluong)
        {
            if($soluong <= 0)
            {
                $this->delete_item($vitri);
            }
            else
            {
                $_SESSION['cart'][$vitri]['quanty']=$soluong;
                $total_new = $_SESSION['cart'][$vitri]['quanty']*$_SESSION['cart'][$vitri]['cost'];
                $_SESSION['cart'][$vitri]['total']=$total_new;
            }
        }
    }
?>