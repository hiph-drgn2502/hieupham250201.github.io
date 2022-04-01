
<?php
    $oldslide=$data['oldslide'];
?>
<div class="col-md-9 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Update Slide</h4>
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
                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Title" name="inputTitle" required value="<?php echo $oldslide['title']?>"> 
                </div>
                <div class="form-group">
                    <label>Image upload</label>
                    <div class="col-sm-9">
                        <input type="file" name="inputFileUpload">(Hình cũ: <?php echo $oldslide['image']?>)
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Image Name</label>
                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Image Name" name="inputImageName" value="<?php echo $oldslide['imageName']?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Position</label>
                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Position" name="inputPosition" value="<?php echo $oldslide['position']?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword4">Status</label>
                    <div class="col-sm-9">
                        <select class="form-control form-control-lg" id="exampleFormControlSelect1" name="inputStatus">
                            <option value="0"<?php if($oldslide['status']==0) echo "selected"?>>Ẩn</option>
                            <option value="1"<?php if($oldslide['status']==1) echo "selected"?>>Hiện</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword4">Trash</label>
                    <div class="col-sm-9">
                        <select class="form-control form-control-lg" id="exampleFormControlSelect1" name="inputTrash">
                            <option value="0"<?php if($oldslide['trash']==0) echo "selected"?>>Không</option>
                            <option value="1"<?php if($oldslide['trash']==1) echo "selected"?>>Trash</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-success mr-2" name="submit" value="Submit">Submit</button>
                <button type="reset" class="btn btn-light" name="reset" value="Reset">Reset</button>
            </form>
        </div>
    </div>
</div>