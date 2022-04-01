
<?php
    $cats=$data['cats'];
    $collections=$data['collections'];
    $oldproduct=$data['oldproduct'];
?>
<div class="col-md-9 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Update Product</h4>
            <div class="row btn-success">
                <?php
                    if(isset($_SESSION['msg'])){
                        echo $_SESSION['msg'];
                        unset($_SESSION['msg']);
                    }
                ?>
            </div>
            <form class="forms-sample" method="post" action="" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleInputName1">Product Name</label>
                    <input type="text" class="form-control" id="exampleInputName1"name="inputProductName" required value="<?php echo $oldproduct['productName']?>"> 
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail3">Alias</label>
                    <input type="text" class="form-control" id="exampleInputName1" name="inputAlias" value="<?php echo $oldproduct['alias']?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword4">Category Name</label>
                    <div class="col-sm-9">
                        <select class="form-control" name="inputCatId">
                            <?php foreach($cats as $cat){?>
                                <option value="<?php echo $cat['catId']?>"<?php if($oldproduct['catId']==$cat['catId']) echo "selected"?>><?php echo $cat['catName']?> </option>
                            <?php }?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword4">Collection Name</label>
                    <div class="col-sm-9">
                        <select class="form-control" name="inputCollectionId">
                            <?php foreach($collections as $collection){?>
                                <option value="<?php echo $collection['collectionId']?>"<?php if($oldproduct['collectionid']==$collection['collectionId']) echo "selected"?>><?php echo $collection['collectionName']?> </option>
                            <?php }?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleTextarea1">Detail Product</label>
                    <textarea class="form-control" id="ckeditor" rows="10" name="inputDetail" required cols="80"><?php echo $oldproduct['detail']?></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputCity1">Price</label>
                    <input type="number" class="form-control" id="exampleInputCity1" placeholder="Price" name="inputPrice" max="3000" min="1" step="0.01" value="<?php echo $oldproduct['price']?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputCity1">Sale Price</label>
                    <input type="number" class="form-control" id="exampleInputCity1" placeholder="Price" name="inputSalePrice" max="3000" min="1" step="0.01"value="<?php echo $oldproduct['saleprice']?>">
                </div>
                <div class="form-group">
                    <label>File upload</label>
                    <div class="col-sm-9">
                        <input type="file" name="inputFileUpload">(Hình cũ: <?php echo $oldproduct['image']?>)
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword4">Status</label>
                    <div class="col-sm-9">
                        <select class="form-control form-control-lg" id="exampleFormControlSelect1" name="inputStatus">
                            <option value="0"<?php if($oldproduct['status']==0) echo "selected"?>>Ẩn</option>
                            <option value="1"<?php if($oldproduct['status']==1) echo "selected"?>>Hiện</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword4">Trash</label>
                    <div class="col-sm-9">
                        <select class="form-control form-control-lg" id="exampleFormControlSelect1" name="inputTrash">
                            <option value="0"<?php if($oldproduct['trash']==0) echo "selected"?>>Không</option>
                            <option value="1"<?php if($oldproduct['trash']==1) echo "selected"?>>Trash</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-success mr-2" name="submit" value="Submit">Submit</button>
                <button type="reset" class="btn btn-light" name="reset" value="Reset">Reset</button>
            </form>
        </div>
    </div>
</div>