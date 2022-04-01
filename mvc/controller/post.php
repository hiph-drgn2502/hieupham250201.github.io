<?php
    class Post extends UserController{
        private $postmodel;

        function __construct()
        {
            $this->postmodel=new PostModel;
        }

        public function postByTopic($topicAlias,$limit=LIMIT,$offset=0)
        {
            //Gọi model chuẩn bị dữ liệu
            $data=$this->postmodel->postByTopic($topicAlias,$limit,$offset);
            //Đưa dữ liệu vào view
            $this->loadView('master3','post/postbytopic',$data);
        }

        public function ShowPost($alias)
        {
            //Gọi model chuẩn bị dữ liệu
            $data=$this->postmodel->ShowPost($alias);
            //Đưa dữ liệu vào view
            $this->loadView('master3','post/showpost',$data);
        }
    }
?>