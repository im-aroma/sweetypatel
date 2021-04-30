<div class="h-100 py-2"></div>

<div class="container">

    <nav aria-label="breadcrumb ">

        <ol class="breadcrumb bg-warning ">

            <li class="breadcrumb-item d-flex align-items-center"><i class="fas fa-house-damage text-dark mr-1"></i><a
                    class="text-dark" href="<?php echo base_url(); ?>">Home</a></li>
            <li class="breadcrumb-item d-flex align-items-center"><i class="fas fa-images text-dark mr-1"></i><a
                    class="text-dark" href="<?php echo base_url(); ?>gallery">Gallery</a></li>
            <?php
                     foreach($result as $result_val)
                     {  
               ?>
            <li class="breadcrumb-item active d-flex align-items-center"><i
                    class="fas fa-female mx-2"></i><?php echo $result_val['title']; ?>

            </li>
            <?php }  ?>
        </ol>

    </nav>

</div>
<style>
.card {
    margin-bottom: 30px;
    border: 0;
    box-shadow: 0 0 2rem 0 rgba(136, 152, 170, .15);
}

.card-profile-image {
    position: relative;
}

.card-profile-image img {
    position: absolute;
    left: 50%;
    max-width: 140px;
    transition: all .15s ease;
    transform: translate(-50%, -50%) scale(1);
    border: 3px solid #fff;
    border-radius: .375rem;
}

.card-profile-stats {
    padding: 1rem 0;
}

.card-profile-stats>div {
    margin-right: 1rem;
    padding: .875rem;
    text-align: center;
}

.card-profile-stats>div .heading {
    font-size: 1rem;
    font-weight: 700;
    display: block;
}

.heading {
    font-size: .95rem;
    font-weight: 600;
    letter-spacing: .025em;
    text-transform: uppercase;
}

.card-profile-stats>div .description {
    font-size: .875rem;
    color: #d4d4d4;
}

.description {
    font-size: .875rem;
}

.table {
    color: #ffffff;
}

.rating li,
.side-nav .social li {
    display: inline-block;
}

.rev-data {
    height: 380px;
    overflow: auto;
}

/* width */
::-webkit-scrollbar {
    width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
    background: #fff;
}

/* Handle */
::-webkit-scrollbar-thumb {
    background: #fb3;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
    background: #555;
}
</style>
<div class="container">
    <div class="card card-profile bg-lbrown">
        <img src="<?php echo base_url(); ?>assets/img/banner.jpg" alt="Image placeholder" class="card-img-top">
        <div class="row justify-content-center">
            <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                    <?php 

                // print_r($result);

                foreach($result as $result_val)

                        { 



                            $pro_det_imge = explode(',',$result_val['imge']);
                            $pro_det_alt_title = explode(',',$result_val['alt_title']);

                    ?>
                    <img width="160" height="147"
                        src="<?php echo base_url(); ?>uploads/profile/<?php echo $pro_det_imge[0]; ?>"
                        class="rounded-circle"
                        alt="<?php if(!empty($pro_det_alt_title[0])) { echo $pro_det_alt_title[0]; }  ?>">
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="card-header text-center border-bottom border-mum pt-8 pt-md-4 pb-0 pb-md-4">
            <div class="d-flex justify-content-between">
                <a href="javascript:;" class="btn btn-sm btn-warning text-dark mr-4 ">Book Now</a>
                <a href="javascript:;" class="btn btn-sm btn-danger float-right">07070801847</a>
            </div>
        </div>
        <?php 

            foreach($result as $result_val)

                    { 

            ?>
        <div class="card-body pt-0">
        <div class="text-center">
        <h1 class="h4 font-weight-300 text-white mt-3">
                    <i class="fas fa-users-class fa-xs mr-2"></i><?php echo $result_val['description']; ?>
                </h1>
                <div>
            <div class="row">
                <div class="col">
                    <div class="card-profile-stats d-flex justify-content-center">
                        <div>
                            <span class="heading text-white-50"><?php echo $result_val['age']; ?></span>
                            <span class="description">Age</span>
                        </div>
                        <div>
                            <span class="heading text-white-50"><?php echo $result_val['height']; ?></span>
                            <span class="description">Height</span>
                        </div>
                        <div>
                            <span class="heading text-white-50"><?php echo round( $result_val['rating']); ?>.0</span>
                            <span class="description">Rating</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <h5 class="h5">
                    <?php echo $result_val['title']; ?><span class="font-weight-light">,
                        <?php echo $result_val['age']; ?></span>
                </h5>
               
            </div>
        </div>
        <?php } ?>
    </div>
    <div class="row">
        <div class="col-lg-8 ">
            <div class="bg-lbrown">
                <div class="card-header bg-warning text-dark"><i class="fas fa-photo-video mr-2"></i>
                    <?php echo $result_val['title']; ?> Profile
                    Gallery</div>
                <?php 

                    // print_r($result);
         
                   foreach($result as $result_val)
         
                   { 
         
         
         
                      $pro_det_imge = explode(',',$result_val['imge']);
                      $pro_det_alt_title = explode(',',$result_val['alt_title']);
         
            ?>
                <div class="row p-3 mt-3">
                    <?php

                                
                    $i = 0;
                    foreach($pro_det_imge as $pro_det_imge_val)

                    {  

                    ?>
                    <div class="col-6 col-sm-6 col-md-6 col-lg-4 mb-3 px-2">
                        <img class="rounded img-fluid"
                            src="<?php echo base_url(); ?>uploads/profile/<?php echo $pro_det_imge_val; ?>"
                            alt="<?php if(!empty($pro_det_alt_title[$i])) { echo $pro_det_alt_title[$i]; }  ?>">
                    </div>
                    <?php $i++; } ?>
                </div>
                <?php }  ?>
            </div>
        </div>
        <div class="col-lg-4">
            <?php 

                foreach($result as $result_val)

                { 



                $pro_cat = explode(',',$result_val['cat_title']);

                $pro_loc = explode(',',$result_val['loc_title']);



                ?>
            <ul class="list-group">
                <li class="list-group-item bg-warning text-dark"><i
                        class="fas fa-info-circle mr-2"></i><?php echo $result_val['title']; ?> Details
                </li>
                <li class="list-group-item bg-lbrown text-white">
                    <i class="fas fa-female text-warning mx-1"></i>
                    <span class="opacity-5">Nationality:</span>&nbsp;Indian Age (<?php echo $result_val['age']; ?>)
                </li>
                <li class="list-group-item bg-lbrown text-white">
                    <i class="fas fa-car text-warning"></i>
                    <span class="opacity-5">Place of Service:</span>&nbsp;Outcall, Incall
                </li>
                <li class="list-group-item bg-lbrown text-white">
                    <i class="fas fa-palette text-warning"></i>
                    <span class="opacity-5">Hair color:</span>&nbsp;Brunette
                </li>
                <li class="list-group-item bg-lbrown text-white">
                    <i class="fas fa-shapes text-warning"></i>
                    <span class="opacity-5">Body Type:</span>&nbsp;Curvy
                </li>
                <li class="list-group-item bg-lbrown text-white">
                    <i class="fas fa-language text-warning"></i>
                    <span class="opacity-5">Language:</span>&nbsp;<?php echo $result_val['language']; ?>
                </li>
                <li class="list-group-item bg-lbrown text-white">
                    <i class="fas fa-location text-warning"></i>
                    <span class="opacity-5">Location:</span>&nbsp;<?php echo $pro_loc[0]; ?>
                </li>
            </ul>
            <?php } ?>
            <div class="card-header bg-warning text-dark mt-3 rounded-top"><i class="fas fa-rupee-sign mr-2"></i>Price
                List</div>
            <table class="table bg-lbrown rounded">

                <thead>
                    <tr>
                        <th scope="col">Time</th>
                        <th scope="col">Incall</th>
                        <th scope="col">Outcall</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border-top-0">2 Hours</td>
                        <td class="border-top-0">10000</td>
                        <td class="border-top-0">10000</td>
                    </tr>
                    <tr>
                        <td>3 Hours</td>
                        <td>15000</td>
                        <td>15000</td>
                    </tr>
                    <tr>
                        <td>Full Night</td>
                        <td>35000</td>
                        <td>35000</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="container my-4">
    <div class="card text-white bg-lbrown ">
        <div class="card-header bg-warning text-dark"><i class="fas fa-address-card mr-2"></i>About
            <?php echo $result_val['title']; ?></div>
        <div class="card-body">
            <p class="opacity-5 pb-5"><?php echo $result_val['abt_profile']; ?></p>

        </div>
    </div>
</div>
<div class="container my-4">
    <div class="card-header bg-warning text-dark"><i class="fas fa-user-edit mr-2"></i>Real Review By Client</div>
    <div class="row px-3">
        <div class="col-lg-8 bg-lbrown rounded ">
            <h3 class="text-center h5 py-3">Client Review's</h3>
            <section class="rev-data">
                <?php 

                if(!empty($get_rew_list))

                {   
                $j = 0;
                foreach($get_rew_list as $get_rew_list_val)

                {   

                ?>
                <div class="testimonial border-bottom border-mum mb-2">
                    <div class="text-center pt-4">
                        <p>
                            <i class="fas fa-quote-left pr-2"></i> Veri nice girl
                        </p>
                        <h5><?php echo $get_rew_list_val['name']; ?></h5>
                        <ul class="rating pl-0 text-warning">
                            <?php 
                             if(!empty($get_rew_list_val['rating']))
                             {
                                for($i=0;$i<round($get_rew_list_val['rating']);$i++)
                                {
                       ?>
                            <li>
                                <i class="fas fa-star fa-sm text-warning"></i>
                            </li>
                            <?php } } else { ?>
                            <li>
                                Not Rated
                            </li>
                            <?php  } ?>
                        </ul>
                    </div>
                </div>
                <?php } } ?>

            </section>
        </div>
        <div class="col-lg-4 bg-lbrown ">

            <div class="card card-body bg-transparent ">
                <h5>Write a Review</h5>
                <form>
                    <div class="form-group">
                        <label for="InputName"
                            class=" col-form-label col-form-label-sm text-light opacity-5">Name</label>
                        <input required="" type="text" class="form-control form-control-sm bg-dark text-white" id="name"
                            name="name" aria-describedby="NameHelp" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <label for="InputMessage"
                            class=" col-form-label col-form-label-sm text-light opacity-5">Message</label>
                        <input required="" type="message" name="content"
                            class="form-control form-control-sm bg-dark text-white" id="comment" placeholder="Message">
                    </div>

                    <div class="form-group">

                        <label for="InputRating"
                            class=" col-form-label col-form-label-sm text-light opacity-5">Rating</label>
                        <select required="" name="rating" class="form-control form-control-sm bg-dark text-white"
                            id="inputGroupSelect01">
                            <option selected>Rating...</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                            <option value="4">Four</option>
                            <option value="5">Five</option>
                        </select>

                    </div>

                    <input type="hidden" class="btn btn-warning btn-sm" value="<?php echo $post_id; ?>" name="post_id"
                        id="post_id">
                    <input type="submit" name="review" id="review" class="btn btn-warning btn-sm text-dark" value="Post Review">
                    <!-- <button type="button" data-toggle="collapse" data-target="#addcomment1" aria-expanded="false" aria-controls="collapseExample" class="btn btn-danger btn-sm">Cancel</button> -->
                </form>
            </div>
        </div>
    </div>
</div>