<?php

   $currentproduct=$data['currentproduct'];
   $sameProducts=$data['sameProducts'];

?>
<section>
         <div class="container section-padding">
            <div class="row">
                <div class="col-lg-5">
                    <div class="product-image">
                        <div class="image-product active" style="width: 476px; margin-right: 0px;">
                        <img src="<?php echo BASE_URL; ?>public/upload/<?php echo $currentproduct['image']; ?>"
                                class="w-100" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="product-text">
                    <h3><?php echo $currentproduct['productName'] ?></h3>
                    <?php if($currentproduct['saleprice'] != '') {?>

                        <h2 class="card-text " style="margin-bottom: 0;"><?php echo number_format($currentproduct['saleprice'],2) ?>.$</h2>
                        <h2 class="card-text price-net" style="margin-bottom: 1rem; text-decoration:line-through; opacity: 0.5; font-size: large;  "><?php echo number_format($currentproduct['price'],2) ?>.$</h2>
                        
                        <?php }else{?>

                        <h2 class="card-text price-net" style="margin-bottom: 1rem; "><?php echo number_format($currentproduct['price'],2) ?>.$</h2>

                     <?php } ?>
                     
                    <ul>
                        <li>
                            <a href="#"><span>Loại</span>: Thời trang nam</a>
                        </li>
                        <li>
                            <a href="#"><span>Tình trạng</span>: Còn hàng</a>
                        </li>
                    </ul>
                    <p>
                    <?php echo $currentproduct['detail'] ?>
                    </p>
                    <div class="card-area">
                        <div class="product-count d-inline-block">
                            <span class="minus">
                            <i class="fas fa-minus"></i>
                            </span>
                            &nbsp;
                            <input type="text" class="input-number" value="1" min="0" max="10">
                            &nbsp;
                            <span class="plus">
                            <i class="fas fa-plus"></i>
                            </span>
                        </div>
                        
                        <div class="add-to-cart">
                        <a href="<?php echo BASE_URL ?>cart/add/<?php echo $currentproduct['productid'] ?>/<?php echo $currentproduct['productName'] ?>/<?php if ($currentproduct['saleprice'] <> 0) echo $currentproduct['saleprice'];else echo $currentproduct['price'] ?>"><button class="btn-detail" ><span> THÊM VÀO GIỎ</span> </button></a>
                        </div>
                        <div class="fb-like" data-href="<?php echo BASE_URL.'product/productDetail/'.$currentproduct['alias'] ?>" data-width="" data-layout="button_count" data-action="like" data-size="large" data-share="true"></div>
                    </div>
                </div>
            </div>
         </div>
      </section>
      <section class="product-description">
         <div class="container">
            <ul id="myTab" class="nav nav-tabs" role="tablist">
               <li class="nav-item">
                  <a id="home-tab" class="nav-link active" aria-controls="home" data-bs-toggle="tab" aria-expanded="true" role="tab" href="#home">Mô tả</a>
               </li>
               <li class="nav-item">
                  <a id="review-tab" aria-controls="review" data-bs-toggle="tab" aria-expanded="false" class="nav-link" role="tab" href="#review">Đánh giá</a>
               </li>
            </ul>
            <div id="myTabContent" class="tab-content">
               <div id="home" class="collapse tab-pane w3-animate-opacity active" aria-labelledby="home-tab">
                  <p><?php echo $currentproduct['detail'] ?></p>
               </div>
               <div id="review" class="collapse w3-animate-opacity">
                  <div class="row">
                     <div class="col-lg-6">
                        <div class="comment-list">
                           <div class="review-item">
                              <div class="media">
                                 <div class="d-flex">
                                    <img src="https://preview.colorlib.com/theme/furn/assets/img/gallery/review-1.png" alt="">
                                 </div>
                                 <div class="media-body">
                                    <h4>Đào Văn Minh</h4>
                                    <h5>23:53, 2/4/2021</h5>
                                    <a class="reply-btn" href="#">
                                    Trả lời
                                    </a>
                                 </div>
                              </div>
                              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facere quidem voluptas sint a dolorem! Dolor officiis, a omnis dicta possimus, facere temporibus at, asperiores consequatur numquam quo animi maiores nulla.</p>
                           </div>
                           <div class="review-item reply">
                              <div class="media">
                                 <div class="d-flex">
                                    <img src="https://preview.colorlib.com/theme/furn/assets/img/gallery/review-2.png" alt="">
                                 </div>
                                 <div class="media-body">
                                    <h4>Dương Việt Anh</h4>
                                    <h5>0:15, 3/4/2021</h5>
                                    <a class="reply-btn" href="#">
                                    Trả lời
                                    </a>
                                 </div>
                              </div>
                              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facere quidem voluptas sint a dolorem! Dolor officiis, a omnis dicta possimus, facere temporibus at, asperiores consequatur numquam quo animi maiores nulla.</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="review-box">
                           <h4>Bình Luận</h4>
                           <form id="contactForm" class="row contact-form" action="" method="post">
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <input type="email" id="email" class="form-control" name="name" placeholder="Email của bạn">
                                 </div>
                              </div>
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <input type="text" id="email" class="form-control" name="name" placeholder="Họ tên của bạn">
                                 </div>
                              </div>
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <input type="text" id="number" class="form-control" name="number" placeholder="SĐT của bạn">
                                 </div>
                              </div>
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <textarea type="text" id="message" class="form-control" name="message" rows="1" placeholder="Nội dung"></textarea>
                                 </div>
                              </div>
                              <div class="col-md-12 text-right">
                                 <button class="btn" type="submit" value="submit"><span>Đăng</span></button>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="product-related">
         <div class="container">
             <h4>Sản Phẩm Liên Quan</h4>
            <div class="row">
               <?php foreach($sameProducts as $sameProduct){ ?>

                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                     <div data-aos="fade-up" data-aos-once="true" class="card text-center" style="width: 18rem;">
                        <img src="<?php echo BASE_URL; ?>public/upload/<?php echo $sameProduct['image'] ?>"
                                class="card-img-top" alt="...">
                        <div class="card-body">
                           <a class="card-title" style="min-height: 71px" href='<?php echo BASE_URL.'product/productDetail/'.$sameProduct['alias'] ?>'><?php echo $sameProduct['productName'] ?></a>
                           <div class="rating mb-10">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                           </div>
                           <?php if($sameProduct['saleprice'] != '') {?>

                              <p class="card-text price-net" style="margin-bottom: 0; text-decoration:line-through; opacity: 0.5 "><?php echo number_format($sameProduct['price'],2) ?>.$</p>
                              <p class="card-text " style="margin-bottom: 1rem; font-size: large; "><?php echo number_format($sameProduct['saleprice'],2) ?>.$</p>

                           <?php }else{?>

                              <p class="card-text " style="margin-bottom: 1rem; font-size: large; "><?php echo number_format($sameProduct['price'],2) ?>.$</p>

                           <?php } ?>
                           <div class="fb-like" data-href="<?php echo BASE_URL.'product/productDetail/'.$sameProduct['alias'] ?>" data-width="" data-layout="button_count" data-action="like" data-size="small" data-share="true"></div>
                           <a href="<?php echo BASE_URL ?>cart/add/<?php echo $sameProduct['productid'] ?>/<?php echo $sameProduct['productName'] ?>/<?php if ($sameProduct['saleprice'] <> 0) echo $sameProduct['saleprice'];else echo $sameProduct['price'] ?>" class="btn btn-card">Mua ngay</a>
                        </div>
                     </div>
                  </div>

               <?php } ?>
            </div>
         </div>
      </section>