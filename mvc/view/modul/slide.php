<?php
    $imagemodel = new ImageModel;
    $images = $imagemodel->getAll(['trash'=>0, 'status'=>1, 'position'=>1])
?>
<section>
        <div class="banner">
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner banner-height">
                    <!-- <div class="carousel-item active" data-bs-interval="10000">
                        <img src="<?php echo BASE_URL; ?>public/img/slider/Minh_slide01.png"
                            class="d-block img-banner" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="<?php echo BASE_URL; ?>public/img/slider/Minh_slide02.png"
                            class="d-block img-banner" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo BASE_URL; ?>public/img/slider/Minh_slide03.png"
                            class="d-block img-banner" alt="...">
                    </div> -->
                    <div class="carousel-item active">
                        <img src="<?php echo BASE_URL.'public/img/slider/'.$images[0]['image'] ?>"
                            class="d-block img-banner" alt="...">
                    </div>
                    <?php unset($images[0])?>
                   <?php foreach($images as $image){?> 
                    <div class="carousel-item">
                        <img src="<?php echo BASE_URL.'public/img/slider/'.$image['image'] ?>"
                            class="d-block img-banner" alt="...">
                    </div>
                   <?php }?> 
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="content-banner container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-9">
                        <div class="caption">
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>