<style>
.ekko-lightbox {
    display: -ms-flexbox !important;
    display: flex !important;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-pack: center;
    justify-content: center;
    padding-right: 0 !important;
    margin-top: 0% !important;
}

.ekko-lightbox-nav-overlay a:last-child span {
    text-align: right;
}

.ekko-lightbox-container {
    position: relative;
}

.ekko-lightbox-container>div.ekko-lightbox-item {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    width: 100%;
}

.ekko-lightbox-nav-overlay {
    z-index: 1;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: -ms-flexbox;
    display: flex;
}

.ekko-lightbox-nav-overlay a {
    -ms-flex: 1;
    flex: 1;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: center;
    align-items: center;
    opacity: 0;
    transition: opacity .5s;
    color: #fff;
    font-size: 30px;
    z-index: 1;
}

.ekko-lightbox-nav-overlay a span {
    padding: 0 30px;
}

.ekko-lightbox-nav-overlay a>* {
    -ms-flex-positive: 1;
    flex-grow: 1;
}

.ekko-lightbox .modal-footer {
    text-align: left;
}
</style>
<!-- section 1 -->
<div class="container my-4">
    <div class="row">
        <div class="col-lg-8 col-xl-9">
            <div class="row">
                <div class="col-12">
                    <div class="position-relative card card-body card-top-image mb-4 top-gallery">
                        <div class="addeditmenu" data-key="imagestop"></div>
                        <?php 

                            foreach($res as $result_val)
                            { 
                    
                    
                    
                                $pro_det_imge = explode(',',$result_val['imge']);
                                $pro_det_alt_title = explode(',',$result_val['alt_title']);
                                $pro_services      = explode(',',$result_val['service_name']);
                    
                        ?>
                        <div class="single-images-slider2-nav clearfix">
                            <?php

                                                        
                        $i = 0;
                        foreach($pro_det_imge as $pro_det_imge_val)

                        {  

                        ?>
                            <div class="gallery-item">
                                <figure>
                                    <a href="<?php echo base_url(); ?>uploads/profile/<?php echo $pro_det_imge_val; ?>"
                                        data-toggle="lightbox" data-gallery="example-gallery" data-type="image">
                                        <div class="read_more"><span>view</span></div>
                                    </a>
                                    <img src="<?php echo base_url(); ?>uploads/profile/<?php echo $pro_det_imge_val; ?>"
                                        class="img-fluid lazy"
                                        alt="<?php if(!empty($pro_det_alt_title[$i])) { echo $pro_det_alt_title[$i]; }  ?>">
                                </figure>
                            </div>
                            <?php $i++; } ?>
                        </div>
                        <?php }  ?>





                        <div class="pt-4 mx-2">
                            <div class="addeditmenu" data-key="content"></div>
                            <h1 class="h4 mb-4">
                                <?php echo $result_val['title']; ?>
                                <div class="addeditmenu" data-key="titletop"></div>
                            </h1>
                            <i class="fa fa-flame text-danger"></i> <span
                                class="shortcode_excerpt"><?php echo $result_val['description']; ?></span>
                            <hr>
                            <div class="card-text">
                                <p>Hi, I am Kiara ! Highly reccomanded Istanbul escort. I’m a sensitive genuine turkish
                                    girl, ready to offer you the most unforgettable experience that you had with an
                                    escort in Istanbul , so far. I can be your queen or your slave…it’s only up to you
                                    how you wanted to be. My place or your place!? Not a problem. Dinner or bedroom!?
                                    Why not both experiences?! Either way, you’ll never forget our meeting and you’ll
                                    want to push that “repeat” button. I am true, but quiet, and always worth a sin. I
                                    especially like it when desire is being built very slowly until there is no
                                    restraint. Sensual and delicate? At the same time, I will explore your body by
                                    kissing, comforting your nipples and breathing lightly in your ear, while your hands
                                    sink your body and create a fire.</p>
                                <div id="ppt_keywords"></div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card  p-lg-4 position-relative overflow-hidden">
                        <div class="bg-image" data-bg="uploads/profile/kiara-escorts-istanbul-1.jpg"
                            style="background-image: url(&quot;uploads/profile/kiara-escorts-istanbul-1.jpg&quot;);">
                        </div>
                        <div class="overlay-inner opacity-5"></div>
                        <div class="bg-content text-white p-4">
                            <div class="addeditmenu" data-key="images"></div>
                            <h5 class="card-title">My Gallery</h5>
                            <div class="small mb-3"> 6 photos</div>
                            <a onclick="processLogin();" href="javascript:void(0);" class="btn btn-system "><i
                                    class="fa fa-camera mr-2 text-primary shadow-sm"></i> View Photos</a>
                        </div>
                    </div>
                    <!--msg model -->
                    <div class="images-modal-wrap shadow preload-hide">
                        <div class="images-modal-wrap-overlay"></div>
                        <div class="images-modal-item">
                            <div class="images-modal-container">
                                <div class="card-body">
                                    <div id="imagesrajaxwindow"></div>
                                </div>
                                <div class="card-footer text-center">
                                    <button type="button" onclick="jQuery('.images-modal-wrap').fadeOut(400);"
                                        class="btn btn-system shadow-sm btn-xl">Close Window</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card p-lg-4 position-relative overflow-hidden">
                        <i class="fa fa-smile fa-8x text-primary"
                            style="position:absolute; bottom:-25px; right:-15px;"></i>
                        <div class="bg-image" data-bg="uploads/profile/kiara-istanbul-escort-girl-1.jpg"
                            style="background-image: url(&quot;uploads/profile/kiara-istanbul-escort-girl-1.jpg&quot;);">
                        </div>
                        <div class="overlay-inner opacity-8"></div>
                        <div class="bg-content text-white p-4">
                            <div class="addeditmenu" data-key="video"></div>
                            <h5 class="card-title">Videos</h5>
                            <div class="small mb-3"> 0 vids</div>
                            <a onclick="processLogin();" href="javascript:void(0);" class="btn btn-system "><i
                                    class="fa fa-video text-primary mr-2"></i> Watch Videos</a>
                        </div>
                    </div>
                    <!--msg model -->
                    <div class="video-modal-wrap shadow preload-hide">
                        <div class="video-modal-wrap-overlay"></div>
                        <div class="video-modal-item">
                            <div class="video-modal-container">
                                <div class="card-body">
                                    <div id="videoplayerajaxwindow"></div>
                                </div>
                                <div class="card-footer text-center">
                                    <button type="button" onclick="jQuery('.video-modal-wrap').fadeOut(400);"
                                        class="btn btn-system shadow-sm btn-xl">Close Window</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card " id="block-customfields">
                        <div class="card-body">
                            <div class="p-lg-4">
                                <div class="addeditmenu" data-key="customfields"></div>
                                <div id="single-display-fields">
                                    <h5 class="card-title mb-4">Details</h5>
                                    <div class="ppt_shortcode_fields row style-1">
                                        <div class="col-xl-6">
                                            <div class=" mb-3 fieldrow small fieldtype-taxonomy">
                                                <div class="title btn-block mb-3">Ethencity</div>
                                                <div class="text"><?php echo $result_val['ethencity']; ?></div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class=" mb-3 fieldrow small fieldtype-taxonomy">
                                                <div class="title btn-block mb-3">Sexuality</div>
                                                <div class="text"><?php echo $result_val['sexuality']; ?></div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class=" mb-3 fieldrow small fieldtype-taxonomy">
                                                <div class="title btn-block mb-3">Gender</div>
                                                <div class="text"><?php echo $result_val['gender']; ?></div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class=" mb-3 fieldrow small fieldtype-input">
                                                <div class="title btn-block mb-3">Location</div>
                                                <div class="text"><?php echo $result_val['origin']; ?></div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <h6 class="mb-4">What do I look like?</h6>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class=" mb-3 fieldrow small fieldtype-taxonomy">
                                                <div class="title btn-block mb-3">My Body</div>
                                                <div class="text"><?php echo $result_val['body']; ?></div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class=" mb-3 fieldrow small fieldtype-input">
                                                <div class="title btn-block mb-3">My Height</div>
                                                <div class="text"><?php echo $result_val['height']; ?></div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class=" mb-3 fieldrow small fieldtype-input">
                                                <div class="title btn-block mb-3">Dress Size</div>
                                                <div class="text"><?php echo $result_val['dress_size']; ?></div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class=" mb-3 fieldrow small fieldtype-input">
                                                <div class="title btn-block mb-3">Bust size</div>
                                                <div class="text"><?php echo $result_val['bust_size']; ?></div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <h6 class="mt-4 mb-4">My Habbits</h6>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class=" mb-3 fieldrow small fieldtype-taxonomy">
                                                <div class="title btn-block mb-3">Drinking</div>
                                                <div class="text"><?php echo $result_val['drinking']; ?></div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class=" mb-3 fieldrow small fieldtype-taxonomy">
                                                <div class="title btn-block mb-3">Smoking</div>
                                                <div class="text"><?php echo $result_val['smoking']; ?></div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class=" mb-3 fieldrow small fieldtype-input">
                                                <div class="title btn-block mb-3">WhatsApp Number</div>
                                                <div class="text"><?php echo $result_val['whatsapp_num']; ?></div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class=" mb-3 fieldrow small fieldtype-input">
                                                <div class="title btn-block mb-3">URL</div>
                                                <div class="text"><a href="index.html"
                                                        class="btn btn-sm btn-system shadow-sm" rel="nofollow"
                                                        target="_blank"><i class="fa fa-link mr-2 text-primary"></i>
                                                        <?php echo $result_val['url']; ?></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card  position-relative " style="overflow:hidden">
                        <div class="card-body ">
                            <div class="p-lg-4">
                                <div id="single-display-features">
                                    <h5 class="card-title mb-4">Services</h5>
                                    <div class="addeditmenu" data-key="features"></div>
                                    <div style="margin:-10px;">
                                    <?php        
                                          for($i=0;$i<count($pro_services);$i++)
                                          {       
                                    ?>
                                    <span class="btn-rounded bg-light float-left p-2 px-3 rounded small m-2">
                                    <span class="text-primary mr-2"><i class="fa fa-check"></i> </span>
                                    <span class="opacity-8"><?php echo $pro_services[$i]; ?></span> 
                                    </span>
                                    <?php  } ?>
        
                           </div>
                           <div class="clearfix "></div>
                        </div>
                        <hr class="my-4">
                        <div class="addeditmenu" data-key="openinghours"></div>
                        <h5 class="card-title">When can we meet?</h5>
                        <ul class="working-hour list-unstyled mt-4">
                           <li> Monday        <span>
                              9:00 AM - 2:00 PM    </span>
                           </li>
                           <li> Tuesday        <span>
                              9:00 AM - 2:00 PM    </span>
                           </li>
                           <li> Wednesday        <span>
                              9:00 AM - 2:00 PM    </span>
                           </li>
                           <li> Thursday        <span>
                              9:00 AM - 2:00 PM    </span>
                           </li>
                           <li> Friday        <span>
                              9:00 AM - 2:00 PM    </span>
                           </li>
                           <li> Saturday        <span>
                              9:00 AM - 2:00 PM    </span>
                           </li>
                           <li> Sunday        <span>
                              9:00 AM - 2:00 PM    </span>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-lg-4 col-xl-3">
         <div class="sidebar-fixed-contentxx">
            <div class="card card-listing">
               <div class="card-body">
                  <div class="float-left">
                     <div class="opacity-5 small mt-4">  </div>
                  </div>
                  <div class="float-right">
                     <div class="rating-score-small">
                        <span>No Rating<em><a href="javascript:void(0)" onclick="processCommentAll();">0 Reviews</a></em></span>
                        <strong class="bg-primary">-</strong>
                     </div>
                  </div>
                  <div class="clearfix"></div>
                  <hr>
                  <div class="h6">
                     <div class="text-center bg-light p-3">
                        <i class="fa fa-phone-alt mr-2 text-primary"></i> 00905550267000      
                     </div>
                  </div>
                  <div class="mb-4 pb-4" style="display:none;">
                     <h5 class="card-title ml-lg-4">Comments</h5>
                     <div class="my-4 clearfix ml-lg-4">
                        <span class="btn-rounded bg-light  p-2 px-3 rounded small">
                        <span class="mr-2"><i class="fa fa-comments"></i> </span>
                        <span class="opacity-8">No Reviews Found</span> 
                        </span>
                     </div>
                  </div>
                  <div class="clearfix"></div>
                  <div id="commentlistwrap" style="display:none;">
                  </div>
                  <a href="javascript:void(0);" onclick="processLogin();" class="btn btn-block btn-system shadow-sm btn-xl btn-icon icon-before mt-2 mb-2"><i class="far fa-comment-alt mr-2 text-primary"></i> Message Me</a>
                  <a href="https://api.whatsapp.com/send?phone=900000000000" target="_blank" rel="nofollow" class="btn btn-block btn-system shadow-sm btn-xl btn-icon icon-before mt-2 mb-2"><i class="fab fa-whatsapp mr-2 text-primary"></i> WhatsApp Me!</a>
                  <div class="divider-or"><span class="mt-n1">Or</span></div>
                  <a href="javascript:void(0);" onclick="processLogin();" class="btn btn-block btn-light mt-2"> Add Favorites</a>
                  <a href="javascript:void(0)" onclick="processLogin();" class="btn btn-block btn-light mt-2"> Write Review</a>
               </div>
            </div>
            <div class="card card-listing ">
               <div class="filter-content collapse show nocolapse" id="collapse-sec-sidebar">
                  <div class="card-body">
                     <div class="addeditmenu" data-key="callrates"></div>
                     <h5>My Rates</h5>
                     <ul class="list-group list-group-flush small mb-3">
                        <li class="list-group-item px-0 d-flex justify-content-between align-items-center"> <span><i class="fa fa-clock mr-2"></i> 1 Hour</span> <span class="inline-flex items-center font-weight-bold order-status-icon status-2"> <span class="pr-2px leading-relaxed whitespace-no-wrap">
                           <span class="format-usd">$200</span>
                           </span> </span> <span class="inline-flex items-center font-weight-bold order-status-icon status-1"> <span class="pr-2px leading-relaxed whitespace-no-wrap">
                           <span class="format-usd">$250</span>
                           </span> </span> 
                        </li>
                        <li class="list-group-item px-0 d-flex justify-content-between align-items-center"> <span><i class="fa fa-clock mr-2"></i> 2 Hours</span> <span class="inline-flex items-center font-weight-bold order-status-icon status-2"> <span class="pr-2px leading-relaxed whitespace-no-wrap">
                           <span class="format-usd">$300</span>
                           </span> </span> <span class="inline-flex items-center font-weight-bold order-status-icon status-1"> <span class="pr-2px leading-relaxed whitespace-no-wrap">
                           <span class="format-usd">$350</span>
                           </span> </span> 
                        </li>
                        <li class="list-group-item px-0 d-flex justify-content-between align-items-center"> <span><i class="fa fa-clock mr-2"></i> 3 Hours</span> <span class="inline-flex items-center font-weight-bold order-status-icon status-2"> <span class="pr-2px leading-relaxed whitespace-no-wrap">
                           <span class="format-usd">$600</span>
                           </span> </span> <span class="inline-flex items-center font-weight-bold order-status-icon status-1"> <span class="pr-2px leading-relaxed whitespace-no-wrap">
                           <span class="format-usd">$650</span>
                           </span> </span> 
                        </li>
                        <li class="list-group-item px-0 d-flex justify-content-between align-items-center"> <span><i class="fa fa-clock mr-2"></i> 6 Hours</span> <span class="inline-flex items-center font-weight-bold order-status-icon status-2"> <span class="pr-2px leading-relaxed whitespace-no-wrap">
                           <span class="format-usd">$900</span>
                           </span> </span> <span class="inline-flex items-center font-weight-bold order-status-icon status-1"> <span class="pr-2px leading-relaxed whitespace-no-wrap">
                           <span class="format-usd">$900</span>
                           </span> </span> 
                        </li>
                        <li class="list-group-item px-0 d-flex justify-content-between align-items-center"> <span><i class="fa fa-clock mr-2"></i> 12 Hours</span> <span class="inline-flex items-center font-weight-bold order-status-icon status-2"> <span class="pr-2px leading-relaxed whitespace-no-wrap">
                           <span class="format-usd price-medium">$1,200</span>
                           </span> </span> <span class="inline-flex items-center font-weight-bold order-status-icon status-1"> <span class="pr-2px leading-relaxed whitespace-no-wrap">
                           <span class="format-usd price-medium">$1,250</span>
                           </span> </span> 
                        </li>
                     </ul>
                     <div class="text-center text-lg-right mb-3"> <span class="inline-flex items-center font-weight-bold order-status-icon status-2  mr-2"> <span class="dot mr-2"></span> <span class="pr-2px leading-relaxed whitespace-no-wrap"> Incall</span> </span> <span class="inline-flex items-center font-weight-bold order-status-icon status-1"> <span class="dot mr-2"></span> <span class="pr-2px leading-relaxed whitespace-no-wrap"> Outcall</span> </span> </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<!-- section 2 -->
<div id="listing1" class="border-top">
   <div class="container">
      <div class="row">
         <div class="col-12">
            <a href="<?php echo base_url(); ?>mumbai-escort-girls-gallery" class="btn btn-system btn-sm float-right
                                        mt-4 hide-mobile"><i class="fa fa-search mr-2 text-primary"></i> View All</a>
                                        <h5 class="card-title my-4">Recommended For You</h5>
                                        <div class="clearfix"></div>
                                        <div class="related-listings owl-carousel owl-theme">
                                            <?php 
                // echo '<pre>'; print_r($get_rand_prof); 
                foreach($get_rand_prof as $res)
                {
                $pro_post_imge = explode(',',$res['imge']);
                $pro_alt_title = explode(',',$res['alt_title']);
                ?>
                                            <div class="new-search info  no-resize img-user img-user-big bg-none"
                                                data-pid="318">
                                                <figure>
                                                    <a
                                                        href="<?php echo base_url()?>profile/<?php echo $res['title']?>/<?php echo $res['id']?>">
                                                        <img src="<?php echo base_url();?>uploads/profile/<?php echo $pro_post_imge[1]?>"
                                                            alt=" <?php echo $pro_alt_title[1];?>"
                                                            class="img-fluid lazy"
                                                            alt="<?php echo $pro_alt_title[1];?>"> </a>
                                                    <div class="list-info-pop bg-secondary">
                                                        <ul class="list-unstyled">
                                                            <!-- <li> <span><?php echo $res['availability'];?></span> </li> -->
                                                            <li> <span>Height</span><?php echo $result_val['height']; ?> </li>
                                                            <li> <span>Dress Size</span><?php echo $result_val['dress_size']; ?> </li>
                                                        </ul>
                                                    </div>
                                                </figure>
                                                <div class=" pt-3 position-relative">
                                                    <h3 class="mt-0 text-uppercase font-weight-bold"><a
                                                            href="<?php echo base_url()?>profile/<?php echo $res['title']?>/<?php echo $res['id']?>"><?php echo $res['title'];?></a>
                                                    </h3>
                                                </div>
                                            </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script>
                        jQuery(document).ready(function() {

                            jQuery(".related-listings").owlCarousel({
                                loop: false,
                                margin: 20,
                                nav: false,
                                dots: false,
                                responsive: {
                                    0: {
                                        items: 2
                                    },
                                    600: {
                                        items: 2
                                    },
                                    1000: {
                                        items: 4
                                    }
                                },

                            });


                        });
                        </script>


                        <!-- <script src="assets/js/profile.js"></script> -->
                        <script
                            src="http://www.istanbulescortservice.com/wp-content/themes/ES10/framework/js/js.plugins-slickslider.js">
                        </script>

                        <script>
                        jQuery(document).ready(function() {


                            jQuery('.single-images-slider2-nav').slick({
                                slidesToShow: 3,
                                slidesToScroll: 1,


                                speed: 500,
                                autoplaySpeed: 7000,
                                autoplay: true,


                                prevArrow: '<span class="fa fa-angle-left left d-none"></span>',
                                nextArrow: '<span class="fa fa-angle-right right d-none"></span>',

                                dots: false,
                                nav: false,


                                adaptiveHeight: true,
                                lazyLoad: 'ondemand',


                                // the magic
                                responsive: [{

                                    breakpoint: 1024,
                                    settings: {
                                        slidesToShow: 3,
                                        infinite: true
                                    }

                                }, {

                                    breakpoint: 600,
                                    settings: {
                                        slidesToShow: 3,
                                        infinite: true
                                    }

                                }, {

                                    breakpoint: 300,
                                    settings: {
                                        slidesToShow: 1,
                                        infinite: true
                                    }

                                }]


                            });

                            jQuery('.single-images-slider2-nav').attr('dir', 'ltr');

                        });
                        </script>

                        <script>
                        function processCommentPop() {

                            jQuery("#comments-ajax-all").html('');
                            jQuery("#commentsformbody").show();
                            jQuery(".comment-modal-wrap").fadeIn(400);

                        }

                        function processCommentAll() {

                            jQuery("#comments-ajax-all").html('');
                            jQuery('#commentlistwrap .comment-single').each(function() {

                                jQuery("#comments-ajax-all").html(jQuery("#comments-ajax-all").html() +
                                    '<div class="comment-single mb-4">' + jQuery(this).html() + '</div>');
                            });
                            jQuery("#commentsformbody").hide();
                            jQuery(".comment-modal-wrap").fadeIn(400);

                        }

                        jQuery(document).ready(function() {

                            if (jQuery(".comment-single").length == 0) {
                                jQuery(".showcommentsbtn").hide();
                            }


                            jQuery("#commentcount").html(jQuery(".comment-single").length);


                            ! function(e) {
                                e.fn.jAutoCalc = function(t) {
                                    var s = {},
                                        u = {
                                            sum: {
                                                rgx: "sum\\({([^}]+)}\\)",
                                                exec: function(t, r, s) {
                                                    return m = 0, e(l(t), r).each(function() {
                                                        n = 1 * o(e(this).val(), s), m += n
                                                    }), m
                                                }
                                            },
                                            avg: {
                                                rgx: "avg\\({([^}]+)}\\)",
                                                exec: function(t, r, s) {
                                                    return m = 0, c = e(l(t), r).each(function() {
                                                        n = 1 * o(e(this).val(), s), m += n
                                                    }).length, m / c
                                                }
                                            },
                                            min: {
                                                rgx: "min\\({([^}]+)}\\)",
                                                exec: function(t, r, n) {
                                                    return Math.min.apply(this, e(l(t), r).map(function(
                                                        t, r) {
                                                        return o(e(r).val(), n)
                                                    }).get())
                                                }
                                            },
                                            max: {
                                                rgx: "max\\({([^}]+)}\\)",
                                                exec: function(t, r, n) {
                                                    return Math.max.apply(this, e(l(t), r).map(function(
                                                        t, r) {
                                                        return o(e(r).val(), n)
                                                    }).get())
                                                }
                                            },
                                            count: {
                                                rgx: "count\\({([^}]+)}\\)",
                                                exec: function(t, r) {
                                                    return e(l(t), r).length
                                                }
                                            },
                                            countNotEmpty: {
                                                rgx: "countNotEmpty\\({([^}]+)}\\)",
                                                exec: function(t, r) {
                                                    return e.grep(e(l(t), r), function(t) {
                                                        return e(t).val()
                                                    }).length
                                                }
                                            }
                                        },
                                        a = function(e) {
                                            for (fields = new Array, r = /{([^}]+)}/gi; null != (m = r.exec(
                                                    e));) fields[fields.length] = m[1];
                                            return fields
                                        },
                                        l = function(e) {
                                            return /^[a-zA-Z].*/.test(e) ? ':input[name="' + e + '"]' : e
                                        },
                                        o = function(t, r) {
                                            for (numValue = "", numOpts = ["0", "1", "2", "3", "4", "5",
                                                    "6", "7", "8", "9", "-"
                                                ], ch = "", dec = "", decLoc = -1, thou = "", sym = "",
                                                symLoc = -1, decPlaces = 0, sepOpts = s.decimalOpts.concat(s
                                                    .thousandOpts), z = t.length - 1; z >= 0; z--) ch = t
                                                .charAt(z), -1 != e.inArray(ch, numOpts) ? numValue = ch +
                                                numValue : "" == dec && -1 != e.inArray(ch, s.decimalOpts) ?
                                                (decLoc = z, dec = ch, numValue = "." + numValue) : "" ==
                                                thou && -1 != e.inArray(ch, s.thousandOpts) ? thou = ch :
                                                "" != sym || -1 != e.inArray(ch, sepOpts) || 0 != z && z !=
                                                t.length - 1 || (sym = ch, symLoc = z);
                                            return "" != dec && (decPlaces = t.length - decLoc - 1, symLoc >
                                                    decLoc && decPlaces--), -1 != s.decimalPlaces && (
                                                    decPlaces = s.decimalPlaces), 2 == arguments.length && (
                                                    "" == r.dec && "" != dec && (r.dec = dec), (-1 == r
                                                        .decPlaces && -1 != decPlaces || -1 != r
                                                        .decPlaces && -1 != decPlaces && decPlaces < r
                                                        .decPlaces) && (r.decPlaces = decPlaces), "" == r
                                                    .thou && "" != thou && (r.thou = thou), "" == r.sym &&
                                                    "" != sym && (r.sym = sym, r.symLoc = symLoc)), s
                                                .emptyAsZero && "" == numValue && (numValue = "0"), numValue
                                        },
                                        d = function(t, n, c, a) {
                                            field = "", fieldValue = "", numValue = "", resultvalue = "";
                                            var d = {
                                                dec: "",
                                                decPlaces: -1,
                                                thou: "",
                                                sym: "",
                                                symLoc: -1
                                            };
                                            for (func in u)
                                                for (f = u[func], r = new RegExp(f.rgx, "gi"); null != (m =
                                                        r.exec(t));) v = f.exec(m[1], a, d), t = t.replace(
                                                    new RegExp(f.rgx, "gi"), v);
                                            for (i = 0; i < n.length; i++) {
                                                if (field = n[i], fieldValue = e(l(field), a).val(),
                                                    numValue = o(fieldValue, d), 0 == numValue.length)
                                                    return void c.val("").change();
                                                t = t.replace(new RegExp("{" + field + "}", "g"), numValue)
                                            }
                                            t = t.replace(/ /g, ""), "" == d.dec && (d.dec = s.decimalOpts[
                                                    0]), -1 == d.decPlaces && (d.decPlaces = 0), "" == d
                                                .thou && (d.thou = s.thousandOpts[0]), resultValue = $(t),
                                                null == resultValue ? resultValue = "" : resultValue = h(
                                                    resultValue, d.decPlaces), resultValue = resultValue
                                                .replace(/\./g, "<c>"), resultValue = resultValue.replace(
                                                    /\,/g, "<t>"), resultValue = resultValue.replace(
                                                    /\<c\>/g, d.dec), resultValue = resultValue.replace(
                                                    /\<t\>/g, d.thou), d.symLoc > -1 && (0 == d.symLoc ?
                                                    resultValue = d.sym + resultValue : resultValue += d.sym
                                                    ), s.smartIntegers && (resultValue = resultValue
                                                    .replace(/[\,\.]0+$/, "")), e.isFunction(s
                                                .onShowResult) && (resultValue = s.onShowResult.call(this,
                                                    c, resultValue)), c.val(resultValue), s.chainFire && c
                                                .change()
                                        },
                                        h = function(e, t) {
                                            for (n = e.toFixed(t) + "", x = n.split("."), x1 = x[0], x2 = x
                                                .length > 1 ? "." + x[1] : "", rgx = /(\d+)(\d{3})/; rgx
                                                .test(x1);) x1 = x1.replace(rgx, "$1,$2");
                                            return x1 + x2
                                        },
                                        g = {
                                            "+": {
                                                op: "+",
                                                precedence: 10,
                                                assoc: "L",
                                                exec: function(e, t) {
                                                    return e + t
                                                }
                                            },
                                            "-": {
                                                op: "-",
                                                precedence: 10,
                                                assoc: "L",
                                                exec: function(e, t) {
                                                    return e - t
                                                }
                                            },
                                            "*": {
                                                op: "*",
                                                precedence: 20,
                                                assoc: "L",
                                                exec: function(e, t) {
                                                    return e * t
                                                }
                                            },
                                            "/": {
                                                op: "/",
                                                precedence: 20,
                                                assoc: "L",
                                                exec: function(e, t) {
                                                    return e / t
                                                }
                                            },
                                            "**": {
                                                op: "**",
                                                precedence: 30,
                                                assoc: "R",
                                                exec: function(e, t) {
                                                    return Math.pow(e, t)
                                                }
                                            }
                                        },
                                        p = {
                                            e: Math.exp(1),
                                            pi: 4 * Math.atan2(1, 1)
                                        },
                                        y = function(e) {
                                            var t, r, n = e.offset;
                                            for (t = 0;
                                                "0123456789".indexOf(e.string.substr(e.offset, 1)) >= 0 && e
                                                .offset < e.string.length;) e.offset++;
                                            if ("." == e.string.substr(e.offset, 1))
                                                for (e.offset++;
                                                    "0123456789".indexOf(e.string.substr(e.offset, 1)) >=
                                                    0 && e.offset < e.string.length;) e.offset++;
                                            if (e.offset > n) return parseFloat(e.string.substr(n, e
                                                .offset - n));
                                            if ("+" == e.string.substr(e.offset, 1)) return e.offset++, y(
                                            e);
                                            if ("-" == e.string.substr(e.offset, 1)) return e.offset++, V(y(
                                                e));
                                            if ("(" == e.string.substr(e.offset, 1)) {
                                                if (e.offset++, t = b(e), ")" == e.string.substr(e.offset,
                                                        1)) return e.offset++, t;
                                                throw e.error = "Parsing error: ')' expected", "parseError"
                                            }
                                            if (r = /^[a-z_][a-z0-9_]*/i.exec(e.string.substr(e.offset))) {
                                                var s = r[0];
                                                if (e.offset += s.length, s in p) return p[s];
                                                throw e.error = "Semantic error: unknown variable '" + s +
                                                    "'", "unknownVar"
                                            }
                                            throw e.string.length == e.offset ? (e.error =
                                                "Parsing error at end of string: value expected",
                                                "valueMissing") : (e.error =
                                                "Parsing error: unrecognized value", "valueNotParsed")
                                        },
                                        V = function(e) {
                                            return -e
                                        },
                                        P = function(e) {
                                            return "**" == e.string.substr(e.offset, 2) ? (e.offset += 2, g[
                                                    "**"]) : "+-*/".indexOf(e.string.substr(e.offset, 1)) >=
                                                0 ? g[e.string.substr(e.offset++, 1)] : null
                                        },
                                        b = function(e) {
                                            for (var t, r = [{
                                                    precedence: 0,
                                                    assoc: "L"
                                                }], n = y(e);;) {
                                                for (t = P(e) || {
                                                        precedence: 0,
                                                        assoc: "L"
                                                    }; t.precedence < r[r.length - 1].precedence || t
                                                    .precedence == r[r.length - 1].precedence && "L" == t
                                                    .assoc;) {
                                                    var s = r.pop();
                                                    if (!s.exec) return n;
                                                    n = s.exec(s.value, n)
                                                }
                                                r.push({
                                                    op: t.op,
                                                    precedence: t.precedence,
                                                    assoc: t.assoc,
                                                    exec: t.exec,
                                                    value: n
                                                }), n = y(e)
                                            }
                                        },
                                        $ = function(e) {
                                            var t = {
                                                string: e,
                                                offset: 0
                                            };
                                            try {
                                                var r = b(t);
                                                if (t.offset < t.string.length) throw t.error =
                                                    "Syntax error: junk found at offset " + t.offset,
                                                    "trailingJunk";
                                                return r
                                            } catch (n) {
                                                return void(s.showParseError && alert(t.error + " (" + n +
                                                    "):\n" + t.string.substr(0, t.offset) + "<*>" +
                                                    t.string.substr(t.offset)))
                                            }
                                        },
                                        L = function(t) {
                                            for (s = e.extend({}, e.fn.jAutoCalc.defaults), i = 0; i < t
                                                .length; i++) "object" == typeof t[i] && (s = e.extend(s, t[
                                                i]));
                                            u = e.extend(u, s.funcs), p = e.extend(p, s.vars)
                                        },
                                        j = {
                                            init: function() {
                                                return this.each(function() {
                                                    $ctx = e(this), e("[" + s.attribute +
                                                        "]:not([_jac])", $ctx).each(
                                                        function() {
                                                            if ($this = e(this), eq = $this
                                                                .attr(s.attribute), fields =
                                                                a(eq), 0 != fields.length) {
                                                                for (i = 0; i < fields
                                                                    .length; i++)
                                                                    if (0 == e(l(fields[i]),
                                                                            $ctx).length)
                                                                        return;
                                                                for (field = "", name =
                                                                    $this.attr("name"),
                                                                    fireEvents =
                                                                    "focus.jautocalc change.jautocalc blur.jautocalc",
                                                                    s.keyEventsFire && (
                                                                        fireEvents +=
                                                                        " keyup.jautocalc keydown.jautocalc keypress.jautocalc"
                                                                        ), i = 0; i < fields
                                                                    .length; i++) field =
                                                                    fields[i], e(l(field),
                                                                        $ctx).bind(
                                                                        fireEvents, {
                                                                            equation: eq,
                                                                            equationFields: fields,
                                                                            result: $this,
                                                                            context: $ctx
                                                                        },
                                                                        function(e) {
                                                                            d(e.data.equation,
                                                                                e.data
                                                                                .equationFields,
                                                                                e.data
                                                                                .result,
                                                                                e.data
                                                                                .context
                                                                                )
                                                                        });
                                                                s.readOnlyResults && $this
                                                                    .attr("readonly", !0),
                                                                    $this.attr("_jac",
                                                                        "_jac"), s
                                                                    .initFire && e(l(fields[
                                                                        0]), $ctx).change()
                                                            }
                                                        })
                                                })
                                            },
                                            destroy: function() {
                                                return this.each(function() {
                                                    $ctx = e(this), e("[" + s.attribute +
                                                        "][_jac]", $ctx).each(function() {
                                                        if ($this = e(this), eq = $this
                                                            .attr(s.attribute), fields =
                                                            a(eq), 0 != fields.length) {
                                                            for (field = "", i = 0; i <
                                                                fields.length; i++)
                                                                field = fields[i], e(l(
                                                                    field), $ctx)
                                                                .unbind(".jautocalc");
                                                            s.readOnlyResults && $this
                                                                .removeAttr("readonly"),
                                                                $this.removeAttr("_jac")
                                                        }
                                                    })
                                                })
                                            }
                                        };
                                    return L(arguments), j[t] ? j[t].apply(this) : j.init.apply(this)
                                }, e.fn.jAutoCalc.defaults = {
                                    attribute: "data-form",
                                    thousandOpts: [",", ".", " "],
                                    decimalOpts: [".", ","],
                                    decimalPlaces: -1,
                                    initFire: !0,
                                    chainFire: !0,
                                    keyEventsFire: !1,
                                    readOnlyResults: !0,
                                    showParseError: !0,
                                    emptyAsZero: !1,
                                    smartIntegers: !1,
                                    onShowResult: null,
                                    funcs: {},
                                    vars: {}
                                }
                            }(jQuery);

                            jQuery("form#newcomment").attr("enctype", "multipart/form-data").attr("encoding",
                                "multipart/form-data").attr("onsubmit", "return validateCommentForm();");



                            jQuery(".range-slider").ionRangeSlider({
                                type: "double",
                                keyboard: true
                            });

                            jQuery(".rate-range").ionRangeSlider({
                                type: "single",
                                hide_min_max: true,
                            });

                            jQuery("#ratingCalculate").jAutoCalc("destroy");
                            jQuery("#ratingCalculate").jAutoCalc({
                                initFire: true,
                                decimalPlaces: 1,
                                emptyAsZero: fase,
                                onShowResult: function(a, b) {
                                    jQuery('.rating_avg').html(b);
                                    jQuery('#rating-score').val(b);


                                    if (b == 5) {
                                        jQuery('.fa-frown').removeClass('thisone');
                                        jQuery('.fa-smile').removeClass('thisone');
                                        jQuery('.fa-laugh-beam').addClass('thisone');
                                    } else if (b > 2) {
                                        jQuery('.fa-frown').removeClass('thisone');
                                        jQuery('.fa-laugh-beam').removeClass('thisone');
                                        jQuery('.fa-smile').addClass('thisone');
                                    } else {
                                        jQuery('.fa-laugh-beam').removeClass('thisone');
                                        jQuery('.fa-smile').removeClass('thisone');
                                        jQuery('.fa-frown').addClass('thisone');
                                    }
                                }

                            });


                        });

                        function validateCommentForm() {

                            var message = document.getElementById("comment");

                            if (message.value == '') {
                                alert("Please enter a valid comment.");
                                message.focus();
                                message.style.border = 'thin solid red';
                                return fase;
                            }

                            if (message.value.length < 10) {
                                alert("Your comment is too short.");
                                message.focus();
                                message.style.border = 'thin solid red';
                                return fase;
                            }

                            return true;
                        }

                        function processrating() {



                            jQuery('input[name$="rating-val"]').each(function(index, item) {
                                var id = this.id;
                                jQuery('#newcomment').append('<input type="hidden" name="' + id + '" value="' +
                                    jQuery('#' + id).val() + '">');
                            });

                            return

                        }
                        </script>

                        <script>
                        jQuery(document).ready(function() {


                            if (jQuery('#commentlistwrap .comment-single').length > 1) {
                                jQuery('#commentlistwrap .comment-single').hide();
                                jQuery('#commentlistwrap .comment-single:nth(0)').fadeIn('slow');
                                cc = -1;
                                setInterval(function() {

                                    jQuery('#commentlistwrap .comment-single').hide();
                                    cc++;
                                    jQuery('#commentlistwrap .comment-single:nth(' + cc + ')').fadeIn(
                                        'slow');
                                    if (cc == 2) {
                                        cc = 0;
                                    }

                                }, 6000);
                            }

                        });
                        </script>

                        <script>
                        jQuery(document).ready(function() {


                            jQuery(".sidebar-fixed-content").scrollToFixed({
                                minWidth: 1064,
                                zIndex: 12,
                                marginTop: 100,
                                removeOffsets: true,
                                limit: function() {
                                    var a = jQuery(".limit-box").offset().top - jQuery(
                                        ".sidebar-fixed-content").outerHeight(true) - 48;
                                    return a;
                                }
                            });

                        });
                        </script>