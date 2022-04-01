<?php
    class AdminSlide extends AdminController{
        public function slideList($limit=LIMIT, $offset=0)
        {
            //Yêu cầu model thực hiện
            $adminslidemodel=new AdminSlideModel;
            $data=$adminslidemodel->slideList($limit,$offset);
            //Gửi dữ liệu cho view
            $this->loadAdminView('adminmaster1','adminslide/slideList',$data);

        }

        public function slideListInTrash($limit=LIMIT, $offset=0)
        {
            //Yêu cầu model thực hiện
            $adminslidemodel=new AdminSlideModel;
            $data=$adminslidemodel->slideListInTrash($limit,$offset);
            //Gửi dữ liệu cho view
            $this->loadAdminView('adminmaster1','adminslide/slidelistintrash',$data);

        }

        public function slideToggleTrash($id)
        {
           //Yêu cầu model thực hiện
           $adminslidemodel=new AdminSlideModel;
           $data=$adminslidemodel->toggleTrash($id);
        }

        public function slideToggleStatus($id)
        {
            //Yêu cầu model thực hiện
           $adminslidemodel=new AdminSlideModel;
           $data=$adminslidemodel->toggleStatus($id);
        }

        public function slideAdd()
        {
            //Xử lý dữ liệu nhận được
            if(isset($_POST['submit'])){
                $adminslidemodel=new AdminSlideModel;
                $adminslidemodel->doAddSlide();
            }
            $this->loadAdminView('adminmaster1','adminslide/slideAdd',[]);
        }

        public function UpdateSlide($id)
        {
            //Xử lý dữ liệu nhận được
            $adminslidemodel=new AdminSlideModel;
            if(isset($_POST['submit'])){
                $adminslidemodel->doUpdateSlide($id);
            }
            //Hiển thị form Update
            $data['oldslide']=$adminslidemodel->get(['id'=>$id]);
            $this->loadAdminView('adminmaster1','adminslide/updateslide',$data);   
        }

        public function slideDelete($id)
        {
            $adminslidemodel=new AdminSlideModel;
            $data=$adminslidemodel->slideDelete($id);
        }
    }
?>