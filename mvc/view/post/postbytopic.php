<?php
    $posts=$data['posts'];
    $paging=$data['paging'];
    $topic=$data['topic'];

?>

<div class="welcome py-sm-5 py-4">
    <div class="container py-xl-4 py-lg-2">
        <!-- tittle heading -->
        <h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
            <span><?php echo $topic['topicName']?></span></h3>
        <!-- //tittle heading -->
        <?php foreach($posts as $post){?>
            <div class="row justify-content-center">
                <div class="col-lg-2 welcome-right-top mt-lg-0 mt-sm-5 mt-4">
                    <img src="<?php echo BASE_URL;?>public/upload/<?php echo $post['image']?>" class="img-fluid" alt=" ">
                </div>
                <div class="col-lg-6 welcome-left">
                    <h3><a class="card-title" style="min-height: 71px" href='<?php echo BASE_URL.'post/showpost/'.$post['alias'] ?>'><?php echo $post['postTitle'] ?></a></h3>
                    <h4 class="my-sm-3 my-2" ><?php echo $post['summary']?></h4>
                </div>
            </div>
        <?php }?>
        <div class="row justify-content-center">
            <?php 
                $paging->createLinks();
            ?>

        </div>
    </div>
    
</div>