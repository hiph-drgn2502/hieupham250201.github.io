<?php
    class CartModel extends BaseModel{
        public function checkOut($total)
        {
            $_SESSION['msg']='';
            //Hứng dữ liệu customer và đưa vào CSDL
            $newcustomer['userId']=0;
            $newcustomer['fullname']=$_POST['inputFullName'];
            $newcustomer['address']=$_POST['inputAddress'];
            $newcustomer['phone']=$_POST['inputPhone'];
            $newcustomer['email']=$_POST['inputEmail'];
            $newcustomer['trash']=0;

            $customermodel=new CustomerModel;
            if(!$customermodel->insert($newcustomer)){
                $_SESSION['msg'].='Lỗi trong quá trình xử lý đơn hàng';
            }

            //Lấy id của customer mới
            $sql="select * from ".DB_PREFIX."customer order by customerId DESC";
            $customerId=$this->queryFirst($sql)['customerId'];

            //Hứng dữ liệu của order và đưa vào CSDL
            $neworder['customerId']=$customerId;
            $neworder['orderDate']=date('Y-m-d H:i:s');
            $neworder['total']=$total;
            $neworder['note']=$_POST['inputNote'];
            $neworder['status']=1;
            $neworder['trash']=0;

            $ordermodel=new OrderModel;
            if(!($ordermodel->insert($neworder))){
                $_SESSION['msg'].='Lỗi trong quá trình xử lý đơn hàng';
            }

            //Lấy id của order
            $sql="select * from ".DB_PREFIX."order order by orderId DESC";
            $orderId=$this->queryFirst($sql)['orderId'];

            //Hứng dữ liệu chi tiết order
            $orderdetailmodel=new OrderDetailModel;
            
            foreach($_SESSION['cart'] as $k=>$c){
                $neworderDetail['orderId']=$orderId;
                $neworderDetail['productid']=$k;
                $neworderDetail['price']=$c['price'];
                $neworderDetail['quantity']=$c['quantity'];
                $neworderDetail['trash']=0;

                if(!($orderdetailmodel->insert($neworderDetail))){
                    $_SESSION['msg'].='Lỗi trong quá trình xử lý đơn hàng';
                }
            }

            if($_SESSION['msg']==''){
                $_SESSION['msg']="Đặt hàng thành công !!!";
                unset($_SESSION['cart']);
            }
        }
    }
?>