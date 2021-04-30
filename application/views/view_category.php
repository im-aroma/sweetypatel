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

               //print_r($get_cate);
   
               foreach($get_cate as $get_cate_val)
   
               { 
   
          ?>
                <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                   <div class="new-search info  no-resize img-user img-user-big bg-none" data-pid="284">
                      <figure>
                         <a href="<?php echo base_url(); ?>category/<?php echo str_replace(' ','-',$get_cate_val['sub_cat_title']);?>/<?php echo $get_cate_val['id']; ?>"> <img data-src="<?php echo base_url(); ?>uploads/category/<?php  echo $get_cate_val['cat_img']; ?>" class="img-fluid lazy loaded" alt="<?php echo $get_cate_val['cat_alt_title']; ?>" src="<?php echo base_url(); ?>uploads/category/<?php  echo $get_cate_val['cat_img']; ?>" data-was-processed="true"> </a>
                         <!-- <div class="list-info-pop bg-secondary">
                            <ul class="list-unstyled">
                               <li> <span>Age</span> 22 </li>
                               <li> <span>Height</span> 174 Cm </li>
                               <li> <span>Dress Size</span> 8 </li>
                            </ul>
                         </div> -->
                      </figure>
                      <div class=" pt-3 position-relative">
                         <h3 class="mt-0 text-uppercase font-weight-bold"><a href="<?php echo base_url(); ?>category/<?php echo str_replace(' ','-',$get_cate_val['sub_cat_title']);?>/<?php echo $get_cate_val['id']; ?>"><?php echo $get_cate_val['sub_cat_title'];?></a></h3>
                      </div>
                   </div>
                </div>
                 
                <?php } ?>
             </div>
          </div>
       </div>
    </div>
 </section>