
<?php
    $topics=$data['topics'];
?>
<div class="col-md-9 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Add Post</h4>
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
                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Post Title" name="inputPostTitle" required> 
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail3">Alias</label>
                    <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Alias" name="inputAlias">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword4">Topic Name</label>
                    <div class="col-sm-9">
                        <select class="form-control" name="inputTopicId">
                            <?php foreach($topics as $topic){?>
                                <option value="<?php echo $topic['topicId']?>"><?php echo $topic['topicName']?></option>
                            <?php }?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleTextarea1">Summary</label>
                    <textarea class="form-control" id="ckeditor3" rows="5" name="inputSummary" required cols="40"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleTextarea1">Detail Product</label>
                    <textarea class="form-control" id="ckeditor4" rows="10" name="inputDetail" required cols="80"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Create By</label>
                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Create By" name="inputCreateBy">
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