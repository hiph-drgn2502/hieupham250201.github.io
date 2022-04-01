<?php 
    class Auth extends Controller{
        public function adminLogin(){
            //Xử lý dữ liệu gọi về
            if(isset($_POST['login'])){
                $authmodle=new AuthModel;
                $authmodle->adminLogin();
            }
            $this->loadView('master4','auth/adminlogin',[]);
        }
        
        public function adminLogout()
        {
            if(isset($_SESSION['admin'])){
                unset($_SESSION['admin']);
                unset($_SESSION['level']);
                unset($_SESSION['adminname']);
                unset($_SESSION['email']);
                header('Location:'.BASE_URL.'auth/adminlogin');
                exit;
            }
        }
    }
?>