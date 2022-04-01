<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Start Login</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>public/assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>public/assets/vendors/iconfonts/ionicons/dist/css/ionicons.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>public/assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>public/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>public/assets/vendors/css/vendor.bundle.addons.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>public/assets/css/shared/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="<?php echo BASE_URL; ?>public/assets/images/favicon.ico" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
          <div class="row w-100">
            <div class="col-lg-4 mx-auto">
              <div class="auto-form-wrapper">
                <?php require_once PATH_TO_VIEW.$viewname.'.php'?>
              </div>
              <ul class="auth-footer">
                <li>
                  <a href="#">Conditions</a>
                </li>
                <li>
                  <a href="#">Help</a>
                </li>
                <li>
                  <a href="#">Terms</a>
                </li>
              </ul>
              <p class="footer-text text-center">copyright © 2021</p>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?php echo BASE_URL; ?>public/assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="<?php echo BASE_URL; ?>public/assets/vendors/js/vendor.bundle.addons.js"></script>
    <!-- endinject -->
    <!-- inject:js -->
    <script src="<?php echo BASE_URL; ?>public/assets/js/shared/off-canvas.js"></script>
    <script src="<?php echo BASE_URL; ?>public/assets/js/shared/misc.js"></script>
    <!-- endinject -->
    <script src="<?php echo BASE_URL; ?>public/assets/js/shared/jquery.cookie.js" type="text/javascript"></script>
  </body>
</html>