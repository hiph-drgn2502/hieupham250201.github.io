<?php
    class AdminProduct extends AdminController{
        public function productList($limit=LIMIT, $offset=0)
        {
            //Yêu cầu model thực hiện
            $adminproductmodel=new AdminProductModel;
            $data=$adminproductmodel->productList($limit,$offset);
            //Gửi dữ liệu cho view

            $this->loadAdminView('adminmaster1','adminproduct/productList',$data);

        }

        public function productListInTrash($limit=LIMIT, $offset=0)
        {
            //Yêu cầu model thực hiện
            $adminproductmodel=new AdminProductModel;
            $data=$adminproductmodel->productListInTrash($limit,$offset);
            //Gửi dữ liệu cho view

            $this->loadAdminView('adminmaster1','adminproduct/productlistintrash',$data);

        }

        public function productToggleTrash($productid)
        {
           //Yêu cầu model thực hiện
           $adminproductmodel=new AdminProductModel;
           $data=$adminproductmodel->toggleTrash($productid);
        }

        public function productToggleStatus($productid)
        {
            //Yêu cầu model thực hiện
           $adminproductmodel=new AdminProductModel;
           $data=$adminproductmodel->toggleStatus($productid);
        }

        public function productAdd()
        {
            //Xử lý dữ liệu nhận được
            if(isset($_POST['submit'])){
                $adminproductmodel=new AdminProductModel;
                $adminproductmodel->doAddProduct();
            }
            //Hiển thị form Add
            $catmodel = new AdminCategoryModel;
            $data['cats']=$catmodel->getAll(['trash'=>0, 'status'=>1]);
            $collectionmodel = new AdminCollectionModel;
            $data['collections']=$collectionmodel->getAll(['trash'=>0, 'status'=>1]);
            $this->loadAdminView('adminmaster1','adminproduct/productAdd',$data);
        }

        public function UpdateProduct($productid)
        {
            //Xử lý dữ liệu nhận được
            $adminproductmodel=new AdminProductModel;
            if(isset($_POST['submit'])){
                $adminproductmodel->doUpdateProduct($productid);
            }
            //Hiển thị form Update
            $catmodel = new AdminCategoryModel;
            $data['cats']=$catmodel->getAll(['trash'=>0, 'status'=>1]);
            $collectionmodel = new AdminCollectionModel;
            $data['collections']=$collectionmodel->getAll(['trash'=>0, 'status'=>1]);
            $data['oldproduct']=$adminproductmodel->get(['productid'=>$productid]);
            $this->loadAdminView('adminmaster1','adminproduct/updateproduct',$data);   
        }

        public function productDelete($productid)
        {
            $adminproductmodel=new AdminProductModel;
            $data=$adminproductmodel->productDelete($productid);
        }
    }
?>