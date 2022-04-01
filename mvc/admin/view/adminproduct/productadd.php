
<?php
    $cats=$data['cats'];
    $collections=$data['collections'];
?>
<div class="col-md-9 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Add Product</h4>
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
                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Product Name" name="inputProductName" required> 
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail3">Alias</label>
                    <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Alias" name="inputAlias">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword4">Category Name</label>
                    <div class="col-sm-9">
                        <select class="form-control" name="inputCatId">
                            <?php foreach($cats as $cat){?>
                                <option value="<?php echo $cat['catId']?>"><?php echo $cat['catName']?></option>
                            <?php }?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword4">Collection Name</label>
                    <div class="col-sm-9">
                        <select class="form-control" name="inputCollectionId">
                            <?php foreach($collections as $collection){?>
                                <option value="<?php echo $collection['collectionId']?>"><?php echo $collection['collectionName']?></option>
                            <?php }?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleTextarea1">Detail Product</label>
                    <textarea class="form-control" id="ckeditor" rows="10" name="inputDetail" required cols="80"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputCity1">Price</label>
                    <input type="number" class="form-control" id="exampleInputCity1" placeholder="Price" name="inputPrice" max="3000" min="1" step="0.01">
                </div>
                <div class="form-group">
                    <label for="exampleInputCity1">Sale Price</label>
                    <input type="number" class="form-control" id="exampleInputCity1" placeholder="Price" name="inputSalePrice" max="3000" min="1" step="0.01">
                </div>
                <div class="form-group">
                    <label>Image</label>
                    <div class="col-sm-9">
                        <input type="file" name="inputFileUpload">
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword4">Status</label>
                    <div class="col-sm-9">
                        <select class="form-control form-control-lg" id="exampleFormControlSelect1" name="inputStatus">
                            <option value="0">Ẩn</option>
                            <option value="1">Hiện</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-success mr-2" name="submit" value="Submit">Submit</button>
                <button type="reset" class="btn btn-light" name="reset" value="Reset">Reset</button>
            </form>
        </div>
    </div>
</div>