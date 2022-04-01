<?php
    class Cart extends UserController{
        //Thêm sản phẩm vào giỏ hàng
        public function add($productid,$productName,$price)
        {
            if(isset($_SESSION['cart'][$productid])){
                $_SESSION['cart'][$productid]['quantity']+=1;
            }else{
                $_SESSION['cart'][$productid]['quantity']=1;
                $_SESSION['cart'][$productid]['productName']=$productName;
                $_SESSION['cart'][$productid]['price']=$price;
            }
            echo '<script>window.history.back();</script>';
        }

        public function getCount()
        {
            $count=0;
            if(isset($_SESSION['cart'])){
                foreach($_SESSION['cart'] as $k=>$v){
                    $count+=$v['quantity'];
                }
            }
            return $count;
        }

        public function getItems()
        {
            if(isset($_SESSION['cart']))
                return $_SESSION['cart'];
            else
                return null;
        }

        public function getSubTotal($productid)
        {
            if(isset($_SESSION['cart'][$productid])){
                return $_SESSION['cart'][$productid]['price']*$_SESSION['cart'][$productid]['quantity'];
            }else{
                return 0;
            }
        }

        public function getTotal()
        {
            $total=0;
            if(isset($_SESSION['cart'])){
                foreach($_SESSION['cart'] as $k=>$v){
                    $total+=$this->getSubTotal($k);
                }
            }
            return $total;
        }

        public function update()
        {
            foreach($_POST as $productid=>$quantity){
                if($quantity == 0){
                    $this->remove($productid);
                }else{
                    $_SESSION['cart'][$productid]['quantity']=$quantity;
                    $_SESSION['update']=true;
                }
                $_SESSION['update']=true;
            }
            echo '<script>window.history.back();</script>';
        }

        public function remove($productid)
        {
            if(isset($_SESSION['cart'][$productid])){
                unset($_SESSION['cart'][$productid]);
            }
            if(empty($_SESSION['cart'])){
                unset($_SESSION['cart']);
            }
            echo '<script>window.history.back();</script>';
        }

        public function checkOut()
        {
            if(isset($_POST['submit'])){
                $cartmodel=new CartModel();
                $cartmodel->checkOut($this->getTotal());
            }
            $this->loadView('master3','cart/checkout',[]);
        }
    }
?>