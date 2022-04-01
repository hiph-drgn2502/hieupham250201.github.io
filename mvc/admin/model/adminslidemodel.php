<?php
    class AdminSlideModel extends AdminModel{
        protected $table=DB_PREFIX.'image';
        protected $field=['title','image','imageName','position','trash','status'];
        protected $key='id';
        //Các function cần thiết
        public function slideList($limit, $offset)
        {
            //Lấy danh sách hình ảnh
            $data['slides']=$this->getAllLimit(['trash'=>0],$limit,$offset);
            //Tính tổng số hình ảnh
            $totalRecords=count($this->getAll(['trash'=>0]));
            //Chuẩn bị Paging
            $data['paging']=new Paging('adminslide/slideList/',$totalRecords,$limit,$offset);
            
            return $data;
        }

        public function slideListInTrash($limit, $offset)
        {
            //Lấy danh sách hình ảnh
            $data['slides']=$this->getAllLimit(['trash'=>1],$limit,$offset);
            //Tính tổng số sản phẩm
            $totalRecords=count($this->getAll(['trash'=>1]));
            //Chuẩn bị Paging
            $data['paging']=new Paging('adminslide/slideListInTrash/',$totalRecords,$limit,$offset);
            
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
            header("location:".BASE_URL."adminslide/slideList/".LIMIT."/0");
        }

        public function toggleStatus($id)
        {
            if($this->toggle('status',$id)){
                $_SESSION['msg']='Thực hiện thành công !!!';
            }
            else{
                $_SESSION['msg']='Thực hiện thất bại !!!';
            }
            header("location:".BASE_URL."adminslide/slideList/".LIMIT."/0");
        }

        public function doAddSlide()
        {
            //Lấy dữ liệu hình ảnh mới
            $newslide['title']=$_POST['inputTitle'];
            $newslide['image']=basename($_FILES['inputFileUpload']['name']);
            $newslide['imageName']=$_POST['inputImageName'];
            $newslide['position']=$_POST['inputPosition'];
            $newslide['trash']=0;
            $newslide['status']=$_POST['inputStatus'];
            
            //Kiểm lỗi
            $helper=new Helper;
            $uploadSuccess=$helper->doUpload('inputFileUpload');
            if($uploadSuccess){
                if($this->insert($newslide)){
                    $_SESSION['msg'].='Thêm hình ảnh thành công !!!';
                }else{
                    $_SESSION['msg'].='Thêm hình ảnh thất bại !!!';
                }
            }
        }

        public function doUpdateSlide($id)
        {
            //Lấy dữ liệu sản phẩm mới
            $newslide['title']=$_POST['inputTitle'];
            $newslide['imageName']=$_POST['inputImageName'];
            $newslide['position']=$_POST['inputPosition'];
            $newslide['trash']=$_POST['inputTrash'];
            $newslide['status']=$_POST['inputStatus'];
            
            //Kiểm lỗi
            $helper=new Helper;
            if($_FILES['inputFileUpload']['name']!=''){
                $_SESSION['msg'].="file up lên:".$_FILES['inputFileUpload']['name'];
                $uploadSuccess=$helper->doUpload('inputFileUpload');
                if($uploadSuccess){
                    $newslide['image']=$_FILES['inputFileUpload']['name'];
                    if($this->update($newslide,$id)){
                        $_SESSION['msg'].='Cập nhật hình ảnh thành công !!!';
                    }else{
                        $_SESSION['msg'].='Cập nhật hình ảnh thất bại !!!';
                    }
                    header("Location:".BASE_URL."adminslide/slideList");
                    exit;
                }
            }else{
                if($this->update($newslide,$id)){
                    $_SESSION['msg'].='Cập nhật hình ảnh thành công !!!';
                }else{
                    $_SESSION['msg'].='Cập nhật hình ảnh thất bại !!!';
                }
                header("Location:".BASE_URL."adminslide/slideList");
                exit;
            }
        }

        public function slideDelete($id)
        {
            if($this->delete($id)){
                $_SESSION['msg']='Thực hiện thành công !!!';
            }
            else{
                $_SESSION['msg']='Thực hiện thất bại !!!';
            }
            header("location:".BASE_URL."adminslide/slideListInTrash/".LIMIT."/0");
        }
    }
?>