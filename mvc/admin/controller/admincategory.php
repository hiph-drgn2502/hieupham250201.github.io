<?php
    class AdminCategory extends AdminController{
        public function categoryList($limit=LIMIT, $offset=0)
        {
            //Yêu cầu model thực hiện
            $admincategorymodel=new AdminCategoryModel;
            $data=$admincategorymodel->categoryList($limit,$offset);
            //Gửi dữ liệu cho view

            $this->loadAdminView('adminmaster1','admincategory/categoryList',$data);

        }

        public function categoryListInTrash($limit=LIMIT, $offset=0)
        {
            //Yêu cầu model thực hiện
            $admincategorymodel=new AdminCategoryModel;
            $data=$admincategorymodel->categoryListInTrash($limit,$offset);
            //Gửi dữ liệu cho view

            $this->loadAdminView('adminmaster1','admincategory/categorylistintrash',$data);

        }

        public function categoryToggleTrash($catId)
        {
           //Yêu cầu model thực hiện
           $admincategorymodel=new AdminCategoryModel;
           $data=$admincategorymodel->toggleTrash($catId);
        }

        public function categoryToggleStatus($catId)
        {
            //Yêu cầu model thực hiện
           $admincategorymodel=new AdminCategoryModel;
           $data=$admincategorymodel->toggleStatus($catId);
        }

        public function categoryAdd()
        {
            //Xử lý dữ liệu nhận được
            if(isset($_POST['submit'])){
                $admincategorymodel=new AdminCategoryModel;
                $admincategorymodel->doAddCategory();
            }
            
            $this->loadAdminView('adminmaster1','admincategory/categoryAdd',[]);
        }

        public function UpdateCategory($catId)
        {
            //Xử lý dữ liệu nhận được
            $admincategorymodel=new AdminCategoryModel;
            if(isset($_POST['submit'])){
                $admincategorymodel->doUpdateCategory($catId);
            }
            //Hiển thị form Update
            $data['oldcategory']=$admincategorymodel->get(['catId'=>$catId]);
            $this->loadAdminView('adminmaster1','admincategory/updatecategory',$data);   
        }

        public function categoryDelete($catId)
        {
            $admincategorymodel=new AdminCategoryModel;
            $data=$admincategorymodel->categoryDelete($catId);
        }
    }
?>