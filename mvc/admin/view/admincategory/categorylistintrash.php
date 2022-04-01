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
  $cats=$data['cats'];
  $paging=$data['paging'];
?>
<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <table class="table table-hover">
        <thead>
          <tr>
            <th>STT</th>
            <th>Category Id</th> 
            <th>Category Name</th>
            <th>Status</th>
            <th>Trash</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $i=1;
           foreach($cats as $c){?>
            <tr>
              <td><?php echo $i++?></td>
              <td><?php echo $c['catId']?></td>
              <td class="text-danger"> <?php echo $c['catName']?></td>
              <td><a href="<?php echo BASE_URL ?>admincategory/categoryToggleStatus/<?php echo $c['catId']?>"><?php if($c['status']==1){ echo '<i class="fa fa-check text-primary"></i>';} else echo '<i class="fa fa-times text-danger"></i>'?></a></td>
              <td class="text-danger"> <?php echo $c['trash']?></td>
              <td><a href="<?php echo BASE_URL?>admincategory/categoryDelete/<?php echo $c['catId']?>" onclick="return confirm('Bạn có muốn chắc xóa vĩnh viễn nhóm sản phẩm này ?')"><i class="fa fa-times-circle text-danger"></i></a>
                |<a href="<?php echo BASE_URL?>admincategory/categoryToggleTrash/<?php echo $c['catId']?>"><i class="fa fa-undo text-primary"></i></a></td>
            </tr>
          <?php }?>
        </tbody>
      </table>
      <?php $paging->createLinks();?>
    </div>
  </div>
</div>