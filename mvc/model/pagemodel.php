<?php
    class PageModel extends BaseModel{
        protected $table=DB_PREFIX.'page';
        protected $key='papgeId';

        public function showPage($pageId)
        {
            //Lấy nội dung
            $data['page']=$this->get(['status'=>1,'trash'=>0,'pageId'=>$pageId]);
            return $data;
        }
    }
?>