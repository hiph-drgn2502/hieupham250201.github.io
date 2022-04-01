<div class="row justify-content-center">
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Đăng Nhập</h4>
                <div class="row btn-success">
                    <?php
                    if (isset($_SESSION['msg'])) {
                        echo $_SESSION['msg'];
                        unset($_SESSION['msg']);
                    }
                    ?>
                </div>
                <form class="forms-sample" method="post" action="<?php echo BASE_URL?>user/userlogin/">
                    <div class="form-group">
                        <label for="exampleInputName1">Username</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Username" name="inputUsername">
                    </div>
                    <div class="form-group">
                        <label for="formrow-password-input">Password</label>
                        <input type="password" class="form-control" id="exampleInputName1" placeholder="Password" name="inputPassword">
                    </div>
                    <button type="submit" class="btn btn-success mr-2" name="userlogin">Sing In</button>
                    <button type="reset" class="btn btn-light" name="reset" value="Reset">Reset</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-1">
        <h3>Hoặc</h3>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Đăng Ký</h4>
                <div class="row btn-success">
                    <?php
                    if (isset($_SESSION['msg1'])) {
                        echo $_SESSION['msg1'];
                        unset($_SESSION['msg1']);
                    }
                    ?>
                </div>
                <form class="forms-sample" method="post" action="<?php echo BASE_URL?>user/userlogin/">
                    <div class="form-group">
                        <label for="exampleInputName1">Họ Tên</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Họ tên" name="inputFullName" required>
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
                        <label for="exampleInputName1">Username</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Username" name="inputUserName" required>
                    </div>
                    <div class="form-group">
                        <label for="formrow-password-input">Password</label>
                        <input type="password" class="form-control" id="exampleInputName1" placeholder="Password" name="inputPassword" required>
                    </div>
                    <button type="submit" class="btn btn-success mr-2" name="submit">Đăng Ký</button>
                    <button type="reset" class="btn btn-light" name="reset" value="Reset">Reset</button>
                </form>
            </div>
        </div>
    </div>
</div>