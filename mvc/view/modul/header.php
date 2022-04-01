<?php
$catmodel = new CategoryModel;
$cats = $catmodel->getAll(['trash' => 0, 'status' => 1]);
$linkmodel = new LinkModel;
$links = $linkmodel->getAll(['position' => 'golbalnav']);
$topicmodel = new TopicModel;
$topics = $topicmodel->getAll(['trash' => 0, 'status' => 1]);
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>FURN Fashion</title>
   <link rel="stylesheet" href="<?php echo BASE_URL; ?>public/css/style.css">
   <link rel="icon" type="image/png" href="<?php echo BASE_URL; ?>public/img/logo/logo.png" />
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300&display=swap" rel="stylesheet">
   <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


   <script src="<?php echo BASE_URL; ?>public/js/main.js"></script>


   <div id="fb-root"></div>
   <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v11.0" nonce="S7F21MIZ"></script>
</head>

<body>
   <section>
      <header class="">
         <div class="logo">
            <a href="<?php echo BASE_URL ?>product/home">
               <img src="<?php echo BASE_URL; ?>public/img/logo/Minh_logo4.png" alt="logo">
            </a>
         </div>
         <div class="main-menu">
            <nav class="navbar navbar-expand-lg navbar-light ">
               <div class="container-fluid">
                  <a class="navbar-brand nav-logo" href="<?php echo BASE_URL ?>product/home"><img src="https://preview.colorlib.com/theme/furn/assets/img/logo/logo2.png" alt="logo"></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse nav-menu" id="navbarSupportedContent">
                     <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item menu-item">
                           <a class="nav-content" aria-current="page" href="<?php echo BASE_URL ?>product/home">trang chủ</a>
                        </li>
                        <li class="nav-item dropdown menu-item">
                           <a class="nav-content" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              sản phẩm
                           </a>
                           <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <?php foreach ($cats as $cat) { ?>
                                 <li><a class="dropdown-item" href="<?php echo BASE_URL ?>product/productByCat/<?php echo $cat['alias'] . '/' . LIMIT . '/0' ?>"><?php echo $cat['catName'] ?></a></li>
                              <?php } ?>
                           </ul>
                        </li>
                        <?php foreach ($links as $link) { ?>
                           <li class="nav-item menu-item">
                              <a class="nav-content" href="<?php echo BASE_URL . $link['link'] ?>"><?php if ($link['status'] == 1 && $link['trash'] == 0) echo $link['title'] ?></a>
                           </li>
                        <?php } ?>
                        <li class="nav-item dropdown menu-item">
                           <a class="nav-content" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              tin tức
                           </a>
                           <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <?php foreach ($topics as $topic) { ?>
                                 <li><a class="dropdown-item" href="<?php echo BASE_URL ?>post/postbytopic/<?php echo $topic['topicAlias'] . '/' . LIMIT . '/0' ?>"><?php echo $topic['topicName'] ?></a></li>
                              <?php } ?>
                           </ul>
                        </li>
                     </ul>

                     <div class="search-cart d-flex">
                        <form class="form-search" method="POST" action="<?php echo BASE_URL . 'product/productSearch/' . LIMIT . '/0' ?>">
                           <input class="form-control-search form-control me-2" type="search" placeholder="Search" aria-label="Search" name="searchKey">
                           <button class="btn btn-warning btn-submit" type="submit"><i class="fas fa-search"></i></button>
                        </form>
                        <!-- <button class="login-button">Đăng Nhập</button> -->

                        <div class="cart" data-bs-toggle="modal" data-bs-target="#exampleModal">
                           <img src="https://preview.colorlib.com/theme/shionhouse/assets/img/gallery/card.svg" alt="">
                           &nbsp;
                           <!-- <span>0</span> -->
                           <span>
                              <!-- <img src="https://preview.colorlib.com/theme/shionhouse/assets/img/gallery/card.svg"
                                    alt="">
                                 <i class="fas fa-shopping-cart" id="carticon"></i>
                                 &nbsp; -->
                              <?php
                              $cart = new Cart;
                              if ($cart->getCount() != 0) {
                                 echo '(' . $cart->getCount() . ')';
                              }
                              ?>
                           </span>
                        </div>
                        
                        <div class="cart">
                           <button onclick="mobileMenuOpen()" class="dropbtn"><?php if(isset($_SESSION['username'])) echo $_SESSION['fullname']; else echo 'Thành Viên'?></button>
                           <ul id="gmDropdown" class="dropdown-content">
                              <li><a href="#profile"><i class="far fa-id-badge"></i>Profile</a></li>
                              <?php if((isset($_SESSION['username']))){?>
                                 <li><a href="<?php echo BASE_URL ?>user/userlogout"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
                              <?php }else{ ?>
                                 <li><a href="<?php echo BASE_URL ?>user/userlogin"><i class="fas fa-sign-in-alt"></i>Login</a></li>
                              <?php }?>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </nav>
         </div>
      </header>
   </section>