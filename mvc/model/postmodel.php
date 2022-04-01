<?php
    class PostModel extends BaseModel{
        protected $table=DB_PREFIX.'post';
        protected $key='postId';

        public function postByTopic($topicAlias,$limit=LIMIT,$offset=0)
        {
            //Lấy nhóm chủ đề
            $topicmodel=new TopicModel;
            $topic=$topicmodel->get(['topicAlias'=>$topicAlias]);
            //Lấy sản phẩm trong nhóm
            $data['topic']=$topic;
            $data['posts'] = $this->getAllLimit(['trash'=>0, 'status'=>1, 'topicId'=>$topic['topicId']], $limit, $offset);
            //Chuẩn bị dữ liệu để phân trang
            $totalRecords=count($this->getAll(['trash'=>0, 'status'=>1, 'topicId'=>$topic['topicId']]));
            $data['paging'] = new Paging('post/postByTopic/'.$topicAlias.'/', $totalRecords, $limit, $offset);
            return  $data;
        }

        public function ShowPost($alias)
        {
            //Lấy 1 sp có alias = productAlias
            $data['currentpost'] = $this->get(['alias'=>$alias]);
            //Lấy các sản phẩm cùng nhóm
            $data['samePosts'] = $this->getAll(['trash'=>0, 'status'=>1, 'topicId'=>$data['currentpost']['topicId']]);
            return  $data;
        }
    }
?>