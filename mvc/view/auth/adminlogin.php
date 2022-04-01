<div class="row">
<?php
    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
?>
</div>
<form action="<?php echo BASE_URL?>auth/adminlogin/" method="post">
    <div class="form-group">
    <label class="label">Username</label>
    <div class="input-group">
        <input type="text" class="form-control" placeholder="Username" name="inputUsername">
        <div class="input-group-append">
        <span class="input-group-text">
            <i class="mdi mdi-check-circle-outline"></i>
        </span>
        </div>
    </div>
    </div>
    <div class="form-group">
    <label class="label">Password</label>
    <div class="input-group">
        <input type="password" class="form-control" placeholder="*********" name="inputPassword">
        <div class="input-group-append">
        <span class="input-group-text">
            <i class="mdi mdi-check-circle-outline"></i>
        </span>
        </div>
    </div>
    </div>
    <div class="form-group">
    <button class="btn btn-primary submit-btn btn-block" type="submit" name="login">Login</button>
    </div>
    <div class="form-group d-flex justify-content-between">
    <div class="form-check form-check-flat mt-0">
        <label class="form-check-label">
        <input type="checkbox" class="form-check-input" checked> Keep me signed in </label>
    </div>
    <a href="#" class="text-small forgot-password text-black">Forgot Password</a>
    </div>
    <div class="form-group">
    <button class="btn btn-block g-login">
        <img class="mr-3" src="<?php echo BASE_URL; ?>public/assets/images/file-icons/icon-google.svg" alt="">Log in with Google</button>
    </div>
    <div class="text-block text-center my-3">
    <span class="text-small font-weight-semibold">Not a member ?</span>
    <a href="register.html" class="text-black text-small">Create new account</a>
    </div>
</form>