<?php
   $linkmodel = new LinkModel;
   $links = $linkmodel->getAll(['trash'=>0, 'status'=>1, 'position'=>'bottommenu2']);
?>
<div class="col-xl-2 col-lg-2 col-md-4 col-sm-4">
   <div class=" single-footer">
      <div class="footer-title">
         <h4>Chính sách</h4>
         <div class="pad-left">
            <ul>
               <?php foreach($links as $link){?>
               <li>
                  <a href="<?php echo BASE_URL.$link['link'] ?>"><?php echo $link['title']?></a>
               </li>
               <?php }?>
            </ul>
         </div>
      </div>
   </div>
</div>

                     