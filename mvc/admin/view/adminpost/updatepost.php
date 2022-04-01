
<?php
    $topics=$data['topics'];
    $oldpost=$data['oldpost'];
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
                    <label for="exampleInputName1">Post Title</label>
                    <input type="text" class="form-control" id="exampleInputName1"name="inputPostTitle" required value="<?php echo $oldpost['postTitle']?>"> 
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail3">Alias</label>
                    <input type="text" class="form-control" id="exampleInputName1" name="inputAlias" value="<?php echo $oldpost['alias']?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword4">Topic Name</label>
                    <div class="col-sm-9">
                        <select class="form-control" name="inputTopicId">
                            <?php foreach($topics as $topic){?>
                                <option value="<?php echo $topic['topicId']?>"<?php if($oldpost['topicId']==$topic['topicId']) echo "selected"?>><?php echo $topic['topicName']?> </option>
                            <?php }?>
                        </select>
                    </div>
                </div>
                <div class="form-group" hidden="true">
                    <input type="text" class="form-control" id="exampleInputName1" name="inputCreateDate" value="<?php echo $oldpost['createDate']?>">
                </div>
                <div class="form-group">
                    <label for="exampleTextarea1">Summary</label>
                    <textarea class="form-control" id="ckeditor1" rows="10" name="inputSummary" required cols="80"><?php echo $oldpost['summary']?></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleTextarea1">Detail Product</label>
                    <textarea class="form-control" id="ckeditor" rows="10" name="inputDetail" required cols="80"><?php echo $oldpost['detail']?></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputCity1">Create By</label>
                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Create By" name="inputCreateBy" value="<?php echo $oldpost['createBy']?>">
                </div>
                <div class="form-group">
                    <label>File upload</label>
                    <div class="col-sm-9">
                        <input type="file" name="inputFileUpload">(Hình cũ: <?php echo $oldpost['image']?>)
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword4">Status</label>
                    <div class="col-sm-9">
                        <select class="form-control form-control-lg" id="exampleFormControlSelect1" name="inputStatus">
                            <option value="0"<?php if($oldpost['status']==0) echo "selected"?>>Ẩn</option>
                            <option value="1"<?php if($oldpost['status']==1) echo "selected"?>>Hiện</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword4">Trash</label>
                    <div class="col-sm-9">
                        <select class="form-control form-control-lg" id="exampleFormControlSelect1" name="inputTrash">
                            <option value="0"<?php if($oldpost['trash']==0) echo "selected"?>>Không</option>
                            <option value="1"<?php if($oldpost['trash']==1) echo "selected"?>>Trash</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-success mr-2" name="submit" value="Submit">Submit</button>
                <button type="reset" class="btn btn-light" name="reset" value="Reset">Reset</button>
            </form>
        </div>
    </div>
</div>