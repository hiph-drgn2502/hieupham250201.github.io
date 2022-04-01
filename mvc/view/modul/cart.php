<?php
    $cart=new Cart;
    $cartItems=$cart->getItems();
    $_SESSION['update']=false;
?>
<form action="<?php echo BASE_URL?>cart/update" method="post">
    <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">GIỎ HÀNG</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                    <div class="col-md-1">STT</div>
                    <div class="col-md-3">Tên hàng</div>
                    <div class="col-md-2">Đơn giá</div>
                    <div class="col-md-2">Số lượng</div>
                    <div class="col-md-4">Thành tiền</div>
                    </div>
                    <?php 
                        if(empty($cartItems)){
                            echo "Giỏ hàng rỗng";
                        }else{
                            $i=1;
                            foreach($cartItems as $productid=>$item){
                    ?>
                        <div class="row">
                            <div class="col-md-1"><?php echo $i++?></div>
                            <div class="col-md-3"><?php echo $item['productName']?></div>
                            <div class="col-md-2"><?php echo $item['price']?></div>
                            <div class="col-md-2">
                                <!-- <span class="minus"><i class="fas fa-minus"></i></span> -->
                                    <input class="quantity" name="<?php echo $productid; ?>" step="1" type="number" min="1" max="20" value = "<?php echo $item['quantity']?>">
                                <!-- <span class="plus"><i class="fas fa-plus"></i></span> -->
                            </div>
                            <div class="col-md-3"><?php echo $cart->getSubTotal($productid)?></div>
                            <div class="col-md-1"><td><a href="<?php echo BASE_URL?>cart/remove/<?php echo $productid?>" onclick="return confirm('Bạn muốn hủy đặt sản phẩm này ?')"><i class="fa fa-times-circle text-danger"></i></a></div>
                        </div>
                    <?php 
                            }
                        }
                    ?>
                    <div class="row" >
                    <div class="col-md-8">Tổng cộng</div>
                    <div class="col-md-4"><?php echo $cart->getTotal();?></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" value='Save changes'>
                    <a href="<?php echo BASE_URL?>cart/checkout" class="btn btn-primary"> Check Out </a>
                </div>
            </div>
        </div>
    </div>
</form>
<?php
    if($_SESSION['update']){
        echo "<script>carticon.click()</script>";
        unset($_SESSION['update']);
    }
?>