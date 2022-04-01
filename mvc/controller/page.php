<?php
    class Page extends UserController{

        public function home(){
            echo "Day la trang home cua bai viet";
        }

        public function showPage($pageId){
            //Gọi model chuẩn bị dữ liệu
            $pagemodel = new PageModel;
            $data=$pagemodel->showPage($pageId);
            $this->loadview('master3','page/showpage',$data);
        }

    }
?>