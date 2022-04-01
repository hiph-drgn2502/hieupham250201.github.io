<?php
    class AuthModel extends BaseModel{
        protected $table=DB_PREFIX.'admin';
        public function adminLogin()
        {
            //Hứng dữ liệu
            $username=$_POST['inputUsername'];
            $password=md5(md5($_POST['inputPassword']));
            //Lấy User từ bản admin
            $u=$this->get(['userName'=>$username,'trash'=>0]);
            //Kiểm tra pass
            if(isset($u)&&($u['pass']==$password)){
                $_SESSION['admin']=$username;
                $_SESSION['level']=$u['level'];
                $_SESSION['adminname']=$u['adminname'];
                $_SESSION['email']=$u['email'];
                header('Location:'.BASE_URL.'dashboard/home');
                exit;
            }else{
                $_SESSION['msg']='Đăng nhập thất bại !!!';
                header('Location:'.BASE_URL.'auth/adminlogin');
                exit;
            }
        }
    }
?>