<?php
    class AdminLinkModel extends AdminModel{
        protected $table=DB_PREFIX.'link';
        protected $field=['title','position','image','link','orders','trash','status'];
        protected $key='id';
        //Các function cần thiết
        public function linkList($limit, $offset)
        {
            //Lấy danh sách liên kết
            $data['links']=$this->getAllLimit(['trash'=>0],$limit,$offset);
            //Tính tổng số liên kết
            $totalRecords=count($this->getAll(['trash'=>0]));
            //Chuẩn bị Paging
            $data['paging']=new Paging('adminlink/linkList/',$totalRecords,$limit,$offset);
            
            return $data;
        }

        public function linkListInTrash($limit, $offset)
        {
            //Lấy danh sách liên kết
            $data['links']=$this->getAllLimit(['trash'=>1],$limit,$offset);
            //Tính tổng số liên kết
            $totalRecords=count($this->getAll(['trash'=>1]));
            //Chuẩn bị Paging
            $data['paging']=new Paging('adminlink/linkListInTrash/',$totalRecords,$limit,$offset);
            
            return $data;
        }

        public function toggleTrash($id)
        {
            if($this->toggle('trash',$id)){
                $_SESSION['msg']='Thực hiện thành công !!!';
            }
            else{
                $_SESSION['msg']='Thực hiện thất bại !!!';
            }
            header("location:".BASE_URL."adminlink/linkList/".LIMIT."/0");
        }

        public function toggleStatus($id)
        {
            if($this->toggle('status',$id)){
                $_SESSION['msg']='Thực hiện thành công !!!';
            }
            else{
                $_SESSION['msg']='Thực hiện thất bại !!!';
            }
            header("location:".BASE_URL."adminlink/linkList/".LIMIT."/0");
        }

        public function doAddLink()
        {
            //Lấy dữ liệu liên kết mới
            $newlink['title']=$_POST['inputTitle'];
            $newlink['position']=$_POST['inputPosition'];
            $newlink['image']=basename($_FILES['inputFileUpload']['name']);
            $newlink['link']=$_POST['inputLink'];
            $newlink['orders']=$_POST['inputOrders'];
            $newlink['trash']=0;
            $newlink['status']=$_POST['inputStatus'];
            
            //Kiểm lỗi
            $helper=new Helper;
            $uploadSuccess=$helper->doUpload('inputFileUpload');
            if($uploadSuccess){
                if($this->insert($newlink)){
                    $_SESSION['msg'].='Thêm liên kết thành công !!!';
                }else{
                    $_SESSION['msg'].='Thêm liên kết thất bại !!!';
                }
            }
        }

        public function doUpdateLink($id)
        {
            //Lấy dữ liệu liên kết mới
            $newlink['title']=$_POST['inputTitle'];
            $newlink['position']=$_POST['inputPosition'];
            $newlink['link']=$_POST['inputLink'];
            $newlink['orders']=$_POST['inputOrders'];
            $newlink['trash']=$_POST['inputTrash'];
            $newlink['status']=$_POST['inputStatus'];
            
            //Kiểm lỗi
            $helper=new Helper;
            if($_FILES['inputFileUpload']['name']!=''){
                $_SESSION['msg'].="file up lên:".$_FILES['inputFileUpload']['name'];
                $uploadSuccess=$helper->doUpload('inputFileUpload');
                if($uploadSuccess){
                    $newlink['image']=$_FILES['inputFileUpload']['name'];
                    if($this->update($newlink,$id)){
                        $_SESSION['msg'].='Cập nhật liên kết thành công !!!';
                    }else{
                        $_SESSION['msg'].='Cập nhật liên kết thất bại !!!';
                    }
                    header("Location:".BASE_URL."adminlink/linkList");
                    exit;
                }
            }else{
                if($this->update($newlink,$id)){
                    $_SESSION['msg'].='Cập nhật liên kết thành công !!!';
                }else{
                    $_SESSION['msg'].='Cập nhật liên kết thất bại !!!';
                }
                header("Location:".BASE_URL."adminlink/linkList");
                exit;
            }
        }

        public function linkDelete($id)
        {
            if($this->delete($id)){
                $_SESSION['msg']='Thực hiện thành công !!!';
            }
            else{
                $_SESSION['msg']='Thực hiện thất bại !!!';
            }
            header("location:".BASE_URL."adminlink/linkListInTrash/".LIMIT."/0");
        }
    }
?>