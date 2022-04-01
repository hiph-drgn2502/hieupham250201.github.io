<?php
    class AdminPage extends AdminController{
        public function pageList($limit=LIMIT, $offset=0)
        {
            //Yêu cầu model thực hiện
            $adminpagemodel=new AdminPageModel;
            $data=$adminpagemodel->pageList($limit,$offset);
            //Gửi dữ liệu cho view

            $this->loadAdminView('adminmaster1','adminpage/pageList',$data);

        }

        public function pageListInTrash($limit=LIMIT, $offset=0)
        {
            //Yêu cầu model thực hiện
            $adminpagemodel=new AdminPageModel;
            $data=$adminpagemodel->pageListInTrash($limit,$offset);
            //Gửi dữ liệu cho view

            $this->loadAdminView('adminmaster1','adminpage/pagelistintrash',$data);

        }

        public function pageToggleTrash($pageId)
        {
           //Yêu cầu model thực hiện
           $adminpagemodel=new AdminPageModel;
           $data=$adminpagemodel->toggleTrash($pageId);
        }

        public function pageToggleStatus($pageId)
        {
            //Yêu cầu model thực hiện
           $adminpagemodel=new AdminPageModel;
           $data=$adminpagemodel->toggleStatus($pageId);
        }

        public function pageAdd()
        {
            //Xử lý dữ liệu nhận được
            if(isset($_POST['submit'])){
                $adminpagemodel=new AdminPageModel;
                $adminpagemodel->doAddPage();
            }
            
            $this->loadAdminView('adminmaster1','adminpage/pageAdd',[]);
        }

        public function UpdatePage($pageId)
        {
            //Xử lý dữ liệu nhận được
            $adminpagemodel=new AdminPageModel;
            if(isset($_POST['submit'])){
                $adminpagemodel->doUpdatePage($pageId);
            }
            //Hiển thị form Update
            $data['oldpage']=$adminpagemodel->get(['pageId'=>$pageId]);
            $this->loadAdminView('adminmaster1','adminpage/updatepage',$data);   
        }

        public function pageDelete($pageId)
        {
            $adminpagemodel=new AdminPageModel;
            $data=$adminpagemodel->pageDelete($pageId);
        }
    }
?>