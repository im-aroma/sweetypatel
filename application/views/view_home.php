<!-- this css only for section 6 -->
<style>
   .container-fluid{
      background-color: #F8F9FA;
   }
.text-blocks{
	/* background-color: #141414; */
	padding: 48px 0;
}

.text-blocks p{
	margin: 0
}

.text-block .block-title{
	color: #E9158F;
	font-weight: 600;
	font-size: 16px;
	text-indent: 25px;
	background: url(assets/img/box.svg) no-repeat left center;
	margin-bottom: 16px;
}

.text-block{
	margin-bottom: 28px;
}

.text-block .block-content{
	color: #A7A7A7;
	font-weight: 300;
	font-size: 14px;
	line-height: 28px;
}
h3 {
    display: block;
    font-size: 1.17em;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    font-weight: bold;
}
.heading{
	background: url(assets/img/d.png) repeat-x center center;
	margin-bottom: 28px;
}

.heading h2{
	text-transform: uppercase;
	color: #000;
	font-size: 18px;
	letter-spacing: 2px;
	background-color: #F8F9FA;
	display: inline-block;
	padding: 10px;
	margin: 0;
}

a{
	color: #fff;
	text-decoration: none;
}

a:hover{
	color: #E9158F;
	text-decoration: none;
}
.home-reviews a{
	font-size: 12px;
}

.news-item-wrap{
	width: 100%;
	height: 480px;
	overflow: hidden;
	margin-bottom: 30px;
	border-radius: 5px;
	cursor: pointer;
}

.news-item{
	background-color: #141414;
	width: 100%;
	height: 480px;
	background-repeat: no-repeat;
	background-size: cover;
	background-position: top center;	
	border-radius: 5px;
	position: relative;
	color: #fff;
	transition-duration: 1s;
}

.news-content{
	position: absolute;
	bottom: 0;
	height: 356px;
	overflow: hidden;
	padding: 10px;
	font-size: 12px;
	background: url(assets/img/news_background.png) repeat-x center bottom;
	left: 0;
	right: 0;
	cursor: pointer;
	border-radius: 5px;	
}

.news-meta{
	position: absolute;
	bottom: 0;
	left: 0;
	right: 0;
	width: 100%;
	padding: 10px;
	transition-duration: 1s;
	padding-bottom: 30px;
}

.news-content h3{
	font-size: 22px;
	font-weight: 800;
	color: #fff;
}

.news-meta a{
	background: -webkit-linear-gradient(#EC008C, #A400DF);
	-webkit-background-clip: text;
	-webkit-text-fill-color: transparent;
}

.news-item:hover{
	transform: scale(1.08);
	-webkit-transform: scale(1.08);
	-moz-transform: scale(1.08);
}

.news-item:hover .news-meta{
	transform: scale(0.90);
}


.category-list{
	list-style: none;
	margin: 0;
	padding: 0;
}

.category-list li{
	display: inline-block;
	width: 24%;
	text-align: center;
}

.category-list li a{
	background-color: #141414;
	margin-bottom: 10px;
	width: 98%;
	display: block;
	border: 1px solid #141414;
	border-radius: 5px;
	padding: 12px;
	font-size: 14px;
	color: #A7A7A7;
	text-decoration: none;
	-webkit-transition: background-image 0.2s ease-in-out;
	transition: background-image 0.2s ease-in-out;
}

.category-list li a:hover{
	background-image: linear-gradient(-134deg, #EC008C 0%, #A400DF 100%);
	color: #fff;
	border-color: transparent;
}

@media ( max-width: 768px ) {
	.category-list li a{ 
      padding: 12px 0px;
    font-size: 11px; }	
}

@media ( max-width: 767px ) {
	.category-list li{
      width: 48.4%;
}
}
   </style>

<!-- section 1  -->
<section class="hero-text1 position-relative hero-default hero-search hero-small hero-default text-light">
    <div class="bg-image" data-bg="<?php echo base_url(); ?>assets/img/slide-1-1.jpg" style="background-image: url(<?php echo base_url(); ?>assets/img/slide-1-1.jpg);"></div>
    <div class="bg-gradientxx">
       <div class="hero_content bg-content clearfix">
          <div class="container">
             <div class="row justify-content-center">
                <div class="col-md-7 text-center mt-md-5">
                   <div class="text-center">
                      <h1 data-elementor-setting-key="title" data-elementor-inline-editing-toolbar="none" class="elementor-inline-editing  
                         font- 
                         text-light ">Istanbul Escorts</h1>
                      <p data-elementor-setting-key="subtitle" data-elementor-inline-editing-toolbar="none" class="elementor-inline-editing lead text-primary font- text-500  ">Enjoy 100% Trusted Escorts Services in Istanbul</p>
                   </div>
                </div>
                <div class="col-md-10 mx-auto text-center my-5">
                   <div class="wrapp bg-white-50 p-2 shadow rounded">
                      <div class="bg-white p-4 rounded">
                         <form method="get" action="" class="py-lg-0">
                            <input type="hidden" name="s" value="">
                            <input type="hidden" name="type" value="1">
                            <div class="row">
                               <div class="col-md-4 offset-md-1 col-sm-6">
                                  <select name="tax-dathnicity" class="form-control mb-4 mb-md-0 rounded-0" data-live-search="true">
                                     <option value="">Category</option>
                                     <?php 
                                       foreach($get_loc as $get_loc_value) 
                                       {  ?>
                                     <option value=""><a href="<?php echo base_url(); ?>location/<?php echo str_replace(' ','-',trim($get_loc_value['sub_loc_title'])); ?>/<?php echo $get_loc_value['id'] ?>"><?php echo $get_loc_value['loc_title']; ?></a></option>
                                     <?php } ?>
                                  </select>
                               </div>
                               <div class="col-md-4  col-sm-6">
                                  <select name="age" class="form-control mb-4 mb-md-0 rounded-0" data-live-search="true">
                                     <option value="">Location</option>
                                     <option value="20">20+</option>
                                     <option value="30">30+</option>
                                     <option value="40">40+</option>
                                     <option value="50">50+</option>
                                  </select>
                               </div>
                               <div class="col-md-3 col-sm-6">
                                  <button class="btn-block btn btn-primary rounded-0" style="height: 45px;" type="submit">Search</button>
                               </div>
                            </div>
                         </form>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>

<!-- slider   -->
<div class="elementor-widget-wrap" >
<div class="elementor-element elementor-widget">
<section id="listing3-carousel-7985" class="block-cat-listings block-listings3 bg-light section-20 ">
    <div class="container">
       <div class="row">
          <div class="col-12">
             <div class="clearfix"></div>
             <div class="d-flex mb-4 justify-content-between">
                <div>
                   <div class="text-center text-md-left">
                      <h2 data-elementor-setting-key="title" 
                         data-elementor-inline-editing-toolbar="none" 
                         class="elementor-inline-editing mb-4 font- text-dark font-weight-bold">OUR FEATURED ISTANBUL ESCORTS...</h2>
                      <hr style="width:50px; height:3px;" class="bg-primary my-4  " />
                   </div>
                </div>
                <div><a class="btn bg-white btn-sm text-muted prev px-2 mt-2 border"><i class="fa fa-angle-left px-1" aria-hidden="true"></i></a> <a class="btn bg-white btn-sm text-muted next px-2 mt-2 border"><i class="fa fa-angle-right px-1" aria-hidden="true"></i></a> </div>
             </div>
             <div class="container" style="overflow:hidden !important;">
             <div  class="owl-carousel owl-theme"> 
               <?php 
                   foreach($get_ten_pro_list as $get_ten_pro_list_val)
                   { 

                      $pro_imge = explode(',',$get_ten_pro_list_val['imge']);
                      $pro_alt_title = explode(',',$get_ten_pro_list_val['alt_title']);

                ?>
                <div class="new-search info  no-resize img-user img-user-big bg-none" data-pid="359">
                   <figure>
                      <a href="<?php echo base_url('profile/'.str_replace(' ','-',trim($get_ten_pro_list_val['title'])).'/'.$get_ten_pro_list_val['id']); ?>"><img src="<?php echo base_url(); ?>uploads/profile/<?php echo $pro_imge[0]; ?>" class="img-fluid lazyload" alt="<?php echo $pro_alt_title[0]; ?>"></a>
                      <div class="list-info-pop bg-secondary">
                         <ul class="list-unstyled">
                            <li> <span>Age</span><?php echo $get_ten_pro_list_val['age']; ?></li>
                            <li> <span>Height</span><?php echo $get_ten_pro_list_val['height']; ?></li>
                            <li> <span>Dress Size</span><?php echo $get_ten_pro_list_val['dress_size']; ?></li>
                         </ul>
                      </div>
                   </figure>
                   <div class=" pt-3 position-relative">
                      <h3 class="mt-0 text-uppercase font-weight-bold">
                         <a href="<?php echo base_url('profile/'.str_replace(' ','-',trim($get_ten_pro_list_val['title'])).'/'.$get_ten_pro_list_val['id']); ?>"><?php echo trim($get_ten_pro_list_val['title']); ?></a>
                      </h3>
                   </div>
                </div>

                <?php 
                
                } 
                ?>
                
               
             </div>
             </div>
          </div>
       </div>
    </div>
 </section>




 <!-- section 3 -->
 <section class="elementor-section elementor-top-section elementor-element elementor-element-b916903 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="b916903" data-element_type="section">
   <div class="elementor-container elementor-column-gap-default">
      <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-f8e80ff" data-id="f8e80ff" data-element_type="column">
         <div class="elementor-widget-wrap elementor-element-populated">
            <div class="elementor-element elementor-element-78472d64 elementor-widget elementor-widget-new-hero" data-id="78472d64" data-element_type="widget" data-widget_type="new-hero.default">
               <div class="elementor-widget-container">
                  <section class="block-cat-text block-text1 bg-white section-20 ">
                     <div class="container">
                        <div class="row d-flex flex-lg-row-reverse y-middle">
                           <div class="col-md-6 pl-xl-5 text-center text-lg-left">
                              <div class="text-center text-md-left">
                                 <h2 data-elementor-setting-key="title" data-elementor-inline-editing-toolbar="none" class="elementor-inline-editing mb-0 font- text-dark font-weight-bold wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">Enjoy Elite Class Istanbul Escort Girls in Turkey.</h2>
                                 <p data-elementor-setting-key="subtitle" data-elementor-inline-editing-toolbar="none" class="elementor-inline-editing lead text-dark font- text-500 mb-0 font-weight-bold wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;"></p>
                                 <p style="text-align: justify; visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;" class="wow fadeInUp" data-wow-delay="0.4s">Booking the best Escort in Istanbul is such straightforward more than ever. You can book your ideal call girl from different sorts of our models. The entirety of our young escort ladies are consistently accessible at for you as a outcall and incall services. Simply get your telephone and send us your area, we will convey your #1 model to you inside 60 minutes. </p>
                                 <p class="wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;"></p>
                              </div>
                           </div>
                           <div class="col-md-6 pr-lg-5">
                              <a href="index.php?s=">
                              <img data-src="assets/img/high-profile-pune-escorts.jpg" class="img-fluid mt-3 pt-3 pt-md-0 mt-lg-0 lazy wow fadeInUp loaded" alt="Enjoy Elite Class Istanbul Escort Girls in Turkey." data-wow-delay="0.8s" src="assets/img/high-profile-pune-escorts.jpg" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInUp;" data-was-processed="true">
                              </a>        
                           </div>
                        </div>
                     </div>
                  </section>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>



<!-- section 4 -->
<section class="block-cat-listings block-listings2 bg-white section-20 ">
   <div class="container">
      <div class="row">
         <div class="col-12 section-bottom-40">
            <div class="text-center">
               <h2 data-elementor-setting-key="title" data-elementor-inline-editing-toolbar="none" class="elementor-inline-editing  font- text-dark font-weight-bold">NEWLY ADDED ISTANBUL ESCORTS</h2>
               <hr style="width:50px; height:3px;" class="bg-primary my-4  mx-auto">
            </div>
         </div>
         <div class="col-12">
            <div class="clearfix"></div>
            <div class="row">

            <?php 
                   
                   foreach($get_expt_ten_pro_list as $get_expt_ten_pro_list_val)
                   { 

                       $pro_list_imge = explode(',',$get_expt_ten_pro_list_val['imge']);
                       $pro_list_alt_title = explode(',',$get_expt_ten_pro_list_val['alt_title']);
           ?>
               <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                  <div class="new-search info  no-resize img-user img-user-big bg-none" data-pid="284">
                     <figure>
                        <a href="<?php echo base_url(); ?>profile/<?php echo str_replace(' ','-',trim($get_expt_ten_pro_list_val['title'])); ?>/<?php echo $get_expt_ten_pro_list_val['id']; ?>"> 
                        <img data-src="<?php echo base_url(); ?>uploads/profile/<?php echo $pro_list_imge[0]; ?>" class="img-fluid lazy loaded" alt="<?php echo $pro_list_alt_title[0]; ?>" src="<?php echo base_url(); ?>uploads/profile/<?php echo $pro_list_imge[0]; ?>" data-was-processed="true"> </a>
                        <div class="list-info-pop bg-secondary">
                           <ul class="list-unstyled">
                              <li> <span>Age</span><?php echo $get_expt_ten_pro_list_val['age']?></li>
                              <li> <span>Height</span><?php echo $get_expt_ten_pro_list_val['height']?></li>
                              <li> <span>Dress Size</span><?php echo $get_expt_ten_pro_list_val['dress_size']?></li>
                           </ul>
                        </div>
                     </figure>
                     <div class=" pt-3 position-relative">
                        <h3 class="mt-0 text-uppercase font-weight-bold"><a href="<?php echo base_url()?>profile/<?php echo str_replace(' ','-',trim($get_expt_ten_pro_list_val['title'])); ?>/<?php echo $get_expt_ten_pro_list_val['id']?>"><?php echo $get_expt_ten_pro_list_val['title'];?></a></h3>
                     </div>
                  </div>
               </div>
               <?php 
                } 
                ?>
             </div>
              
            </div>
         </div>
      </div>
   </div>
</section>



<!-- section 6 -->
<div class="container-fluid">
<div class="text-blocks">
   <div class="container">
      <div class="row">
         <div class="col-lg-6 col-sm-12 text-block">
            <h3 class="block-title">Our London Escorts</h3>
            <div class="block-content">
               <p>We are privileged to represent such a widely diverse range of escorts at Top Secret, and this is reflected in the number of different categories we have to offer our clients. We have: busty escorts, tall, blonde, brunette escorts, girls that specialise in seeing couples, girls who like to do duo booking experiences and many more categories. We even represent young courtesans who enjoy very particular types of fetishes and much more. In fact, we are proud to say that we are one of the most versatile agencies in London, catering to practically every taste there is. If you can’t find a girl you like at Top Secret Escorts, then there’s something seriously wrong!</p>
            </div>
         </div>
         <div class="col-lg-6 col-sm-12 text-block">
            <h3 class="block-title">Outcall and overnight London escorts</h3>
            <div class="block-content">
               <p>We are privileged to represent such a widely diverse range of escorts at Top Secret, and this is reflected in the number of different categories we have to offer our clients. We have: busty escorts, tall, blonde, brunette escorts, girls that specialise in seeing couples, girls who like to do duo booking experiences and many more categories. We even represent young courtesans who enjoy very particular types of fetishes and much more. In fact, we are proud to say that we are one of the most versatile agencies in London, catering to practically every taste there is. If you can’t find a girl you like at Top Secret Escorts, then there’s something seriously wrong!</p>
            </div>
         </div>
         <div class="col-lg-6 col-sm-12 text-block">
            <h3 class="block-title">Dependable agency</h3>
            <div class="block-content">
               <p class="p1">The team at Top Secret Escorts are highly dependable and very trustworthy. They have all worked in the business for a considerable amount of time and understand the value of discretion, efficiency and attitude. You will always be welcomed by a friendly voice and your booking confirmations will always be prompt and easy to understand. If you have any problems at all, we urge you to contact us at your earliest convenience and allow us to help.</p>
            </div>
         </div>
         <div class="col-lg-6 col-sm-12 text-block">
            <h3 class="block-title">Book now</h3>
            <div class="block-content">
               <p class="p1">For the fastest possible booking request, it’s always best to call us on:</p>
               <p class="p1">+44<b>7900072555</b>. However, if you’re in no hurry, or you would like to make an advance booking for a particular young lady, you can also use our online booking form.</p>
               <p class="p1">
               </p>
            </div>
         </div>
      </div>
   </div>
</div>

<div class="heading container text-center col-sm-12">
   <h2>News</h2>
</div>


<div class="row home-reviews">
   <div class="container">
      <div class="row">
         <div class="col-sm-6 col-md-6 col-lg-4 nw-item">
            <div class="news-item-wrap">
               <div class="news-item" style="background-image: url(https://topsecretescorts.co.uk/wp-content/uploads/2020/01/pink-blonde-open-minded-200.jpg) " on-click-follow-link="" data-url="#">
                  <div class="news-content">
                     <div class="news-meta">
                        <h3>Be careful what time you visit an escort</h3>
                        <p>It’s not that you shouldn’t visit at any particular time you understand, it’s more to do with how you arrive and how you behave. We’d like to take this opportunity to give you a refresher in etiquette!
                           (more…)
                        </p>
                        <a href="#" title="Be careful what time you visit an escort">Read More</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-sm-6 col-md-6 col-lg-4 nw-item">
            <div class="news-item-wrap">
               <div class="news-item" style="background-image: url(https://topsecretescorts.co.uk/wp-content/uploads/2019/02/elisa-busty-brunette-bayswater-2.jpg) " on-click-follow-link="" data-url="#">
                  <div class="news-content">
                     <div class="news-meta">
                        <h3>How to talk to women</h3>
                        <p>
                           It’s a broad topic to approach we know, but one we’re not going to shy away from! You see, in the escorting industry you tend to learn a little about men, women, attraction and desire. So we do know what we’re talking about. (more…)
                        </p>
                        <a href="#" title="How to talk to women">Read More</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-sm-6 col-md-6 col-lg-4 nw-item">
            <div class="news-item-wrap">
               <div class="news-item" style="background-image: url(https://topsecretescorts.co.uk/wp-content/uploads/2017/08/tia-prtite-blonde-gloucester-road5-1.jpg) " on-click-follow-link="" data-url="#">
                  <div class="news-content">
                     <div class="news-meta">
                        <h3>London escorts tell you how to be better in bed</h3>
                        <p>We’ve got some more advice for you gentlemen. We realise that some of you actually read these news articles, so it prompts us to give you something useful. As if it wasn’t enough to have a great choice of London escorts! (more…)</p>
                        <a href="#" title="London escorts tell you how to be better in bed">Read More</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-sm-6 col-md-6 col-lg-4 nw-item">
            <div class="news-item-wrap">
               <div class="news-item" style="background-image: url(https://topsecretescorts.co.uk/wp-content/uploads/2015/10/sevda-busty-brunette-marylebone-1.jpg) " on-click-follow-link="" data-url="#">
                  <div class="news-content">
                     <div class="news-meta">
                        <h3>Brunette or blonde London escorts? That is the question</h3>
                        <p>
                           Are you a brunette or a blonde London escorts&nbsp;man? Or perhaps you’re one of those gentlemen who doesn’t really mind about the colour of your escort’s hair? Well, some of you do and we’re intrigued what it is that captivates you so much. (more…)
                        </p>
                        <a href="#" title="Brunette or blonde London escorts? That is the question">Read More</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-sm-6 col-md-6 col-lg-4 nw-item">
            <div class="news-item-wrap">
               <div class="news-item" style="background-image: url(https://topsecretescorts.co.uk/wp-content/uploads/2018/01/nicky-blonde-busty-5.jpg) " on-click-follow-link="" data-url="#">
                  <div class="news-content">
                     <div class="news-meta">
                        <h3>Late night drinking in Earls Court</h3>
                        <p>
                           Following a recent night out we had in London, we ended up back in Earls Court and quickly realised that we didn’t want to go home. We wanted to keep drinking a little longer. But do you know something? There are barely any bars open! At least in the main areas, that we know of. The closest one to us was a very small bar/club called Eclipse.
                           Don't take an Earls Court escort to Eclipse!
                           Eclipse is a rather typical looking place to be honest. It’s basically a space that’s way to small (upstairs at least) where you pay a ridiculous price
                        </p>
                        <a href="#" title="Late night drinking in Earls Court">Read More</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-sm-6 col-md-6 col-lg-4 nw-item">
            <div class="news-item-wrap">
               <div class="news-item" style="background-image: url(https://topsecretescorts.co.uk/wp-content/uploads/2020/03/bottega-blonde-hot-200.jpg) " on-click-follow-link="" data-url="#">
                  <div class="news-content">
                     <div class="news-meta">
                        <h3>How to spot the best London escorts</h3>
                        <p>
                           So we have established that the best London escorts are titled as such through simple personal taste. A client may think that busty escorts are the best, whereas another may think tall girls are better. Despite what may attract you to the girls you choose, there is one thing you can use to guide you towards booking the very best.
                           The “very” best
                           It’s important to understand before we go any further, that all the girls we represent here at Top Secret are in fact excellent at their job. They love their escorting careers and they put 110% into each and every
                        </p>
                        <a href="#" title="How to spot the best London escorts">Read More</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<div class="container ">
   <div class="row">
      <!-- Category List -->
      <div class="col-lg-12 col-sm-12 p-0 text-center">
         <ul class="category-list">
            <li class="cat-item cat-item-405"><a href="#" title="...">A-level Escorts</a></li>
            <li class="cat-item cat-item-405"><a href="#" title="...">B-level Escorts</a></li>
            <li class="cat-item cat-item-405"><a href="#" title="...">C-level Escorts</a></li>
            <li class="cat-item cat-item-405"><a href="#" title="...">D-level Escorts</a></li>
            <li class="cat-item cat-item-405"><a href="#" title="...">E-level Escorts</a></li>
            <li class="cat-item cat-item-405"><a href="#" title="...">F-level Escorts</a></li>
            <li class="cat-item cat-item-405"><a href="#" title="...">G-level Escorts</a></li>
            <li class="cat-item cat-item-405"><a href="#" title="...">H-level Escorts</a></li>
            
         </ul>
      </div>
   
   </div>
</div>


</div>


<!-- section 5 -->

   <div class="elementor-widget-container" style="background-color:#FFFFFF;">
      <div class="elementor-text-editor elementor-clearfix">
         <div class="container my_bg py-3">
         <h1 style="font-size: 32px; font-family: 'Poppins', sans-serif; color: #c3001e !important;">Istanbul Escorts By Passion Vip Escorts Agency</h1>
         <p style="font-family: 'Poppins', sans-serif;">
            The <a href="http://www.istanbulescortservice.com/" title="istanbul escorts">Istanbul escorts</a> at Our Agency are here to entertain you and keep you company. These girls are highly professional companions. They have been selected from the best in the business, from all over the world. Right now, there are over a hundred call girls available to book. Below, you will find our <a href="http://www.istanbulescortservice.com/" title="istanbul escort">Istanbul escort</a> portfolio features all the professional escort girls who work with us at the agency. Our Passion Vip Agency have over 10 years of experience connecting clients with beautiful girls in Istanbul. Passion Vip Agency operate 7 days a week from 9 am until 4 am, so we are pretty much a 24 hour escort agency. Our agency aims to introduce punters seeking adult work service providers at a time and place which best suits their needs. Our agency’s ethos is to provide only the most reliable and discrete escort services, easy and convenient to book, and offer great value for money.
         </p>
         <h2 style="font-size: 28px; font-family: 'Poppins', sans-serif; color: #c3001e !important;">Making Istanbul escort Booking Very Easy !</h2>
         <p style="font-family: 'Poppins', sans-serif;">Depending on where you are in the capital, there are always over 100 girls available to meet for incall &amp; outcall <a href="http://www.istanbulescortservice.com/" title="istanbul escorts services">Istanbul escorts services</a>. Each model girl you see is unique and has their own profile. We have tried our best to be thorough in the creation of our escort profiles. From the descriptions to the rates, and the images, reviews and services offered. It is important for clients to take advantage of the information displayed and pick the right escort for them.</p>
         <p style="font-family: 'Poppins', sans-serif;">Bookings are available at short notice, on the same day, or made in advance. Take your time searching through the girl profiles. You will find most of the information you need. They all have real images, and some girls publish selfies to help you get a better idea of what they are really like in person. Our receptionists are among the best in the business and know all the girls personally. They keep up to date with all the feedback we get about our beautiful young ladies, so they are able to make recommendations to any clients for any occasion.</p>
         <p style="font-family: 'Poppins', sans-serif;">We have been incredibly careful to categorise the <a href="http://www.istanbulescortservice.com/" title="istanbul escort girls">Istanbul escort girls</a> to make the website as useful as possible to our clients. These categories are extensive, and they range from body type to escort services provided by the girls. Some agencies have a separate gallery for those girls who are available at the time you visit the website, but we have taken the liberty of simply updating the main gallery regularly, in real time. We know your time is precious, therefore our gallery has already filtered which ladies are taking bookings within the next 24 hours, so you never waste your time trying to book a girl who is not available</p>
         <h3 style="font-size: 24px; font-family: 'Poppins', sans-serif; color: #c3001e !important;">What is the Defination of an Escort ?</h3>
         <p style="font-family: 'Poppins', sans-serif;"> Our ladies are women who sell their time and companionship for money. There are thousands of hookers in Istanbul , and loads in the Turkey . Most are in major cities, but there are independent girls all over the country too. It is especially important to remember than an escort is not a prostitute. There may well be prostitutes in Istanbul, but they are not represented on our website, or any other agency website to our knowledge. This is one of the main differences between an escort and a prostitute. A prostitute offers sexual services for money and there is not much more to it really.</p>
         <p style="font-family: 'Poppins', sans-serif;"> Historically, prostitutes have walked the streets of Istanbul waiting to get picked up by clients, but today things are vastly different. The more discerning client will always book <a href="http://www.istanbulescortservice.com/" title="escorts in istanbul">escorts in Istanbul</a> , and do so for the purposes of companionship. He does it because he wants to be with a beautiful and intelligent girl. He would not pick up a prostitute from the street to take out to dinner or to an event. An escort is vastly different indeed. And whatever happens between an <strong>escort in Istanbul</strong> and her client is nothing to do with anyone else. It’s a matter that only concerns the consenting adults involved.</p>
         <p style="font-family: 'Poppins', sans-serif;"> Istanbul is a particularly good place to book an escort. Istanbul (Turkey) escorts these days are incredibly classy. They have a variety of different outfits they can choose from, depending on your preference or the occasion. There is no curb crawling around Soho for female companionship in the 21st Century, <strong>Istanbul call girls</strong> are high class companions. The escort girls Istanbul has on offer can provide meaningful, caring, and discreet encounters. Real and lasting relationships can evolve with their clients. They are well mannered, highly intelligent, with many cultural interests and passions.</p>
         <h3 style="font-size: 24px; font-family: 'Poppins', sans-serif; color: #c3001e !important;">Why Client Book Our Istanbul escort girl</h3>
         <p style="font-family: 'Poppins', sans-serif;"> First, no matter where you are in the world, you should always book a professional escort girl. Never pay a streetwalker to spend time with you, it will be an unsatisfying experience at best. Clients book from Passion Vip Agency because these girls are the best, and they really can ignite any flame that has been missing from your previous relationships. It is not all about their natural charm and beauty either, it goes much deeper.</p>
         <p style="font-family: 'Poppins', sans-serif;"> Our clients include single bachelors looking to have some “no strings” fun. We also have incredibly high powered and wealthy gentlemen who need the company of a true professional to help them alleviate the stresses and strains of their everyday life. And then, there are always those clients who are looking to be entertained by a beautiful woman in addition to one they may already have at home or elsewhere. We are not in this business to judge the motives of our clients, as long as they remain respectful and consenting with the girls we represent at all times.</p>
         <h3 style="font-size: 24px; font-family: 'Poppins', sans-serif; color: #c3001e !important;">About Our Istanbul escort girl.</h3>
         <p style="font-family: 'Poppins', sans-serif;"> The Passion Vip Agency are far superior to any of the Vivastreet escorts you might find, or any other independent London girls either. Vivastreet provides advertising space for adult service providers, but they do not represent the girls they list. The girls at Passion Vip have been selected using extremely strict criteria. Independent girls have no accountability in most cases, and clients have been duped out of their cash so many times, it’s just not worth taking the risk.</p>
         <p style="font-family: 'Poppins', sans-serif;"> Our girls are extremely fun to be around, very energetic and can use a variety of skills to practice the art of companionship, and seduction if required. They can indulge the wildest fantasies of their clients. Some girls have specific skills in BDSM and roleplay, others are exceptionally talented tantric masseuses. Whatever unique and special skillsets they have, they never fail to help clients relax and have a wonderful time.</p>
         <p style="font-family: 'Poppins', sans-serif;"> Please do not forget that you can always speak to our receptionists to gain some insight into the girls at the agency. They can act as the perfect <strong>Istanbul escort</strong> guide when you simply cannot decide. It’s not an easy job when there are so many beautiful women to choose from we know.</p>
         <h3 style="font-size: 24px; font-family: 'Poppins', sans-serif; color: #c3001e !important;">Where to find Best escorts in Istanbul</h3>
         <p style="font-family: 'Poppins', sans-serif;"> It goes without saying that you will find North Istanbul girls in the north, east Istanbul call girls in the east, and so on. The common factor is that they are all here in the city. But this is not what we are referring to, this much is obvious. Most of the time people search for the type of professional call girl they would like to see, and where they would like to see them. The internet is the perfect place to find an escort agency that can help you find the type of girl you want.</p>
         <p style="font-family: 'Poppins', sans-serif;"> However, you do need to be careful where exactly you book your girls from. Some agencies offer only outcall girls. These girls are often cheap Istanbul escorts that do not provide a good service. If you are going to be paying a ridiculously small fee for one of these girls, you may as well book one of many Istanbul prostitutes walking the streets these days. It is not something we would advise. And as we said earlier, do be careful about booking independent girls, because they have no-one to answer to and you have no-one to complain to if you are not satisfied.</p>
         <p style="font-family: 'Poppins', sans-serif;"> It is always best to book from a reputable agency that has been around for a long time. An agency with experience will always have the best girls working with them, and they will always take their clients seriously. Your feedback is as important to us as your booking.</p>
         <h4 style="font-size: 18px; font-family: 'Poppins', sans-serif; color: #c3001e !important;">Incall &amp; Outcall Escort Istanbul</h4>
         <p style="font-family: 'Poppins', sans-serif;">  If you are looking for adult entertainment services like this, whether you live and work in and around Istanbul , or you are just visiting for a vacation or city break, there are locations all over. We cover practically all of Istanbul and many more locations are home to these beautiful women. In most cases the girls will live with a friend, and sometimes even offer duo escort services. Their incall apartments offer quality service and security, and are always located in discreet, yet easy to find locations. You will always find them clean and tidy, ready for your arrival. You will be sent directions to your chosen girl when you confirm your booking with us.</p>
         <p style="font-family: 'Poppins', sans-serif;"> Outcall services are also available from most of the girls we represent. They can come to your hotel or apartment virtually anywhere. Although it is usually best to book an outcall escort near your hotel or apartment’s location, it is not always necessary. They will arrive sooner and be more reliable if you book closer. For example, if you are staying in the Landmark Hotel in Marylebone, it would be a good idea to book your girls from that area too. They do charge a little extra to cover their expenses on outcalls, but if you require them to go much further afield, you may have to pay a little extra on top of that. As always, it is best to check with the receptionist on shift at the time.</p>
         <p style="font-family: 'Poppins', sans-serif;"> It is always best to book from a reputable agency that has been around for a long time. An agency with experience will always have the best girls working with them, and they will always take their clients seriously. Your feedback is as important to us as your booking.</p>
         <h5 style="font-size: 16px; font-family: 'Poppins', sans-serif; color: #c3001e !important;">Istanbul escorts services</h5>
         <p style="font-family: 'Poppins', sans-serif;"> All the call girls working with agencies in Istanbul are categorised based on their appearance and location. However, they are not always categorised by the escort services they provide. To accommodate clients seeking a specific service or type of escort, we have created separate galleries to ensure the process of finding the right escort for you is extremely easy.</p>
         <p style="font-family: 'Poppins', sans-serif;"> There are many girls who offer very specific types of services. Or rather, perhaps a better way to put this is that they enjoy doing certain things with their clients if they choose to. It’s very important to emphasise this, since any services written on a girls profile are always subject to whether or not she wishes to do these with her client. These girls are human beings with thoughts and feelings like anyone else. They work for themselves in a self employed capacity and are more than capable of declaring what they would like to do with their clients. It is always best to clarify anything you are interested in at the beginning of your booking, before any money changes hands. This way, if you are not happy with the outcome, you may leave without wasting your money.</p>
         <p style="font-family: 'Poppins', sans-serif;"> There are so many services listed on the profiles that it becomes quite laborious to list them all to be perfectly honest. Most of them are self explanatory, and some have acronyms to give you an indication. If you are a regular escort client, you will understand basically what these things mean. We will not go into great detail about them with you, we simply list what the girls have asked us to list. Whether they do them or not will be down to the induvial girl, and the individual circumstances during which the bookings take place. The booking of any services are always at the discretion of the girl you book. Any extra fees are clearly listed on each girl’s profile.</p>
         <p style="font-family: 'Poppins', sans-serif;"> Among these services are: massage, domination, A Level, PSE and party girl services alongside your more common: GFE, CIM and COF escort services. To help match clients with an escort who provides the services they desire, you can browse our category galleries to find what you are looking for. It is important to note that there are no hidden costs when booking an escort with our agency, however some models do offer ‘extra’ services which do cost more on top of their standard hourly rate. The fee for the additional services does depend on the escort, but the services which do tend to be counted as an extra service include: A Level, CIM, COB, Couples and MMF. Most of the time the prices for the extra services are detailed on the girl’s profile, but if you have any further questions, check with our receptionist, or ask the girl at the beginning of your booking.</p>
       </div>
    </div>
 </div>



<!-- section 6 -->
<div class="elementor-widget-container">
   <section id="subscribe2" class="position-relative bg-dark block-cat-subscribe block-subscribe2 bg-light section-100 ">
      <div class="bg-image" data-bg="assets/img/bg_nl.jpg" style="background-image: url(&quot;assets/img/bg_nl.jpg&quot;);"></div>
      <div class="overlay-innerxx"></div>
      <div class="bg-gradient-none">
         <div class="container bg-content">
            <div class="row align-items-center wrapper ">
               <div class="col-md-6">
                  <div class="subscribe-form-wrapper text-light py-5">
                     <div class="text-center text-md-left">
                        <h2 data-elementor-setting-key="title" data-elementor-inline-editing-toolbar="none" class="elementor-inline-editing mb-2 
                           font- 
                           text-white font-weight-bold">STAY <i class="fa fa-envelope mx-2"></i> UPDATED</h2>
                        <p data-elementor-setting-key="subtitle" data-elementor-inline-editing-toolbar="none" class="elementor-inline-editing lead text-white font- text-500 mb-4 font-weight-bold">Join our newsletter today!</p>
                     </div>
                     
                     <div id="newsletterthankyou33383" style="display:none" class="newsletter-confirmation txt">
                        <div class="h4">Email confirmation sent.</div>
                        <p>Please check your email for a confirmation email.</p>
                        <p class="small">Only once you've confirmed your email will you be subscribed to our newsletter.</p>
                     </div>
                     <form id="mailinglist-form33383" name="mailinglist-form33383" method="post" onsubmit="return IsEmailMailinglist33383();" class="footer-newsletter">
                        <div class="input-group">
                           <input type="text" name="ppt_newsletter_mailme33383" id="ppt_newsletter_mailme33383" value="" placeholder="Email Address Here.." style="height:46px;" class="form-control  rounded-0"> 
                           <div class="input-group-append">
                              <button type="submit" class="btn btn-primary px-3">Join</button>
                           </div>
                        </div>
                     </form>
                     
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
</div>