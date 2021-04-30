<!-- section 1 -->
<section class="block-cat-listings block-listings2a bg-white section-20 ">
    <div class="container">
       <div class="row">
          <div class="col-12 section-bottom-40">
             <div class="text-center">
                <h2 data-elementor-setting-key="title" data-elementor-inline-editing-toolbar="none" class="elementor-inline-editing  font- text-dark ">Meet Our Top Class Istanbul Escort Girls</h2>
                <p data-elementor-setting-key="subtitle" data-elementor-inline-editing-toolbar="none" class="elementor-inline-editing lead text-primary font- text-500 mb-4 ">LOOKING FOR BEST ESCORTS ISTANBUL?</p>
                <p data-elementor-setting-key="desc" data-elementor-inline-editing-toolbar="none" class="elementor-inline-editing line-height-30  font- text-opacity-5"></p>
                <p style="text-align:justify;">You are at the right place! Our Istanbul Escort Girls work for your pleasure and joy 7/24. Call now and meet the girls.
                   All girls you meet via this site are high level elite escorts. And our service is privacy guaranteed. Don’t worry, get satisfied.
                </p>
                <p></p>
                <hr style="width:50px; height:3px;" class="bg-primary my-4  mx-auto">
             </div>
          </div>
          <div class="col-12">
             <div class="clearfix"></div>
             <div class="row">
               <?php 
                //echo '<pre>'; print_r($Mumbai_escorts_list); die; 
                   foreach($Mumbai_escorts_list as $res)
                   {
                   $pro_post_imge = explode(',',$res['imge']);
                   $pro_alt_title = explode(',',$res['alt_title']);
                 ?>
                <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                   <div class="new-search info  no-resize img-user img-user-big bg-none" data-pid="284">
                      <figure>
                         <a href="<?php echo base_url()?>profile/<?php echo str_replace(' ','-',trim($res['title'])); ?>/<?php echo $res['id']?>"> <img data-src="<?php echo base_url();?>uploads/profile/<?php echo $pro_post_imge[2];?>" class="img-fluid lazy loaded" alt="<?php echo $pro_alt_title[2];?>" src="<?php echo base_url();?>uploads/profile/<?php echo $pro_post_imge[2];?>" data-was-processed="true"> </a>
                         <div class="list-info-pop bg-secondary">
                            <ul class="list-unstyled">
                               <li> <span><i class="fas fa-user"></i></span><?php echo $res['description'];?></li>
                               <!-- <li> <span><i class="mr-2 fas fa-map-marker-alt" aria-hidden="true"></i></span> <?php //echo $gal_loc_title[0]; ?> </li>  -->
                            </ul>
                         </div>
                      </figure>
                      <div class=" pt-3 position-relative">
                         <h3 class="mt-0 text-uppercase font-weight-bold">
                             <a href="<?php echo base_url()?>profile/<?php echo str_replace(' ','-',trim($res['title'])); ?>/<?php echo $res['id']?>"><?php echo $res['title'];?></a>
                        </h3>
                      </div>
                   </div>
                </div>
                 
                <?php } ?>
             </div>
          </div>
       </div>
    </div>
 </section>