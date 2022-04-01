<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Dashboard</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>public/assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>public/assets/vendors/iconfonts/ionicons/dist/css/ionicons.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>public/assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>public/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>public/assets/vendors/css/vendor.bundle.addons.css">
    <!--font-awesome -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>public/assets/vendors/iconfonts/font-awesome/css/font-awesome.css" />
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>public/assets/css/shared/style.css">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>public/assets/css/demo_1/style.css">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="<?php echo BASE_URL; ?>public/assets/images/favicon.ico" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_navbar.html -->
      <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
          <a class="navbar-brand brand-logo" href="<?php echo BASE_URL?>dashboard/home"><!--index-->
            <img src="<?php echo BASE_URL; ?>public/assets/images/logo.svg" alt="logo" /> </a>
          <a class="navbar-brand brand-logo-mini" href="<?php echo BASE_URL?>dashboard/home"><!--index-->
            <img src="<?php echo BASE_URL; ?>public/assets/images/logo-mini.svg" alt="logo" /> </a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
          <ul class="navbar-nav">
            <li class="nav-item dropdown language-dropdown">
              <a class="nav-link dropdown-toggle px-2 d-flex align-items-center" id="LanguageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <div class="d-inline-flex mr-0 mr-md-3">
                  <div class="flag-icon-holder">
                    <i class="flag-icon flag-icon-us"></i>
                  </div>
                </div>
                <span class="profile-text font-weight-medium d-none d-md-block">English</span>
              </a>
              <div class="dropdown-menu dropdown-menu-left navbar-dropdown py-2" aria-labelledby="LanguageDropdown">
                <a class="dropdown-item">
                  <div class="flag-icon-holder">
                    <i class="flag-icon flag-icon-us"></i>
                  </div>English
                </a>
                <a class="dropdown-item">
                  <div class="flag-icon-holder">
                    <i class="flag-icon flag-icon-fr"></i>
                  </div>French
                </a>
                <a class="dropdown-item">
                  <div class="flag-icon-holder">
                    <i class="flag-icon flag-icon-ae"></i>
                  </div>Arabic
                </a>
                <a class="dropdown-item">
                  <div class="flag-icon-holder">
                    <i class="flag-icon flag-icon-ru"></i>
                  </div>Russian
                </a>
              </div>
            </li>
          </ul>
          <form class="ml-auto search-form d-none d-md-block" action="#">
            <div class="form-group">
              <input type="search" class="form-control" placeholder="Search Here">
            </div>
          </form>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-bell-outline"></i>
                <span class="count">7</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
                <a class="dropdown-item py-3">
                  <p class="mb-0 font-weight-medium float-left">You have 7 unread mails </p>
                  <span class="badge badge-pill badge-primary float-right">View all</span>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="<?php echo BASE_URL; ?>public/assets/images/faces/face10.jpg" alt="image" class="img-sm profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis font-weight-medium text-dark">Marian Garner </p>
                    <p class="font-weight-light small-text"> The meeting is cancelled </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="<?php echo BASE_URL; ?>public/assets/images/faces/face12.jpg" alt="image" class="img-sm profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis font-weight-medium text-dark">David Grey </p>
                    <p class="font-weight-light small-text"> The meeting is cancelled </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="<?php echo BASE_URL; ?>public/assets/images/faces/face1.jpg" alt="image" class="img-sm profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis font-weight-medium text-dark">Travis Jenkins </p>
                    <p class="font-weight-light small-text"> The meeting is cancelled </p>
                  </div>
                </a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator" id="notificationDropdown" href="#" data-toggle="dropdown">
                <i class="mdi mdi-email-outline"></i>
                <span class="count bg-success">3</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="notificationDropdown">
                <a class="dropdown-item py-3 border-bottom">
                  <p class="mb-0 font-weight-medium float-left">You have 4 new notifications </p>
                  <span class="badge badge-pill badge-primary float-right">View all</span>
                </a>
                <a class="dropdown-item preview-item py-3">
                  <div class="preview-thumbnail">
                    <i class="mdi mdi-alert m-auto text-primary"></i>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal text-dark mb-1">Application Error</h6>
                    <p class="font-weight-light small-text mb-0"> Just now </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item py-3">
                  <div class="preview-thumbnail">
                    <i class="mdi mdi-settings m-auto text-primary"></i>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal text-dark mb-1">Settings</h6>
                    <p class="font-weight-light small-text mb-0"> Private message </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item py-3">
                  <div class="preview-thumbnail">
                    <i class="mdi mdi-airballoon m-auto text-primary"></i>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal text-dark mb-1">New user registration</h6>
                    <p class="font-weight-light small-text mb-0"> 2 days ago </p>
                  </div>
                </a>
              </div>
            </li>
            <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <img class="img-xs rounded-circle" src="<?php echo BASE_URL; ?>public/assets/images/faces/face8.jpg" alt="Profile image"> </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                  <img class="img-md rounded-circle" src="<?php echo BASE_URL; ?>public/assets/images/faces/face8.jpg" alt="Profile image">
                  <p class="mb-1 mt-3 font-weight-semibold"><?php if(isset($_SESSION['admin'])) echo $_SESSION['adminname']?></p>
                  <p class="font-weight-light text-muted mb-0"><?php if(isset($_SESSION['admin'])) echo $_SESSION['email']?></p>
                </div>
                <a class="dropdown-item">My Profile <span class="badge badge-pill badge-danger">1</span><i class="dropdown-item-icon ti-dashboard"></i></a>
                <a class="dropdown-item">Messages<i class="dropdown-item-icon ti-comment-alt"></i></a>
                <a class="dropdown-item">Activity<i class="dropdown-item-icon ti-location-arrow"></i></a>
                <a class="dropdown-item">FAQ<i class="dropdown-item-icon ti-help-alt"></i></a>
                <a class="dropdown-item" href="<?php echo BASE_URL?>auth/adminLogout">Sign Out<i class="dropdown-item-icon ti-power-off"></i></a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="profile-image">
                  <img class="img-xs rounded-circle" src="<?php echo BASE_URL; ?>public/assets/images/faces/face8.jpg" alt="profile image">
                  <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                  
                  <p class="profile-name"><?php if(isset($_SESSION['admin'])) echo $_SESSION['adminname']?></p>
                  
                  <p class="designation">
                  <?php if(isset($_SESSION['admin'])){
                    if($_SESSION['level'] == 0){
                      echo 'Premium user';
                    }
                  } ?></p>
                </div>
              </a>
            </li>
            <li class="nav-item nav-category">Main Menu</li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo BASE_URL?>dashboard/home">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#product" aria-expanded="false" aria-controls="product">
                <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">Quản Lý Sản Phẩm</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="product">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo BASE_URL ?>adminproduct/productAdd">Thêm sản phẩm</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo BASE_URL ?>adminproduct/productList/<?php echo LIMIT.'/0'?>">Xem danh sách sản phẩm</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo BASE_URL ?>adminproduct/productListInTrash/<?php echo LIMIT.'/0'?>">Xem thùng rác</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#category" aria-expanded="false" aria-controls="category">
                <i class="menu-icon typcn typcn-document-add"></i>
                <span class="menu-title">Quản Lý Nhóm Sản Phẩm</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="category">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo BASE_URL ?>admincategory/categoryAdd">Thêm nhóm sản phẩm</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo BASE_URL ?>admincategory/categoryList/<?php echo LIMIT.'/0'?>">Xem danh sách nhóm sản phẩm</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo BASE_URL ?>admincategory/categoryListInTrash/<?php echo LIMIT.'/0'?>">Xem thùng rác</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#link" aria-expanded="false" aria-controls="link">
                <i class="menu-icon typcn typcn-document-add"></i>
                <span class="menu-title">Quản Lý Liên Kết</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="link">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo BASE_URL ?>adminlink/linkAdd">Thêm liên kết</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo BASE_URL ?>adminlink/linkList/<?php echo LIMIT.'/0'?>">Xem danh sách liên kết</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo BASE_URL ?>adminlink/linkListInTrash/<?php echo LIMIT.'/0'?>">Xem thùng rác</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#slide" aria-expanded="false" aria-controls="slide">
                <i class="menu-icon typcn typcn-document-add"></i>
                <span class="menu-title">Quản Lý Hình Ảnh</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="slide">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo BASE_URL ?>adminslide/slideAdd">Thêm hình ảnh</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo BASE_URL ?>adminslide/slideList/<?php echo LIMIT.'/0'?>">Xem danh sách hình ảnh</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo BASE_URL ?>adminslide/slideListInTrash/<?php echo LIMIT.'/0'?>">Xem thùng rác</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#page" aria-expanded="false" aria-controls="page">
                <i class="menu-icon typcn typcn-document-add"></i>
                <span class="menu-title">Quản Lý Thông Tin Web</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="page">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo BASE_URL ?>adminpage/pageAdd">Thêm thông tin web</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo BASE_URL ?>adminpage/pageList/<?php echo LIMIT.'/0'?>">Xem danh sách thông tin web</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo BASE_URL ?>adminpage/pageListInTrash/<?php echo LIMIT.'/0'?>">Xem thùng rác</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#topic" aria-expanded="false" aria-controls="topic">
                <i class="menu-icon typcn typcn-document-add"></i>
                <span class="menu-title">Quản Lý Chủ Đề</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="topic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo BASE_URL ?>admintopic/topicAdd">Thêm chủ đề</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo BASE_URL ?>admintopic/topicList/<?php echo LIMIT.'/0'?>">Xem danh sách chủ đề</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo BASE_URL ?>admintopic/topicListInTrash/<?php echo LIMIT.'/0'?>">Xem thùng rác</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#post" aria-expanded="false" aria-controls="post">
                <i class="menu-icon typcn typcn-document-add"></i>
                <span class="menu-title">Quản Lý Bài Viết</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="post">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo BASE_URL ?>adminpost/postAdd">Thêm bài viết</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo BASE_URL ?>adminpost/postList/<?php echo LIMIT.'/0'?>">Xem danh sách bài viết</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo BASE_URL ?>adminpost/postListInTrash/<?php echo LIMIT.'/0'?>">Xem thùng rác</a>
                  </li>
                </ul>
              </div>
            </li>
            
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <?php require_once PATH_TO_ADMINVIEW.$view.".php" ?>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div class="container-fluid clearfix">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2021</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?php echo BASE_URL; ?>public/assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="<?php echo BASE_URL; ?>public/assets/vendors/js/vendor.bundle.addons.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <script src="<?php echo BASE_URL; ?>public/assets/js/shared/off-canvas.js"></script>
    <script src="<?php echo BASE_URL; ?>public/assets/js/shared/misc.js"></script>
    <script src="<?php echo BASE_URL; ?>public/ckeditor/ckeditor.js"></script>
    <script>
            CKEDITOR.replace('ckeditor',{
              filebrowserImageUploadUrl : "({ url('uploads-ckeditor?_token='.csrf_token()) })",
              filebrowserBrowseUrl : "({ url('file-browser?_token='.csrf_token()) })",
              filebrowserUploadMethod: 'from'
            });
            CKEDITOR.replace('ckeditor1',{
              filebrowserImageUploadUrl : "({ url('uploads-ckeditor?_token='.csrf_token()) })",
              filebrowserBrowseUrl : "({ url('file-browser?_token='.csrf_token()) })",
              filebrowserUploadMethod: 'from'
            });
            CKEDITOR.replace('ckeditor2',{
              filebrowserImageUploadUrl : "({ url('uploads-ckeditor?_token='.csrf_token()) })",
              filebrowserBrowseUrl : "({ url('file-browser?_token='.csrf_token()) })",
              filebrowserUploadMethod: 'from'
            });
            CKEDITOR.replace('ckeditor3',{
              filebrowserImageUploadUrl : "({ url('uploads-ckeditor?_token='.csrf_token()) })",
              filebrowserBrowseUrl : "({ url('file-browser?_token='.csrf_token()) })",
              filebrowserUploadMethod: 'from'
            });
            CKEDITOR.replace('ckeditor4',{
              filebrowserImageUploadUrl : "({ url('uploads-ckeditor?_token='.csrf_token()) })",
              filebrowserBrowseUrl : "({ url('file-browser?_token='.csrf_token()) })",
              filebrowserUploadMethod: 'from'
            });
    </script>
  </body>
</html>