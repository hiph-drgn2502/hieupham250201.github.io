<?php
    class Contact extends UserController{
        public function addContact()
        {
            //Xử lý dữ liệu
            if(isset($_POST['submit'])){
                $contactmodel=new ContactModel;
                $contactmodel->doAddContact();
            }
            $this->loadView('master3','contact/addContact',[]);
        }
    }
?>