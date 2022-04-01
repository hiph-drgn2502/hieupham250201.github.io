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
  $pages=$data['pages'];
  $paging=$data['paging'];
?>
<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <table class="table table-hover">
        <thead>
          <tr>
            <th>STT</th>
            <th>Page Id</th> 
            <th>Title</th>
            <th>Create By</th>
            <th>Status</th>
            <th>Trash</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $i=1;
           foreach($pages as $p){?>
            <tr>
              <td><?php echo $i++?></td>
              <td><?php echo $p['pageId']?></td>
              <td class="text-danger"> <?php echo $p['title']?></td>
              <td class="text-danger"> <?php echo $p['createBy']?></td>
              <td><a href="<?php echo BASE_URL ?>adminpage/pageToggleStatus/<?php echo $p['pageId']?>"><?php if($p['status']==1){ echo '<i class="fa fa-check text-primary"></i>';} else echo '<i class="fa fa-times text-danger"></i>'?></a></td>
              <td class="text-danger"> <?php echo $p['trash']?></td>
              <td><a href="<?php echo BASE_URL?>adminpage/pageDelete/<?php echo $p['pageId']?>" onclick="return confirm('Bạn có muốn chắc xóa vĩnh viễn thông tin web này ?')"><i class="fa fa-times-circle text-danger"></i></a>
                |<a href="<?php echo BASE_URL?>adminpage/pageToggleTrash/<?php echo $p['pageId']?>"><i class="fa fa-undo text-primary"></i></a></td>
            </tr>
          <?php }?>
        </tbody>
      </table>
      <?php $paging->createLinks();?>
    </div>
  </div>
</div>