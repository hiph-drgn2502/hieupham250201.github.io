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
  $topics=$data['topics'];
  $paging=$data['paging'];
?>
<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <table class="table table-hover">
        <thead>
          <tr>
            <th>STT</th>
            <th>Topic Id</th> 
            <th>Topic Name</th>
            <th>Status</th>
            <th>Trash</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $i=1;
           foreach($topics as $t){?>
            <tr>
              <td><?php echo $i++?></td>
              <td><?php echo $t['topicId']?></td>
              <td class="text-danger"> <?php echo $t['topicName']?></td>
              <td><a href="<?php echo BASE_URL ?>admintopic/topicToggleStatus/<?php echo $t['topicId']?>"><?php if($t['status']==1){ echo '<i class="fa fa-check text-primary"></i>';} else echo '<i class="fa fa-times text-danger"></i>'?></a></td>
              <td class="text-danger"> <?php echo $t['trash']?></td>
              <td><a href="<?php echo BASE_URL?>admintopic/topicToggleTrash/<?php echo $t['topicId']?>" onclick="return confirm('Bạn có muốn chắc xóa chủ đề này ?')"><i class="fa fa-trash-o text-danger"></i></a>
                |<a href="<?php echo BASE_URL?>admintopic/updatetopic/<?php echo $t['topicId']?>"><i class="fa fa-wrench text-primary"></i></a></td>
            </tr>
          <?php }?>
        </tbody>
      </table>
      <?php $paging->createLinks();?>
    </div>
  </div>
</div>