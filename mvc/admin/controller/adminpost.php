<?php
    class AdminPost extends AdminController{
        public function postList($limit=LIMIT, $offset=0)
        {
            //Yêu cầu model thực hiện
            $adminpostmodel=new AdminPostModel;
            $data=$adminpostmodel->postList($limit,$offset);
            //Gửi dữ liệu cho view

            $this->loadAdminView('adminmaster1','adminpost/postList',$data);

        }

        public function postListInTrash($limit=LIMIT, $offset=0)
        {
            //Yêu cầu model thực hiện
            $adminpostmodel=new AdminPostModel;
            $data=$adminpostmodel->postListInTrash($limit,$offset);
            //Gửi dữ liệu cho view

            $this->loadAdminView('adminmaster1','adminpost/postlistintrash',$data);

        }

        public function postToggleTrash($postId)
        {
           //Yêu cầu model thực hiện
           $adminpostmodel=new AdminPostModel;
           $data=$adminpostmodel->toggleTrash($postId);
        }

        public function postToggleStatus($postId)
        {
            //Yêu cầu model thực hiện
           $adminpostmodel=new AdminPostModel;
           $data=$adminpostmodel->toggleStatus($postId);
        }

        public function postAdd()
        {
            //Xử lý dữ liệu nhận được
            if(isset($_POST['submit'])){
                $adminpostmodel=new AdminPostModel;
                $adminpostmodel->doAddPost();
            }
            //Hiển thị form Add
            $topicmodel = new AdminTopicModel;
            $data['topics']=$topicmodel->getAll(['trash'=>0, 'status'=>1]);
            $this->loadAdminView('adminmaster1','adminpost/postAdd',$data);
        }

        public function UpdatePost($postId)
        {
            //Xử lý dữ liệu nhận được
            $adminpostmodel=new AdminPostModel;
            if(isset($_POST['submit'])){
                $adminpostmodel->doUpdatePost($postId);
            }
            //Hiển thị form Update
            $topicmodel = new AdminTopicModel;
            $data['topics']=$topicmodel->getAll(['trash'=>0, 'status'=>1]);
            $data['oldpost']=$adminpostmodel->get(['postId'=>$postId]);
            $this->loadAdminView('adminmaster1','adminpost/updatepost',$data);   
        }

        public function postDelete($postId)
        {
            $adminpostmodel=new AdminPostModel;
            $data=$adminpostmodel->postDelete($postId);
        }
    }
?>