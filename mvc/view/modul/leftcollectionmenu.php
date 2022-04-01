<?php
   $collectionmodel=new CollectionModel;
   $collects=$collectionmodel->getAll(['trash'=>0, 'status'=>1]);

?>
<div class="cat-item" data-id="2">
                            <button>Bộ Sưu Tập Theo Mùa</button>
                            <div class="menu-dropdown menu-dropdown-2" >
                              <?php foreach($collects as $collect){?>
                                    <a class="dropdown-item" href="<?php echo BASE_URL?>product/productByCollection/<?php echo $collect['alias'].'/'.LIMIT.'/0'?>"><?php echo $collect['collectionName']?>
                                    </a>
                                <?php }?>
                            </div>
                        </div>            