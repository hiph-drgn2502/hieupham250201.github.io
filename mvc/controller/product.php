<?php
    class Product extends UserController{
        private $productmodel;
        function __construct(){
            $this->productmodel=new ProductModel;
        }

        public function home($limit=LIMIT, $offset = 0){
            $data=$this->productmodel->home($limit, $offset);
            $this->loadview('master1','product/home',$data);
        }

        public function productByCat($alias, $limit=LIMIT, $offset = 0){
            $data=$this->productmodel->productByCat($alias, $limit, $offset);
            $this->loadview('master2','product/productbycat',$data);
        }

        public function productByCollection($alias, $limit=LIMIT, $offset = 0){
            $data=$this->productmodel->productByCollection($alias, $limit, $offset);
            $this->loadview('master2','product/productbycollection',$data);
        }

        public function productSearch($limit=LIMIT, $offset = 0){
            //Xác đinh searchKey
            if(isset($_POST['searchKey'])){
                $searchKey=$_POST['searchKey'];
            } else{
                $searchKey='';
            }
            //Chuẩn bị dữ liệu
            $data=$this->productmodel->productSearch($searchKey,$limit,$offset);
            $this->loadview('master1','product/productSearch',$data);
        }

        public function productDetail($alias){
            $data=$this->productmodel->productDetail($alias);
            $this->loadview('master3','product/productdetail',$data);
        }

    }
?>