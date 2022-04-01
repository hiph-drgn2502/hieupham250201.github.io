<?php
    class AdminTopic extends AdminController{
        public function topicList($limit=LIMIT, $offset=0)
        {
            //Yêu cầu model thực hiện
            $admintopicmodel=new AdminTopicModel;
            $data=$admintopicmodel->topicList($limit,$offset);
            //Gửi dữ liệu cho view

            $this->loadAdminView('adminmaster1','admintopic/topicList',$data);

        }

        public function topicListInTrash($limit=LIMIT, $offset=0)
        {
            //Yêu cầu model thực hiện
            $admintopicmodel=new AdminTopicModel;
            $data=$admintopicmodel->topicListInTrash($limit,$offset);
            //Gửi dữ liệu cho view

            $this->loadAdminView('adminmaster1','admintopic/topiclistintrash',$data);

        }

        public function topicToggleTrash($topicId)
        {
           //Yêu cầu model thực hiện
           $admintopicmodel=new AdminTopicModel;
           $data=$admintopicmodel->toggleTrash($topicId);
        }

        public function topicToggleStatus($topicId)
        {
            //Yêu cầu model thực hiện
           $admintopicmodel=new AdminTopicModel;
           $data=$admintopicmodel->toggleStatus($topicId);
        }

        public function topicAdd()
        {
            //Xử lý dữ liệu nhận được
            if(isset($_POST['submit'])){
                $admintopicmodel=new AdminTopicModel;
                $admintopicmodel->doAddTopic();
            }
            
            $this->loadAdminView('adminmaster1','admintopic/topicAdd',[]);
        }

        public function UpdateTopic($topicId)
        {
            //Xử lý dữ liệu nhận được
            $admintopicmodel=new AdminTopicModel;
            if(isset($_POST['submit'])){
                $admintopicmodel->doUpdateTopic($topicId);
            }
            //Hiển thị form Update
            $data['oldtopic']=$admintopicmodel->get(['topicId'=>$topicId]);
            $this->loadAdminView('adminmaster1','admintopic/updatetopic',$data);   
        }

        public function topicDelete($topicId)
        {
            $admintopicmodel=new AdminTopicModel;
            $data=$admintopicmodel->topicDelete($topicId);
        }
    }
?>