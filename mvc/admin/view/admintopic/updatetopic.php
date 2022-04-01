
<?php
    $oldtopic=$data['oldtopic'];
?>
<div class="col-md-9 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Update Categry</h4>
            <div class="row btn-success">
                <?php
                    if(isset($_SESSION['msg'])){
                        echo $_SESSION['msg'];
                        unset($_SESSION['msg']);
                    }
                ?>
            </div>
            <form class="forms-sample" method="post" action="">
                <div class="form-group">
                    <label for="exampleInputName1">Topic Name</label>
                    <input type="text" class="form-control" id="exampleInputName1" name="inputTopicName" required value="<?php echo $oldtopic['topicName']?>"> 
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail3">Topic Alias</label>
                    <input type="text" class="form-control" id="exampleInputEmail3" name="inputTopicAlias" value="<?php echo $oldtopic['topicAlias']?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword4">Status</label>
                    <div class="col-sm-9">
                        <select class="form-control form-control-lg" id="exampleFormControlSelect1" name="inputStatus">
                            <option value="0"<?php if($oldtopic['status']==0) echo "selected"?>>Ẩn</option>
                            <option value="1"<?php if($oldtopic['status']==1) echo "selected"?>>Hiện</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword4">Trash</label>
                    <div class="col-sm-9">
                        <select class="form-control form-control-lg" id="exampleFormControlSelect1" name="inputTrash">
                            <option value="0"<?php if($oldtopic['trash']==0) echo "selected"?>>Không</option>
                            <option value="1"<?php if($oldtopic['trash']==1) echo "selected"?>>Trash</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-success mr-2" name="submit" value="Submit">Submit</button>
                <button type="reset" class="btn btn-light" name="reset" value="Reset">Reset</button>
            </form>
        </div>
    </div>
</div>