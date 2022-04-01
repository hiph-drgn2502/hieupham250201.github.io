<?php
    class Controller{
        public function home(){
            
            echo "Day la trang home cua controller";
        }
        protected function loadView($master, $viewname, $data){
            require_once PATH_TO_VIEW.strtolower($master).'.php';
        }
    }
?>