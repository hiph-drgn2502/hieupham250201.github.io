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
  $products=$data['products'];
  $paging=$data['paging'];
?>
<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <table class="table table-hover">
        <thead>
          <tr>
            <th>STT</th>
            <th>Product Id</th>
            <th>Product Image</th> 
            <th>Product Name</th>
            <th>Status</th>
            <th>Price</th>
            <th>Sale Price</th>
            <th>Trash</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $i=1;
           foreach($products as $p){?>
            <tr>
              <td><?php echo $i++?></td>
              <td><?php echo $p['productid']?></td>
              <td><img src="<?php echo BASE_URL; ?>public/upload/<?php echo $p['image'] ?>"></td>
              <td class="text-danger"> <?php echo $p['productName']?></td>
              <td><a href="<?php echo BASE_URL ?>adminproduct/productToggleStatus/<?php echo $p['productid']?>"><?php if($p['status']==1){ echo '<i class="fa fa-check text-primary"></i>';} else echo '<i class="fa fa-times text-danger"></i>'?></a></td>
              <td><?php echo $p['price']?></td>
              <td><?php echo $p['saleprice']?></td>
              <td class="text-danger"> <?php echo $p['trash']?></td>
              <td><a href="<?php echo BASE_URL?>adminproduct/productToggleTrash/<?php echo $p['productid']?>" onclick="return confirm('Bạn có muốn chắc xóa sản phẩm này ?')"><i class="fa fa-trash-o text-danger"></i></a>
                |<a href="<?php echo BASE_URL?>adminproduct/updateproduct/<?php echo $p['productid']?>"><i class="fa fa-wrench text-primary"></i></a></td>
            </tr>
          <?php }?>
        </tbody>
      </table>
      <?php $paging->createLinks();?>
    </div>
  </div>
</div>