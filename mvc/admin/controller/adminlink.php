<?php
    class AdminLink extends AdminController{
        public function linkList($limit=LIMIT, $offset=0)
        {
            //Yêu cầu model thực hiện
            $adminlinkmodel=new AdminLinkModel;
            $data=$adminlinkmodel->linkList($limit,$offset);
            //Gửi dữ liệu cho view

            $this->loadAdminView('adminmaster1','adminlink/linkList',$data);

        }

        public function linkListInTrash($limit=LIMIT, $offset=0)
        {
            //Yêu cầu model thực hiện
            $adminlinkmodel=new AdminLinkModel;
            $data=$adminlinkmodel->linkListInTrash($limit,$offset);
            //Gửi dữ liệu cho view

            $this->loadAdminView('adminmaster1','adminlink/linklistintrash',$data);

        }

        public function linkToggleTrash($id)
        {
           //Yêu cầu model thực hiện
           $adminlinkmodel=new AdminLinkModel;
           $data=$adminlinkmodel->toggleTrash($id);
        }

        public function linkToggleStatus($id)
        {
            //Yêu cầu model thực hiện
           $adminlinkmodel=new AdminLinkModel;
           $data=$adminlinkmodel->toggleStatus($id);
        }

        public function linkAdd()
        {
            //Xử lý dữ liệu nhận được
            if(isset($_POST['submit'])){
                $adminlinkmodel=new AdminLinkModel;
                $adminlinkmodel->doAddLink();
            }
            
            $this->loadAdminView('adminmaster1','adminlink/linkAdd',[]);
        }

        public function UpdateLink($id)
        {
            //Xử lý dữ liệu nhận được
            $adminlinkmodel=new AdminLinkModel;
            if(isset($_POST['submit'])){
                $adminlinkmodel->doUpdateLink($id);
            }
            //Hiển thị form Update
            $data['oldlink']=$adminlinkmodel->get(['id'=>$id]);
            $this->loadAdminView('adminmaster1','adminlink/updatelink',$data);   
        }

        public function linkDelete($id)
        {
            $adminlinkmodel=new AdminLinkModel;
            $data=$adminlinkmodel->linkDelete($id);
        }
    }
?>