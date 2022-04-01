<?php require_once PATH_TO_MODUL.'header.php'; ?>


    <section>
        <div class="page-notification">
          <div class="container">
              <div class="row">
                  <div class="col-lg-12">
                      <nav aria-label="breadcrumb">
                          <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item">
                                <a href="<?php echo BASE_URL?>product/home">Trang chủ</a>
                            </li>
                            <li class="breadcrumb-item">
                                
                                <a href="#">Sản phẩm</a>
                            </li>
                            
                          </ol>
                      </nav>
                  </div>
              </div>
          </div>
        </div>
    </section>

    <sectiond>
        
    
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-8 col-md-10">
                    <div class="section-title">
                        <div data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-center"
                            data-aos-once="true" class="mb-60">
                            <h2>
                                Tất Cả 
                                <?php
                                    if(isset($data['cat']['catName'])){
                                        echo $data['cat']['catName'];
                                    }else{
                                        echo $data['collection']['collectionName'];
                                    }
                                ?>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-4">
                    <div data-aos="fade-up" data-aos-once="true" class="category-list">
                        <?php require_once PATH_TO_MODUL.'leftcategorymenu.php'; ?>                     
                        <?php require_once PATH_TO_MODUL.'leftcollectionmenu.php'; ?>                                        
                    </div>
                </div>
                
                <?php include_once PATH_TO_VIEW.$viewname.'.php'; ?>
                
            </div>
        </div>
        
    </section>

    <section>
        <div class="container-fluid">
            <div class="categories gray-bg">
                <div class="container">
                    
                    <div class="row">
                        <div data-aos="fade-up" class="col-lg-3 col-md-6 col-sm-6">
                            <div class="single-cat">
                                <div class="cat-icon">
                                    <img src="https://preview.colorlib.com/theme/shionhouse/assets/img/icon/services1.svg"
                                        alt="iconcat1">
                                </div>
                                <div class="cat-cap">
                                    <h5>Giao hàng miễn phí</h5>
                                    <p>Giao hàng miễn phí toàn quốc</p>
                                </div>
                            </div>
                        </div>
                        <div data-aos="fade-up" class="col-lg-3 col-md-6 col-sm-6">
                            <div class="cat-icon">
                                <img src="https://preview.colorlib.com/theme/shionhouse/assets/img/icon/services2.svg"
                                    alt="iconcat1">
                            </div>
                            <div class="cat-cap">
                                <h5>Giao hàng miễn phí</h5>
                                <p>Giao hàng miễn phí toàn quốc</p>
                            </div>
                        </div>
                        <div data-aos="fade-up" class="col-lg-3 col-md-6 col-sm-6">
                            <div class="cat-icon">
                                <img src="https://preview.colorlib.com/theme/shionhouse/assets/img/icon/services3.svg"
                                    alt="iconcat1">
                            </div>
                            <div class="cat-cap">
                                <h5>Giao hàng miễn phí</h5>
                                <p>Giao hàng miễn phí toàn quốc</p>
                            </div>
                        </div>
                        <div data-aos="fade-up" class="col-lg-3 col-md-6 col-sm-6">
                            <div class="cat-icon">
                                <img src="https://preview.colorlib.com/theme/shionhouse/assets/img/icon/services4.svg"
                                    alt="iconcat1">
                            </div>
                            <div class="cat-cap">
                                <h5>Giao hàng miễn phí</h5>
                                <p>Giao hàng miễn phí toàn quốc</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
         <div class="container-fluid">
            <div class="footer footer-area footer-padding">
               <div class="container-fluid">
                  <div class="row d-flex justify-content-between">
                     <div class="col-xl-4 col-lg-3 col-md-8 col-sm-8">
                        <div class="single-footer ">
                           <div class="footer-logo">
                              <a href="#">
                              <img src="https://preview.colorlib.com/theme/furn/assets/img/logo/logo2_footer.png"
                                 alt="logo-footer">
                              </a>
                           </div>
                           <div class="footer-title">
                              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis tempore
                                 repudiandae voluptatum facere dolor aliquid, ducimus nisi aspernatur in. Non.
                              </p>
                           </div>
                        </div>
                     </div>
                     <?php require_once PATH_TO_MODUL.'bottommenu1.php'; ?>
                     <?php require_once PATH_TO_MODUL.'bottommenu2.php'; ?>
                     <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4">
                        <div class=" single-footer">
                           <div class="footer-title">
                              <h4>Liên hệ</h4>
                              <div class="pad-left">
                                 <ul>
                                    <li>
                                       <a href="#">(+84) 0386256124</a>
                                    </li>
                                    <li>
                                       <a href="#">minhdao.161120@gmail.com</a>
                                    </li>
                                    <li>
                                       <a href="#">CĐ Công Thương</a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="footer-bottom">
               <div class="container">
                  <div class="footer-border">
                     <div class="d-flex align-items-center">
                        <div class="col-xl-12">
                           <div class="footer-copy text-center">
                              <p>
                                 Copyright © 2021 Minh Văn
                              </p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <div>
        <a onclick="topFunction()" id="back-top" title="Go to Top">
            <i class="fas fa-chevron-up"></i>
        </a>
    </div>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            offset: 200,
            duration: 1300,
        });
        var btn = document.getElementsByClassName('cat-item');
        var menuDrop = document.getElementsByClassName('menu-dropdown');
        var menuItem = document.getElementsByClassName('dropdown-item');
        for (var i = 0; i < btn.length; i++) {
            btn[i].addEventListener("click", function (e) {
                var dem = this.dataset.id ;
                var childLength1 = document.querySelectorAll('.cat-item .menu-dropdown-' + dem + ' .dropdown-item').length;
                if (childLength1 > 0)
                    document.querySelectorAll('.cat-item .menu-dropdown-' + dem)[0].style.height = (45 * childLength1 + 2) + "px";
                var childLength2 = document.querySelectorAll('.cat-item.active .menu-dropdown-' + dem + ' .dropdown-item').length;
                if (childLength2 > 0)
                    document.querySelectorAll('.cat-item.active .menu-dropdown-' + dem)[0].style.height =  0;
                this.classList.toggle("active");              
            });            
        }
    </script>
    <?php require_once PATH_TO_MODUL.'cart.php'; ?>
</body>

</html> 