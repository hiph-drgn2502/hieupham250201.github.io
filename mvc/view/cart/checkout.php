
<div class="row">
    <?php require_once PATH_TO_MODUL . 'price$.php'; ?>
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Check Out</h4>
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
                        <label for="exampleInputName1">Họ Tên</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Họ và Tên" name="inputFullName" required> 
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">Địa Chỉ</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Địa Chỉ" name="inputAddress" required> 
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">Số Điện Thoại</label>
                        <input type="phone" class="form-control" id="exampleInputName1" placeholder="Số Điện Thoại" name="inputPhone" required> 
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">Email</label>
                        <input type="email" class="form-control" id="exampleInputName1" placeholder="Email" name="inputEmail" required> 
                    </div>
                    <div class="form-group">
                        <label for="exampleTextarea1">Ghi Chú</label>
                        <textarea class="form-control" id="exampleTextarea1" rows="10" name="inputNote" required cols="80"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success mr-2" name="submit" value="Submit">Submit</button>
                    <button type="reset" class="btn btn-light" name="reset" value="Reset">Reset</button>
                </form>
            </div>
        </div>
    </div>
</div>