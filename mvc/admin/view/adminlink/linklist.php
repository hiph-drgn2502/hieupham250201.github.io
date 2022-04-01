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
  $links=$data['links'];
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
            <th>Position</th>
            <th>Orders</th>
            <th>Status</th>
            <th>Trash</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $i=1;
           foreach($links as $l){?>
            <tr>
              <td><?php echo $i++?></td>
              <td><?php echo $l['id']?></td>
              <td class="text-danger"> <?php echo $l['title']?></td>
              <td class="text-danger"> <?php echo $l['position']?></td>
              <td class="text-danger"> <?php echo $l['orders']?></td>
              <td><a href="<?php echo BASE_URL ?>adminlink/linkToggleStatus/<?php echo $l['id']?>"><?php if($l['status']==1){ echo '<i class="fa fa-check text-primary"></i>';} else echo '<i class="fa fa-times text-danger"></i>'?></a></td>
              <td class="text-danger"> <?php echo $l['trash']?></td>
              <td><a href="<?php echo BASE_URL?>adminlink/linkToggleTrash/<?php echo $l['id']?>" onclick="return confirm('Bạn có muốn chắc xóa liên kết này ?')"><i class="fa fa-trash-o text-danger"></i></a>
                |<a href="<?php echo BASE_URL?>adminlink/updatelink/<?php echo $l['id']?>"><i class="fa fa-wrench text-primary"></i></a></td>
            </tr>
          <?php }?>
        </tbody>
      </table>
      <?php $paging->createLinks();?>
    </div>
  </div>
</div>