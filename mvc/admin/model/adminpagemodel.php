<?php
    class AdminPageModel extends AdminModel{
        protected $table=DB_PREFIX.'page';
        protected $field=['title','content','createBy','createDate','updateDate','trash','status'];
        protected $key='pageId';
        //Các function cần thiết
        public function pageList($limit, $offset)
        {
            //Lấy danh sách thông tin web
            $data['pages']=$this->getAllLimit(['trash'=>0],$limit,$offset);
            //Tính tổng số thông tin web
            $totalRecords=count($this->getAll(['trash'=>0]));
            //Chuẩn bị Paging
            $data['paging']=new Paging('adminpage/pageList/',$totalRecords,$limit,$offset);
            
            return $data;
        }

        public function pageListInTrash($limit, $offset)
        {
            //Lấy danh sách thông tin web
            $data['pages']=$this->getAllLimit(['trash'=>1],$limit,$offset);
            //Tính tổng số thông tin web
            $totalRecords=count($this->getAll(['trash'=>1]));
            //Chuẩn bị Paging
            $data['paging']=new Paging('adminpage/pageListInTrash/',$totalRecords,$limit,$offset);
            
            return $data;
        }

        public function toggleTrash($pageId)
        {
            if($this->toggle('trash',$pageId)){
                $_SESSION['msg']='Thực hiện thành công !!!';
            }
            else{
                $_SESSION['msg']='Thực hiện thất bại !!!';
            }
            header("location:".BASE_URL."adminpage/pageList/".LIMIT."/0");
        }

        public function toggleStatus($pageId)
        {
            if($this->toggle('status',$pageId)){
                $_SESSION['msg']='Thực hiện thành công !!!';
            }
            else{
                $_SESSION['msg']='Thực hiện thất bại !!!';
            }
            header("location:".BASE_URL."adminpage/pageList/".LIMIT."/0");
        }

        public function doAddPage()
        {
            //Cài đặt thời gian ở Việt Nam
            date_default_timezone_set('Asia/Ho_Chi_Minh');

            //Lấy dữ liệu thông tin web mới
            $newpage['title']=$_POST['inputTitle'];
            $newpage['content']=$_POST['inputContent'];
            $newpage['createBy']=$_POST['inputCreateBy'];
            $newpage['createDate']=date('Y-m-d H:i:s');
            $newpage['updateDate']=date('Y-m-d H:i:s');
            $newpage['trash']=0;
            $newpage['status']=$_POST['inputStatus'];
            
            //Kiểm lỗi
            $_SESSION['msg']='';
            if($this->insert($newpage)){
                $_SESSION['msg'].='Thêm thông tin web thành công !!!';
            }else{
                $_SESSION['msg'].='Thêm thông tin web thất bại !!!';
            }
        }

        public function doUpdatePage($pageId)
        {
            //Cài đặt thời gian ở Việt Nam
            date_default_timezone_set('Asia/Ho_Chi_Minh');

            //Lấy dữ liệu thông tin web mới
            $newpage['title']=$_POST['inputTitle'];
            $newpage['content']=$_POST['inputContent'];
            $newpage['createBy']=$_POST['inputCreateBy'];
            $newpage['createDate']=$_POST['inputCreateDate'];
            $newpage['updateDate']=date('Y-m-d H:i:s');
            $newpage['trash']=$_POST['inputTrash'];
            $newpage['status']=$_POST['inputStatus'];
            
            //Kiểm lỗi
            $_SESSION['msg']='';
            if($this->update($newpage,$pageId)){
                $_SESSION['msg'].='Cập nhật thông tin web thành công !!!';
            }else{
                $_SESSION['msg'].='Cập nhật thông tin web thất bại !!!';
            }
            header("location:".BASE_URL."adminpage/pageList");
            exit;
        }

        public function pageDelete($pageId)
        {
            if($this->delete($pageId)){
                $_SESSION['msg']='Thực hiện thành công !!!';
            }
            else{
                $_SESSION['msg']='Thực hiện thất bại !!!';
            }
            header("location:".BASE_URL."adminpage/pageListInTrash/".LIMIT."/0");
        }
    }
?>