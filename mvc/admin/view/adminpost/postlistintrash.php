<div class="row button btn-warning">
  <?php
    if(!empty($_SESSION['msg'])){
      echo $_SESSION['msg'];
      unset($_SESSION['msg']);
    }
    
  ?>
</div>
<div class="row button btn-warning">
  <?php if(!empty($data['msg'])) echo $data['msg']; ?>
</div>
<?php 
  $posts=$data['posts'];
  $paging=$data['paging'];
?>
<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <table class="table table-hover">
        <thead>
          <tr>
            <th>STT</th>
            <th>Post Id</th>
            <th>Post Image</th> 
            <th>Post Title</th>
            <th>Status</th>
            <th>Create By</th>
            <th>Trash</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $i=1;
           foreach($posts as $post){?>
            <tr>
              <td><?php echo $i++?></td>
              <td><?php echo $post['postId']?></td>
              <td><img src="<?php echo BASE_URL; ?>public/upload/<?php echo $post['image'] ?>"></td>
              <td class="text-danger"> <?php echo $post['postTitle']?></td>
              <td><a href="<?php echo BASE_URL ?>adminpost/postToggleStatus/<?php echo $post['postId']?>"><?php if($post['status']==1){ echo '<i class="fa fa-check text-primary"></i>';} else echo '<i class="fa fa-times text-danger"></i>'?></a></td>
              <td><?php echo $post['createBy']?></td>
              <td class="text-danger"> <?php echo $post['trash']?></td>
              <td><a href="<?php echo BASE_URL?>adminpost/postDelete/<?php echo $post['postId']?>" onclick="return confirm('Bạn có muốn chắc xóa vĩnh viễn bài viết này ?')"><i class="fa fa-times-circle text-danger"></i></a>
                |<a href="<?php echo BASE_URL?>adminpost/postToggleTrash/<?php echo $post['postId']?>"><i class="fa fa-undo text-primary"></i></a></td>
            </tr>
          <?php }?>
        </tbody>
      </table>
      <?php $paging->createLinks();?>
    </div>
  </div>
</div>