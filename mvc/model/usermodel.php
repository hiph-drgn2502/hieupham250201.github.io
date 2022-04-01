<?php
    class UserModel extends BaseModel{
        protected $table=DB_PREFIX.'user';
        protected $field=['username','fullname','phone','pass','email','trash','status'];
        protected $key='userId';
        public function userlogin()
        {
            //Hứng dữ liệu
            $username=$_POST['inputUsername'];
            $password=md5(md5($_POST['inputPassword']));
            //Lấy User từ bản user
            $u=$this->get(['username'=>$username,'trash'=>0]);
            //Kiểm tra pass
            if(isset($u)&&($u['pass']==$password)){
                $_SESSION['username']=$username;
                $_SESSION['fullname']=$u['fullname'];
                $_SESSION['userId']=$u['userId'];
                header('Location:'.BASE_URL.'product/home');
                exit;
            }else{
                $_SESSION['msg']='Đăng nhập thất bại !!!';
                header('Location:'.BASE_URL.'user/userlogin');
                exit;
            }
        }

        public function addAccout()
        {
            //Lấy dữ liệu nhóm sản phẩm mới
            $newuser['username']=$_POST['inputUserName'];
            $newuser['fullname']=$_POST['inputFullName'];
            $newuser['phone']=$_POST['inputPhone'];
            $newuser['email']=$_POST['inputEmail'];
            $newuser['pass']=md5(md5($_POST['inputPassword']));
            $newuser['trash']=0;
            $newuser['status']=$_POST['inputStatus'];

            //Kiểm lỗi
            $_SESSION['msg1']='';
            if($this->insert($newuser) ){
                $_SESSION['username']=$newuser['username'];
                $_SESSION['fullname']=$newuser['fullname'];
                $_SESSION['userId']=$newuser['userId'];
                header('Location:'.BASE_URL.'product/home');
            }else{
                $_SESSION['msg1'].='Tạo tài khoản thất bại !!!';
                header('Location:'.BASE_URL.'user/userlogin');
            }
        }
    }
?>