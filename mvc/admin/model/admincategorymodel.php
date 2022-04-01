<?php
    class AdminCategoryModel extends AdminModel{
        protected $table=DB_PREFIX.'category';
        protected $field=['catName','alias','parentId','trash','status'];
        protected $key='catId';
        //Các function cần thiết
        public function categoryList($limit, $offset)
        {
            //Lấy danh sách nhóm sản phẩm
            $data['cats']=$this->getAllLimit(['trash'=>0],$limit,$offset);
            //Tính tổng số nhóm sản phẩm
            $totalRecords=count($this->getAll(['trash'=>0]));
            //Chuẩn bị Paging
            $data['paging']=new Paging('admincategory/categoryList/',$totalRecords,$limit,$offset);
            
            return $data;
        }

        public function categoryListInTrash($limit, $offset)
        {
            //Lấy danh sách nhóm sản phẩm
            $data['cats']=$this->getAllLimit(['trash'=>1],$limit,$offset);
            //Tính tổng số nhóm sản phẩm
            $totalRecords=count($this->getAll(['trash'=>1]));
            //Chuẩn bị Paging
            $data['paging']=new Paging('admincategory/categoryListInTrash/',$totalRecords,$limit,$offset);
            
            return $data;
        }

        public function toggleTrash($catId)
        {
            if($this->toggle('trash',$catId)){
                $_SESSION['msg']='Thực hiện thành công !!!';
            }
            else{
                $_SESSION['msg']='Thực hiện thất bại !!!';
            }
            header("location:".BASE_URL."admincategory/categoryList/".LIMIT."/0");
        }

        public function toggleStatus($catId)
        {
            if($this->toggle('status',$catId)){
                $_SESSION['msg']='Thực hiện thành công !!!';
            }
            else{
                $_SESSION['msg']='Thực hiện thất bại !!!';
            }
            header("location:".BASE_URL."admincategory/categoryList/".LIMIT."/0");
        }

        public function doAddCategory()
        {
            //Lấy dữ liệu nhóm sản phẩm mới
            $newcat['catName']=$_POST['inputCatName'];
            $newcat['alias']=$_POST['inputAlias'];
            $newcat['parentId']=0;
            $newcat['trash']=0;
            $newcat['status']=$_POST['inputStatus'];

            //Tạo chuỗi alias
            $helper=new Helper;
            if($newcat['alias']==''){
                $newcat['alias']=$helper->to_alias($newcat['catName']);
            }
            //Kiểm lỗi
            $_SESSION['msg']='';
            if($this->insert($newcat)){
                $_SESSION['msg'].='Thêm nhóm sản phẩm thành công !!!';
            }else{
                $_SESSION['msg'].='Thêm nhóm sản phẩm thất bại !!!';
            }
        }

        public function doUpdateCategory($catId)
        {
            //Lấy dữ liệu nhóm sản phẩm mới
            $newcat['catName']=$_POST['inputCatName'];
            $newcat['alias']=$_POST['inputAlias'];
            $newcat['parentId']=0;
            $newcat['trash']=$_POST['inputTrash'];
            $newcat['status']=$_POST['inputStatus'];

            //Tạo chuỗi alias
            $helper=new Helper;
            if($newcat['alias']==''){
                $newcat['alias']=$helper->to_alias($newcat['catName']);
            }
            //Kiểm lỗi
            $_SESSION['msg']='';
            if($this->update($newcat,$catId)){
                $_SESSION['msg'].='Cập nhật nhóm sản phẩm thành công !!!';
            }else{
                $_SESSION['msg'].='Cập nhật nhóm sản phẩm thất bại !!!';
            }
            header("location:".BASE_URL."admincategory/categoryList");
            exit;
        }

        public function categoryDelete($catId)
        {
            if($this->delete($catId)){
                $_SESSION['msg']='Thực hiện thành công !!!';
            }
            else{
                $_SESSION['msg']='Thực hiện thất bại !!!';
            }
            header("location:".BASE_URL."admincategory/categoryListInTrash/".LIMIT."/0");
        }
    }
?>