<?php
    class AdminTopicModel extends AdminModel{
        protected $table=DB_PREFIX.'topic';
        protected $field=['topicName','topicAlias','trash','status'];
        protected $key='topicId';
        //Các function cần thiết
        public function topicList($limit, $offset)
        {
            //Lấy danh sách chủ đề
            $data['topics']=$this->getAllLimit(['trash'=>0],$limit,$offset);
            //Tính tổng số chủ đề
            $totalRecords=count($this->getAll(['trash'=>0]));
            //Chuẩn bị Paging
            $data['paging']=new Paging('admintopic/topicList/',$totalRecords,$limit,$offset);
            
            return $data;
        }

        public function topicListInTrash($limit, $offset)
        {
            //Lấy danh sách chủ đề
            $data['topics']=$this->getAllLimit(['trash'=>1],$limit,$offset);
            //Tính tổng số chủ đề
            $totalRecords=count($this->getAll(['trash'=>1]));
            //Chuẩn bị Paging
            $data['paging']=new Paging('admintopic/topicListInTrash/',$totalRecords,$limit,$offset);
            
            return $data;
        }

        public function toggleTrash($topicId)
        {
            if($this->toggle('trash',$topicId)){
                $_SESSION['msg']='Thực hiện thành công !!!';
            }
            else{
                $_SESSION['msg']='Thực hiện thất bại !!!';
            }
            header("location:".BASE_URL."admintopic/topicList/".LIMIT."/0");
        }

        public function toggleStatus($topicId)
        {
            if($this->toggle('status',$topicId)){
                $_SESSION['msg']='Thực hiện thành công !!!';
            }
            else{
                $_SESSION['msg']='Thực hiện thất bại !!!';
            }
            header("location:".BASE_URL."admintopic/topicList/".LIMIT."/0");
        }

        public function doAddTopic()
        {
            //Lấy dữ liệu chủ đề mới
            $newtopic['topicName']=$_POST['inputTopicName'];
            $newtopic['topicAlias']=$_POST['inputTopicAlias'];
            $newtopic['trash']=0;
            $newtopic['status']=$_POST['inputStatus'];

            //Tạo chuỗi topicAlias
            $helper=new Helper;
            if($newtopic['topicAlias']==''){
                $newtopic['topicAlias']=$helper->to_alias($newtopic['topicName']);
            }
            //Kiểm lỗi
            $_SESSION['msg']='';
            if($this->insert($newtopic)){
                $_SESSION['msg'].='Thêm chủ đề thành công !!!';
            }else{
                $_SESSION['msg'].='Thêm chủ đề thất bại !!!';
            }
        }

        public function doUpdateTopic($topicId)
        {
            //Lấy dữ liệu chủ đề mới
            $newtopic['topicName']=$_POST['inputTopicName'];
            $newtopic['topicAlias']=$_POST['inputTopicAlias'];
            $newtopic['trash']=$_POST['inputTrash'];
            $newtopic['status']=$_POST['inputStatus'];

            //Tạo chuỗi topicAlias
            $helper=new Helper;
            if($newtopic['topicAlias']==''){
                $newtopic['topicAlias']=$helper->to_alias($newtopic['topicName']);
            }
            //Kiểm lỗi
            $_SESSION['msg']='';
            if($this->update($newtopic,$topicId)){
                $_SESSION['msg'].='Cập nhật chủ đề thành công !!!';
            }else{
                $_SESSION['msg'].='Cập nhật chủ đề thất bại !!!';
            }
            header("location:".BASE_URL."admintopic/topicList");
            exit;
        }

        public function topicDelete($topicId)
        {
            if($this->delete($topicId)){
                $_SESSION['msg']='Thực hiện thành công !!!';
            }
            else{
                $_SESSION['msg']='Thực hiện thất bại !!!';
            }
            header("location:".BASE_URL."admintopic/topicListInTrash/".LIMIT."/0");
        }
    }
?>