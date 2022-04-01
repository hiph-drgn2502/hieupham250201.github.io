<?php 
    class User extends Controller{
        public function userlogin(){
            //Xử lý dữ liệu gọi về
            if(isset($_POST['userlogin'])){
                $usermodel=new UserModel;
                $usermodel->userlogin();
            }else if(isset($_POST['submit'])){
                $usermodel=new UserModel;
                $usermodel->addAccout();
            }
            $this->loadView('master5','user/userlogin',[]);
        }

        public function userLogout()
        {
            if(isset($_SESSION['username'])){
                unset($_SESSION['username']);
                unset($_SESSION['fullname']);
                unset($_SESSION['userId']);
                header('Location:'.BASE_URL.'product/home');
                exit;
            }
        }

        // public function addAccout()
        // {
        //     if(isset($_POST['submit'])){
        //         $usermodel=new UserModel;
        //         $usermodel->addAccout();
        //     }
        //     $this->loadView('master5','user/userlogin',[]);
        // }
    }
?>