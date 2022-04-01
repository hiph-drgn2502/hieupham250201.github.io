<?php
$catmodel = new CategoryModel;
$cats = $catmodel->getAll(['trash' => 0, 'status' => 1]);

?>
<div class="cat-item" data-id="1">
    <button>Danh Mục Sản Phẩm</button>
    <div class="menu-dropdown menu-dropdown-1">
        <?php foreach ($cats as $cat) { ?>
            <a class="dropdown-item" href="<?php echo BASE_URL ?>product/productByCat/<?php echo $cat['alias'] . '/' . LIMIT . '/0' ?>"><?php echo $cat['catName'] ?>
            </a>
        <?php } ?>
    </div>
</div>