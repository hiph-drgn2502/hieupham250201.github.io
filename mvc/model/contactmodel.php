<?php
    class ContactModel extends BaseModel{

        protected $table=DB_PREFIX.'contact';
        protected $field=['customerId', 'email','title','content','trash','status'];
        protected $key='contactId';

        public function doAddContact()
        {
            $_SESSION['msg']='';
            //Hứng dữ liệu customer và đưa vào CSDL
            $newcustomer['userId']=0;
            $newcustomer['fullname']=$_POST['inputFullName'];
            $newcustomer['address']=null;
            $newcustomer['phone']=$_POST['inputPhone'];
            $newcustomer['email']=$_POST['inputEmail'];
            $newcustomer['trash']=0;

            $customermodel=new CustomerModel;
            if(!$customermodel->insert($newcustomer)){
                $_SESSION['msg'].='Lỗi trong quá trình xử lý';
            }

            //Lấy id của customer mới
            $sql="select * from ".DB_PREFIX."customer order by customerId DESC";
            $customerId=$this->queryFirst($sql)['customerId'];
            $customerEmail=$this->queryFirst($sql)['email'];

            //Hứng dữ liệu của contact và đưa vào CSDL
            $newcontact['customerId']=$customerId;
            $newcontact['email']=$customerEmail;
            $newcontact['title']=$_POST['inputTitle'];
            $newcontact['content']=$_POST['inputContent'];
            $newcontact['status']=1;
            $newcontact['trash']=0;

            $contactmodel=new ContactModel;
            if(!($contactmodel->insert($newcontact))){
                $_SESSION['msg'].='Lỗi trong quá trình xử lý';
            }

            if($_SESSION['msg']==''){
                $_SESSION['msg']="Cám ơn sự góp ý của bạn !!!";
            }
        }
    }
?>