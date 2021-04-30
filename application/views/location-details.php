<style>
@-webkit-keyframes spin {
  0% {
    transform: rotate(0deg) translate(-50%);
  }
  100% {
    transform: rotate(360deg) translate(-50%);
  }
}
@keyframes spin {
  0% {
    transform: rotate(0deg) translate(-50%);
  }
  100% {
    transform: rotate(360deg) translate(-50%);
  }
}
.loader {
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translateY(-50%) translateX(-50%);
  -webkit-animation: spin 0.35s infinite linear;
          animation: spin 0.35s infinite linear;
  border: 2px solid #707070;
  border-radius: 50%;
  border-top-color: white;
  height: 25px;
  transform-origin: left;
  top: 45%;
  width: 25px;
}
.about {
  font-family: Helvetica, "Helvetica Neue", "Tahoma";
  font-size: 1rem;
  color: #adadad;
  line-height: 17px;
}
.cover {
  height: 300px;
  overflow: hidden;
  position: relative;
  width: 100%;
}
.cover img {
  position: absolute;
  left: 50%;
  transform: translateX(-50%);
  height:40vh;
  width: 100%;
  object-fit: cover;
  border-top-left-radius: 25px;
  border-top-right-radius: 25px;
}
.name {
  font-family: Helvetica, "Helvetica Neue", "Tahoma";
  font-size: 2rem;
}
.profile-pic {
  position: absolute;
  left: 25%;
  transform: translateX(-50%);
  border-radius: 50%;
  border: 4px solid white;
  height: 280px;
  width: 280px;
  overflow: hidden;
  transform: translateX(-50%) translateY(-50%);
  top: 0;
}

.profile-pic img {
  box-sizing: border-box;
  height: 100%;
  left: 50%;
  max-height: 100%;
  position: absolute;
  transform: translateX(-50%);
  transition: all 0.15s ease-out;
  width: auto;
}
.user-info {
  *zoom: 1;
  padding: 8px;
  position: relative;
}
.user-info:before,
.user-info:after {
  content: "";
  display: table;
}
.user-info:after {
  clear: both;
}

.layer {
  background-color: rgba(0, 0, 0, 0.25);
  display: none;
  height: 100%;
  left: 0;
  position: absolute;
  top: 0;
  width: 100%;
}

@media only screen and (max-width: 600px) {
   .profile-pic {
  position: absolute;
  left: 50%;
  transform: translateX(-50%);
  border-radius: 50%;
  border: 4px solid white;
  height: 210px;
  width: 210px;
  overflow: hidden;
  transform: translateX(-50%) translateY(-50%);
  top: 0;
}

.username {
  margin-top: 122px;
  text-align: center;
}
}
@media only screen and (min-width: 600px) {
   .profile-pic {
  position: absolute;
  left: 25%;
  transform: translateX(-50%);
  border-radius: 50%;
  border: 4px solid white;
  height: 280px;
  width: 280px;
  overflow: hidden;
  transform: translateX(-50%) translateY(-50%);
  top: 0;
}
.username {
    margin-top:auto;
    margin-left: 40%;
}
}
    </style>

    <!-- section 1 -->
    <div class="container full-height my-5">
      <div class="cover">
         <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/584938/sterling-davis-513079-unsplash.jpg"/>
         <div class="layer">
            <div class="loader"></div>
         </div>
      </div>
      <?php
            
              foreach($result as $res_val)
              {  
      ?>
      <div class="user-info">
         <div class="profile-pic">
            <img src="<?php echo base_url(); ?>uploads/location/<?php echo $res_val['loc_img']; ?>"/>
            <div class="layer">
               <div class="loader"></div>
            </div>
         </div>
         <div class="username">
            <div class="name"><span class="verified"></span> <i class="fas fa-map-marker-alt"> </i> <?php echo $res_val['loc_title']; ?></div>
            <div class="about">We provide customer satified Service</div>
         </div>
      </div>
    <?php } ?>
   </div>
   <div class="container my-5">
      <h1 style="text-align: center;"><?php echo $res_val['loc_title']; ?> </h1>
      <p><?php echo $res_val['loc_des']; ?></p>
   </div>
   <!-- section2 -->
  
          <section class="block-cat-listings block-listings2 bg-white section-20 ">
   <div class="container">
      <div class="row">
         <div class="col-12 section-bottom-40">
            <div class="text-center">
               <h2 data-elementor-setting-key="title" data-elementor-inline-editing-toolbar="none" class="elementor-inline-editing  font- text-dark font-weight-bold">Girls available in <?php echo str_replace('-',' ',$loc_title); ?></h2>
               <hr style="width:50px; height:3px;" class="bg-primary my-4  mx-auto">
            </div>
         </div>
         <div class="col-12">
            <div class="clearfix"></div>
            <div class="row">
            <?php 
                  //echo '<pre>';print_r($get_avbl_loc_list);
                  foreach($get_avbl_loc_list as $get_avbl_loc_list_val) 
                  { 

                    $pro_imge = explode(',',$get_avbl_loc_list_val['imge']);
                    $pro_alt_title  = explode(',',$get_avbl_loc_list_val['alt_title']);
            ?>
               <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                  <div class="new-search info  no-resize img-user img-user-big bg-none" data-pid="284">
                     <figure>
                        <a href="#"> 
                        <img data-src="<?php echo base_url(); ?>uploads/profile/<?php echo $pro_imge[0]; ?>" class="img-fluid lazy loaded" alt="first img" src="<?php echo base_url(); ?>uploads/profile/<?php echo $pro_imge[0]; ?>" data-was-processed="true"> </a>
                        <div class="list-info-pop bg-secondary">
                           <ul class="list-unstyled">
                              <li> <span>Age</span><?php echo $get_avbl_loc_list_val['age'];  ?></li>
                              <li> <span>Height</span><?php echo $get_avbl_loc_list_val['height'];  ?></li>
                              <li> <span>Dress Size</span><?php echo $get_avbl_loc_list_val['dress_size'];  ?></li>
                           </ul>
                        </div>
                     </figure>
                     <div class=" pt-3 position-relative">
                        <h3 class="mt-0 text-uppercase font-weight-bold"><a href="#"><?php echo $res_val['loc_title']; ?></a></h3>
                     </div>
                  </div>
               </div>
               <?php } ?>
            </div>
         </div>
      </div>
   </div>
</section>


   <!-- section 3 -->
   <div class="container">
    <div class="other-cat">
        <h3 class="h6 pt-3 text-danger">Other Escorts Location</h3>
        <div class="row">
            <?php 
                  foreach($get_rand_list as $get_rand_list_val)
                  {  
            ?>
            <div class="col-6 col-md-4 col-lg-3  pb-3">
                <div class="card bg-lbrown">
                    <a
                        href="<?php echo base_url(); ?>location/<?php echo str_replace(' ','-',trim($get_rand_list_val['sub_loc_title']));?>/<?php echo $get_rand_list_val['id'] ?>">
                        <img class="img-fluid rounded-top"
                            src="<?php echo base_url(); ?>uploads/location/<?php echo $get_rand_list_val['loc_img']; ?>"
                            alt="<?php echo $get_rand_list_val['img_alt_title']; ?>"></a>
                    <div class="card-body p-2 buvaneswar_body">
                        <h2 class="card-title text-uppercase text-center m-0  h6">
                            <?php echo $get_rand_list_val['sub_loc_title']; ?></h2>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>