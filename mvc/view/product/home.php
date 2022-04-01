<?php
$products = $data['products'];
$paging = $data['paging'];
?>
 
<div class="row">
    
    <div data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-center" data-aos-once="true" class="text-center mb-60">
        <h2>
            SẢN PHẨM
            <br>
            MỚI
        </h2>
    </div>
</div>
<div class="row">
    <?php foreach ($products as $product) { ?>

        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 center-product">
            <div data-aos="fade-up" class="card text-center" style="width: 18rem; min-height: 500px;">
                <img src="<?php echo BASE_URL; ?>public/upload/<?php echo $product['image'] ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <a class="card-title" style="min-height: 71px" href='<?php echo BASE_URL . 'product/productDetail/' . $product['alias'] ?>'><?php echo $product['productName'] ?></a>
                    <div class="rating mb-10">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="card-text price-net" style="margin-bottom: 0; text-decoration:line-through; opacity: 0.5 "><?php echo number_format($product['price'], 2) ?>.$</p>
                    <p class="card-text " style="margin-bottom: 1rem; font-size: large; "><?php echo number_format($product['saleprice'], 2) ?>.$</p>
                    <div class="fb-like" data-href="<?php echo BASE_URL?>" data-width="" data-layout="button_count" data-action="like" data-size="small" data-share="true"></div>
                    <a href="<?php echo BASE_URL ?>cart/add/<?php echo $product['productid'] ?>/<?php echo $product['productName'] ?>/<?php if ($product['saleprice'] <> 0) echo $product['saleprice'];else echo $product['price'] ?>" class="btn btn-card">Mua ngay</a>
                </div>
            </div>
        </div>

    <?php } ?>
    <div class="row">
        <?php
        $paging->createLinks();
        ?>
    </div>
</div>