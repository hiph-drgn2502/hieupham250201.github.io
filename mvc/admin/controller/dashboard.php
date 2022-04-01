<?php
    class Dashboard extends AdminController{
        public function home()
        {
            $this->loadAdminView('adminmaster1','dashboard/home',[]);
        }
    }
?>