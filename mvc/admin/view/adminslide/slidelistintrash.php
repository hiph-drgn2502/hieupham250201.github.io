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
  $slides=$data['slides'];
  $paging=$data['paging'];
?>
<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <table class="table table-hover">
        <thead>
          <tr>
            <th>STT</th>
            <th>Id</th> 
            <th>Title</th>
            <th>Image</th>
            <th>Image Name</th>
            <th>Position</th>
            <th>Status</th>
            <th>Trash</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $i=1;
           foreach($slides as $s){?>
            <tr>
              <td><?php echo $i++?></td>
              <td><?php echo $s['id']?></td>
              <td class="text-danger"> <?php echo $s['title']?></td>
              <td><img src="<?php echo BASE_URL; ?>public/upload/<?php echo $s['image'] ?>"></td>
              <td class="text-danger"> <?php echo $s['imageName']?></td>
              <td class="text-danger"> <?php echo $s['position']?></td>
              <td><a href="<?php echo BASE_URL ?>adminslide/slideToggleStatus/<?php echo $s['id']?>"><?php if($s['status']==1){ echo '<i class="fa fa-check text-primary"></i>';} else echo '<i class="fa fa-times text-danger"></i>'?></a></td>
              <td class="text-danger"> <?php echo $s['trash']?></td>
              <td><a href="<?php echo BASE_URL?>adminslide/slideDelete/<?php echo $s['id']?>" onclick="return confirm('Bạn có muốn chắc xóa vĩnh viễn hình ảnh này ?')"><i class="fa fa-times-circle text-danger"></i></a>
                |<a href="<?php echo BASE_URL?>adminslide/slideToggleTrash/<?php echo $s['id']?>"><i class="fa fa-undo text-primary"></i></a></td>
            </tr>
          <?php }?>
        </tbody>
      </table>
      <?php $paging->createLinks();?>
    </div>
  </div>
</div>