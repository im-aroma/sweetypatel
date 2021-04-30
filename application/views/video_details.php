<div class="h-100 py-2"></div>

<div class="container">

    <nav aria-label="breadcrumb ">

        <ol class="breadcrumb bg-warning ">

            <li class="breadcrumb-item d-flex align-items-center"><i class="fas fa-house-damage text-dark mr-1"></i><a
                    class="text-dark" href="<?php echo base_url(); ?>">Home</a></li>
            <li class="breadcrumb-item d-flex align-items-center"><i class="fas fa-video text-dark mr-1"></i><a
                    class="text-dark" href="<?php echo base_url(); ?>videos">Videos</a></li>
            <?php
                     foreach($result as $result_val)
                     {  
               ?>
            <li class="breadcrumb-item active d-flex align-items-center"><i
                    class="fas fa-photo-video mx-2"></i><?php echo $result_val['sub_video_title']; ?>

            </li>
            <?php }  ?>
        </ol>

    </nav>

</div>
<style>
</style>
<div class="container">
    <?php 

          

foreach($result as $result_val)

{



?>
    <div class=" px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="h3 text-center font-weight-bold mb-4 text-warning"><?php echo $result_val['sub_video_title']; ?></h1>
    </div>
    <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="<?php echo $result_val['video_link']; ?>?rel=0?version=3&autoplay=1&showinfo=0&loop=1"></iframe>
    </div>
    <?php } ?>

</div>
<hr class="p-2">
<div class="container">

    <div class="other-cat">
        <h3 class="h6 py-3">Other Videos You May Like</h3>
        <div class="row">
        <?php 

       

              foreach($get_rand_video_list as $get_rand_video_list_val)

              { 

              ?>
            <div class="col-6 col-md-4 col-lg-3  pb-3">
                <div class="card bg-lbrown">
                    <a
                        href="<?php echo base_url(); ?>videos/<?php echo str_replace(' ','-',$get_rand_video_list_val['sub_video_title']);  ?>/<?php echo $get_rand_video_list_val['video_id']; ?>">
                        <img class="img-fluid rounded-top"
                            src="<?php echo base_url(); ?>uploads/video_images/<?php echo $get_rand_video_list_val['video_imge']; ?>"
                            alt="<?php echo $get_rand_video_list_val['video_alt_title']; ?>"></a>
                    <div class="card-body p-2">
                        <h2 class="card-title text-uppercase text-center m-0 text-white-50 h6">
                        <?php echo $get_rand_video_list_val['sub_video_title']; ?></h2>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>