<?php
     $currentpost=$data['currentpost'];
     $samePosts=$data['samePosts'];
?>

<div class="welcome py-sm-5 py-4">
    <div class="container py-xl-4 py-lg-2">
        <!-- tittle heading -->
        <h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
            <span><?php echo $currentpost['postTitle']?></span></h3>
        <!-- //tittle heading -->
        <div class="row justify-content-center">
            <div class="col-lg-11">
                <div class="section-tittle mb-60 text-center pt-10">
                    <p class="pera"><?php echo $currentpost['detail'] ?></p>
                </div>
                
            </div>
        </div>
    </div>
    
</div>

<section class="post-related">
         <div class="container">
             <h2>Bài Viết Liên Quan</h2>
            <div class="row ">
               <?php foreach($samePosts as $samePost){ ?>

                <div class="row justify-content-center">
                    <div class="col-lg-2 welcome-right-top mt-lg-0 mt-sm-5 mt-4">
                        <img src="<?php echo BASE_URL;?>public/upload/<?php echo $samePost['image']?>" class="img-fluid" alt=" ">
                    </div>
                    <div class="col-lg-6 welcome-left related">
                        <h3><a class="card-title" style="min-height: 71px" href='<?php echo BASE_URL.'post/showpost/'.$samePost['alias'] ?>'><?php echo $samePost['postTitle'] ?></a></h3>
                        <h4 class="my-sm-3 my-2" ><?php echo $samePost['summary']?></h4>
                    </div>
                </div>

               <?php } ?>
            </div>
         </div>
      </section>

