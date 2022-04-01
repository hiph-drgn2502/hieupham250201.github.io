<?php 
    class AdminPostModel extends AdminModel{
        protected $table=DB_PREFIX.'post';
        protected $field=['postTitle', 'alias','topicId','image','summary','trash','status','detail','createBy','createDate','updateDate'];
        protected $key='postId';
        //Các function cần thiết
        public function postList($limit, $offset)
        {
            //Lấy danh sách bài viết
            $data['posts']=$this->getAllLimit(['trash'=>0],$limit,$offset);
            //Tính tổng số bài viết
            $totalRecords=count($this->getAll(['trash'=>0]));
            //Chuẩn bị Paging
            $data['paging']=new Paging('adminpost/postList/',$totalRecords,$limit,$offset);
            
            return $data;
        }

        public function postListInTrash($limit, $offset)
        {
            //Lấy danh sách bài viết
            $data['posts']=$this->getAllLimit(['trash'=>1],$limit,$offset);
            //Tính tổng số bài viết
            $totalRecords=count($this->getAll(['trash'=>1]));
            //Chuẩn bị Paging
            $data['paging']=new Paging('adminpost/postListInTrash/',$totalRecords,$limit,$offset);
            
            return $data;
        }

        public function toggleTrash($postId)
        {
            if($this->toggle('trash',$postId)){
                $_SESSION['msg']='Thực hiện thành công !!!';
            }
            else{
                $_SESSION['msg']='Thực hiện thất bại !!!';
            }
            header("location:".BASE_URL."adminpost/postList/".LIMIT."/0");
        }

        public function toggleStatus($postId)
        {
            if($this->toggle('status',$postId)){
                $_SESSION['msg']='Thực hiện thành công !!!';
            }
            else{
                $_SESSION['msg']='Thực hiện thất bại !!!';
            }
            header("location:".BASE_URL."adminpost/postList/".LIMIT."/0");
        }

        public function doAddPost()
        {
            //Cài đặt thời gian ở Việt Nam
            date_default_timezone_set('Asia/Ho_Chi_Minh');

            //Lấy dữ liệu bài viết mới
            $newpost['postTitle']=$_POST['inputPostTitle'];
            $newpost['alias']=$_POST['inputAlias'];
            $newpost['topicId']=$_POST['inputTopicId'];
            $newpost['image']=basename($_FILES['inputFileUpload']['name']);
            $newpost['summary']=$_POST['inputSummary'];
            $newpost['trash']=0;
            $newpost['status']=$_POST['inputStatus'];
            $newpost['detail']=$_POST['inputDetail'];
            $newpost['createBy']=$_POST['inputCreateBy'];
            $newpost['createDate']=date('Y-m-d H:i:s');
            $newpost['updateDate']=null;

            //Tạo chuỗi alias
            $helper=new Helper;
            if($newpost['alias']==''){
                $newpost['alias']=$helper->to_alias($newpost['postTitle']);
            }
            //Kiểm lỗi
            $uploadSuccess=$helper->doUpload('inputFileUpload');
            if($uploadSuccess){
                if($this->insert($newpost)){
                    $_SESSION['msg'].='Thêm bài viết thành công !!!';
                }else{
                    $_SESSION['msg'].='Thêm bài viết thất bại !!!';
                }
            }
        }

        public function doUpdatePost($postId)
        {
            //Cài đặt thời gian ở Việt Nam
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            
            //Lấy dữ liệu bài viết mới
            $newpost['postTitle']=$_POST['inputPostTitle'];
            $newpost['alias']=$_POST['inputAlias'];
            $newpost['topicId']=$_POST['inputTopicId'];
            $newpost['summary']=$_POST['inputSummary'];
            $newpost['trash']=$_POST['inputTrash'];
            $newpost['status']=$_POST['inputStatus'];
            $newpost['detail']=$_POST['inputDetail'];
            $newpost['createBy']=$_POST['inputCreateBy'];
            $newpost['createDate']=$_POST['inputCreateDate'];
            $newpost['updateDate']=date('Y-m-d H:i:s');
            //Tạo chuỗi alias
            $helper=new Helper;
            if($newpost['alias']==''){
                $newpost['alias']=$helper->to_alias($newpost['postTitle']);
            }
            //Kiểm lỗi
            if($_FILES['inputFileUpload']['name']!=''){
                $_SESSION['msg'].="file up lên:".$_FILES['inputFileUpload']['name'];
                $uploadSuccess=$helper->doUpload('inputFileUpload');
                if($uploadSuccess){
                    $newpost['image']=$_FILES['inputFileUpload']['name'];
                    if($this->update($newpost,$postId)){
                        $_SESSION['msg'].='Cập nhật bài viết thành công !!!';
                    }else{
                        $_SESSION['msg'].='Cập nhật bài viết thất bại !!!';
                    }
                    header("Location:".BASE_URL."adminpost/postList");
                    exit;
                }
            }else{
                if($this->update($newpost,$postId)){
                    $_SESSION['msg'].='Cập nhật bài viết thành công !!!';
                }else{
                    $_SESSION['msg'].='Cập nhật bài viết thất bại !!!';
                }
                header("Location:".BASE_URL."adminpost/postList");
                exit;
            }
        }

        public function postDelete($postId)
        {
            if($this->delete($postId)){
                $_SESSION['msg']='Thực hiện thành công !!!';
            }
            else{
                $_SESSION['msg']='Thực hiện thất bại !!!';
            }
            header("location:".BASE_URL."adminpost/postListInTrash/".LIMIT."/0");
        }
    }
?>