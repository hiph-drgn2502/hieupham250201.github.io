
<?php
    $oldlink=$data['oldlink'];
?>
<div class="col-md-9 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Update Link</h4>
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
                    <label for="exampleInputName1">Title</label>
                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Title" name="inputTitle" required value="<?php echo $oldlink['title']?>"> 
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword4">Position</label>
                    <div class="col-sm-9">
                        <select class="form-control form-control-lg" id="exampleFormControlSelect1" name="inputPosition">
                            <option value="golbalnav" <?php if($oldlink['position']=="golbalnav") echo "selected"?>>golbalnav</option>
                            <option value="bottommenu1" <?php if($oldlink['position']=="bottommenu1") echo "selected"?>>bottommenu1</option>
                            <option value="bottommenu2" <?php if($oldlink['position']=="bottommenu2") echo "selected"?>>bottommenu2</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label>Image upload</label>
                    <div class="col-sm-9">
                        <input type="file" name="inputFileUpload">(Hình cũ: <?php echo $oldlink['image']?>)
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Link</label>
                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Link" name="inputLink" value="<?php echo $oldlink['link']?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Orders</label>
                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Orders" name="inputOrders" value="<?php echo $oldlink['orders']?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword4">Status</label>
                    <div class="col-sm-9">
                        <select class="form-control form-control-lg" id="exampleFormControlSelect1" name="inputStatus">
                            <option value="0"<?php if($oldlink['status']==0) echo "selected"?>>Ẩn</option>
                            <option value="1"<?php if($oldlink['status']==1) echo "selected"?>>Hiện</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword4">Trash</label>
                    <div class="col-sm-9">
                        <select class="form-control form-control-lg" id="exampleFormControlSelect1" name="inputTrash">
                            <option value="0"<?php if($oldlink['trash']==0) echo "selected"?>>Không</option>
                            <option value="1"<?php if($oldlink['trash']==1) echo "selected"?>>Trash</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-success mr-2" name="submit" value="Submit">Submit</button>
                <button type="reset" class="btn btn-light" name="reset" value="Reset">Reset</button>
            </form>
        </div>
    </div>
</div>