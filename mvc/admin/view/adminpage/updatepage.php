
<?php
    $oldpage=$data['oldpage'];
?>
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Update Page</h4>
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
                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Title" name="inputTitle" required value="<?php echo $oldpage['title']?>"> 
                </div>
                <div class="form-group">
                    <label for="exampleTextarea1">Content</label>
                    <textarea class="form-control" id="ckeditor1" rows="10" name="inputContent" required cols="80"><?php echo $oldpage['content']?></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Create By</label>
                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Create By" name="inputCreateBy" value="<?php echo $oldpage['createBy']?>">
                </div>
                <div class="form-group" hidden="true">
                    <input type="text" class="form-control" id="exampleInputName1" name="inputCreateDate" value="<?php echo $oldpage['createDate']?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword4">Status</label>
                    <div class="col-sm-9">
                        <select class="form-control form-control-lg" id="exampleFormControlSelect1" name="inputStatus">
                            <option value="0"<?php if($oldpage['status']==0) echo "selected"?>>Ẩn</option>
                            <option value="1"<?php if($oldpage['status']==1) echo "selected"?>>Hiện</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword4">Trash</label>
                    <div class="col-sm-9">
                        <select class="form-control form-control-lg" id="exampleFormControlSelect1" name="inputTrash">
                            <option value="0"<?php if($oldpage['trash']==0) echo "selected"?>>Không</option>
                            <option value="1"<?php if($oldpage['trash']==1) echo "selected"?>>Trash</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-success mr-2" name="submit" value="Submit">Submit</button>
                <button type="reset" class="btn btn-light" name="reset" value="Reset">Reset</button>
            </form>
        </div>
    </div>
</div>