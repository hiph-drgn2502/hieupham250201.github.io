<?php 
    class AdminProductModel extends AdminModel{
        protected $table=DB_PREFIX.'product';
        protected $field=['productName', 'alias','catId','collectionId','image','trash','status','detail','price','saleprice'];
        protected $key='productid';
        //Các function cần thiết
        public function productList($limit, $offset)
        {
            //Lấy danh sách sản phẩm
            $data['products']=$this->getAllLimit(['trash'=>0],$limit,$offset);
            //Tính tổng số sản phẩm
            $totalRecords=count($this->getAll(['trash'=>0]));
            //Chuẩn bị Paging
            $data['paging']=new Paging('adminproduct/productList/',$totalRecords,$limit,$offset);
            
            return $data;
        }

        public function productListInTrash($limit, $offset)
        {
            //Lấy danh sách sản phẩm
            $data['products']=$this->getAllLimit(['trash'=>1],$limit,$offset);
            //Tính tổng số sản phẩm
            $totalRecords=count($this->getAll(['trash'=>1]));
            //Chuẩn bị Paging
            $data['paging']=new Paging('adminproduct/productListInTrash/',$totalRecords,$limit,$offset);
            
            return $data;
        }

        public function toggleTrash($productid)
        {
            if($this->toggle('trash',$productid)){
                $_SESSION['msg']='Thực hiện thành công !!!';
            }
            else{
                $_SESSION['msg']='Thực hiện thất bại !!!';
            }
            header("location:".BASE_URL."adminproduct/productList/".LIMIT."/0");
        }

        public function toggleStatus($productid)
        {
            if($this->toggle('status',$productid)){
                $_SESSION['msg']='Thực hiện thành công !!!';
            }
            else{
                $_SESSION['msg']='Thực hiện thất bại !!!';
            }
            header("location:".BASE_URL."adminproduct/productList/".LIMIT."/0");
        }

        public function doAddProduct()
        {
            //Lấy dữ liệu sản phẩm mới
            $newpro['productName']=$_POST['inputProductName'];
            $newpro['alias']=$_POST['inputAlias'];
            $newpro['catId']=$_POST['inputCatId'];
            $newpro['collectionId']=$_POST['inputCollectionId'];
            $newpro['image']=basename($_FILES['inputFileUpload']['name']);
            $newpro['trash']=0;
            $newpro['status']=$_POST['inputStatus'];
            $newpro['detail']=$_POST['inputDetail'];
            $newpro['price']=$_POST['inputPrice'];
            $newpro['saleprice']=$_POST['inputSalePrice'];

            //Tạo chuỗi alias
            $helper=new Helper;
            if($newpro['alias']==''){
                $newpro['alias']=$helper->to_alias($newpro['productName']);
            }
            //Kiểm lỗi
            if($newpro['price']<$newpro['saleprice']){
                $_SESSION['msg'].='Giá sale phải nhỏ hơn giá bán';
            }else{
                $uploadSuccess=$helper->doUpload('inputFileUpload');
                if($uploadSuccess){
                    if($this->insert($newpro)){
                        $_SESSION['msg'].='Thêm sản phẩm thành công !!!';
                    }else{
                        $_SESSION['msg'].='Thêm sản phẩm thất bại !!!';
                    }
                }
            }
        }

        public function doUpdateProduct($productid)
        {
            //Lấy dữ liệu sản phẩm mới
            $newpro['productName']=$_POST['inputProductName'];
            $newpro['alias']=$_POST['inputAlias'];
            $newpro['catId']=$_POST['inputCatId'];
            $newpro['collectionId']=$_POST['inputCollectionId'];
            $newpro['trash']=$_POST['inputTrash'];
            $newpro['status']=$_POST['inputStatus'];
            $newpro['detail']=$_POST['inputDetail'];
            $newpro['price']=$_POST['inputPrice'];
            $newpro['saleprice']=$_POST['inputSalePrice'];

            //Tạo chuỗi alias
            $helper=new Helper;
            if($newpro['alias']==''){
                $newpro['alias']=$helper->to_alias($newpro['productName']);
            }
            //Kiểm lỗi
            if($newpro['price']<$newpro['saleprice']){
                $_SESSION['msg'].='Giá sale phải nhỏ hơn giá bán';
            }else{
                if($_FILES['inputFileUpload']['name']!=''){
                    $_SESSION['msg'].="file up lên:".$_FILES['inputFileUpload']['name'];
                    $uploadSuccess=$helper->doUpload('inputFileUpload');
                    if($uploadSuccess){
                        $newpro['image']=$_FILES['inputFileUpload']['name'];
                        if($this->update($newpro,$productid)){
                            $_SESSION['msg'].='Cập nhật sản phẩm thành công !!!';
                        }else{
                            $_SESSION['msg'].='Cập nhật sản phẩm thất bại !!!';
                        }
                        header("Location:".BASE_URL."adminProduct/productList");
                        exit;
                    }
                }else{
                    if($this->update($newpro,$productid)){
                        $_SESSION['msg'].='Cập nhật sản phẩm thành công !!!';
                    }else{
                        $_SESSION['msg'].='Cập nhật sản phẩm thất bại !!!';
                    }
                    header("Location:".BASE_URL."adminProduct/productList");
                    exit;
                }
            }
        }

        public function productDelete($productid)
        {
            if($this->delete($productid)){
                $_SESSION['msg']='Thực hiện thành công !!!';
            }
            else{
                $_SESSION['msg']='Thực hiện thất bại !!!';
            }
            header("location:".BASE_URL."adminproduct/productListInTrash/".LIMIT."/0");
        }
    }
?>