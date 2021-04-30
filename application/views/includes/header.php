<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <?php 
         foreach($row as $val) { 
         
         ?>
    <title><?php if(!empty($val['meta_title'])) { echo $val['meta_title']; } ?></title>
    <meta name="description" content="<?php if(!empty($val['meta_des'])) { echo $val['meta_des']; } ?>" />
    <?php 
         } 
         
         ?> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/profile.css"> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
    <div id="page-loading" style="text-align: center; padding-top: 300px;"> <img src="http://localhost/sweetypatel.net-dynamic/assets/img/loading.svg" alt="loading page" /> </div>
    <header class="elementor_header header6 bg-dark tmb">
        <nav class="elementor_topmenu d-none d-md-block bg-dark text-light">
           <div class="container">
              <div class="row">
                 <div class="col-md-6 pr-0">
                    <ul id="menu-top" class="clearfix mb-0 seperator list-inline mb-0">
                       <li itemscope="itemscope" itemtype="#" id="list-inline-item-62" class="list-inline-item list-inline-item-type-post_type list-inline-item-object-page list-inline-item-62 nav-item"><a title="Terms &amp; Conditions" href="#" class="nav-link">Terms &amp; Conditions</a></li>
                       <li itemscope="itemscope" itemtype="#" id="list-inline-item-61" class="list-inline-item list-inline-item-type-post_type list-inline-item-object-page list-inline-item-61 nav-item"><a title="Privacy Policy" href="#" class="nav-link">Privacy Policy</a></li>
                       <li itemscope="itemscope" itemtype="#" id="list-inline-item-60" class="list-inline-item list-inline-item-type-post_type list-inline-item-object-page list-inline-item-60 nav-item"><a title="FAQ" href="#" class="nav-link">FAQ</a></li>
                    </ul>
                 </div>
                 <div class="col d-none d-md-block">
                    <ul class="list-inline p-0 mb-0 float-right seperator">
                        
                       <li class="list-inline-item">
                          <a href="javascript:void(0);" onclick="processLogin();"> Sign In</a>         
                       </li>
                       <li class="list-inline-item">
                          <a href=""> Register</a>         
                       </li>
                       <li class="list-inline-item pr-0">
                          <div class="socials">
                             <a class="social" target="_blank" href="https://www.twitter.com/" title="Twitter"> <img src="http://localhost/sweetypatel.net-dynamic/assets/img/twitter_icon.svg" alt="twitter" class="img-fluid"> </a>
                             <a class="social" target="_blank" href="https://www.facebook.com/" title="Facebook"> <img src="http://localhost/sweetypatel.net-dynamic/assets/img/facebook_icon.svg" alt="twitter" class="img-fluid"> </a>
                             <a class="social" target="_blank" href="https://www.youtube.com/" title="YouTube"> <img src="http://localhost/sweetypatel.net-dynamic/assets/img/youtube_icon.svg" alt="twitter" class="img-fluid"> </a>
                             <a class="social" target="_blank" href="https://www.instagram.com/" title="Instagram"> <img src="http://localhost/sweetypatel.net-dynamic/assets/img/instagram_icon.svg" alt="twitter" class="img-fluid"> </a>
                          </div>
                       </li>
                    </ul>
                 </div>
              </div>
           </div>
        </nav>
        <nav class="elementor_mainmenu navbar navbar-dark navbar-expand-lg">
           <div class="container">
              <a class="navbar-brand" href="index.html"> 
              <img src="<?php echo base_url(); ?>assets/img/logo-3-300x36.png" alt="logo" class="img-fluid navbar-brand-light">         <img src="<?php echo base_url(); ?>assets/img/logo-3-300x36.png" alt="logo" class="img-fluid navbar-brand-dark">         </a>
              <ul class="topbar-info main-header ">
                 <li class="hide-mobile hide-ipad">
                    <form action="" class="search">
                       <div class="input-group">
                          <input type="text" class="form-control rounded-0 typeahead" name="s" placeholder="Keyword.." autocomplete="off">
                          <div class="input-group-append">
                             <button class="btn btn-primary  rounded-0 text-uppercase px-3 border-0" type="submit"> Search </button>
                          </div>
                       </div>
                    </form>
                 </li>
                 <li class="hide-ipad hide-mobile phonesingle"> <span class="media"> <span class="media-left"> <span class="icon"> <i class="fa fa-phone-alt text-primary"></i> </span> </span> <span class="media-content"> <strong class="btn-block mt-n2" style="font-size:20px;">+90 000 0000 000</strong> <span class="opacity-5">info@exampleemail.com</span> </span> </span> </li>
              </ul>
              <button class="navbar-toggler menu-toggle tm border-0"><span class="fa fa-bars"></span></button> 
           </div>
        </nav>
        <nav class="elementor_mainmenu elementor_submenu py-1 navbar-bottom navbar navbar-expand-md navbar-light d-none d-lg-block shadow-sm bg-primary  navbar-dark py-2">
           <div class="container px-md-0">
              <div class="collapse navbar-collapse main-menu" id="header2menubar">
              <ul id="menu-header-1" class="navbar-nav ">
                    <li itemscope="itemscope" itemtype="#" >
                        <a title="Home" href="<?php echo base_url(); ?>" class="nav-link">Home</a>
                    </li>
                    <li itemscope="itemscope" itemtype="#" >
                        <a title="Latest Escorts" href="<?php echo base_url(); ?>mumbai-escort-girls-gallery" class="nav-link">Gallery</a>
                    </li>
                    <li itemscope="itemscope" itemtype="#" >
                        <a title="Latest Escorts" href="<?php echo base_url(); ?>mumbai-escorts" class="nav-link">Mumbai Escorts</a>
                    </li>
                    <li itemscope="itemscope" itemtype="#">
                        <a title="About Us" href="<?php echo base_url(); ?>locations" class="nav-link">Location</a>
                    </li>
                    <li itemscope="itemscope" itemtype="#" >
                        <a title="Join Us" href="<?php echo base_url(); ?>categories" class="nav-link">Category</a>
                    </li>
                    <li itemscope="itemscope" itemtype="#" >
                        <a title="Advertising" href="<?php echo base_url(); ?>mumbai-escorts-rates" class="nav-link">Rates</a>
                    </li>
                    <li itemscope="itemscope" itemtype="#" >
                        <a title="Advertising" href="<?php echo base_url(); ?>join-us" class="nav-link">Join Us</a>
                    </li>
                    <li itemscope="itemscope" itemtype="#">
                        <a title="Blog" href="<?php echo base_url(); ?>blogs" class="nav-link">Blog</a>
                    </li>
                    <li itemscope="itemscope" itemtype="#">
                        <a title="Contact" href="<?php echo base_url(); ?>mumbai-escorts-phone-number" class="nav-link">Contact</a>
                    </li>
                  </ul>
              </div>
           </div>
        </nav>
     </header>