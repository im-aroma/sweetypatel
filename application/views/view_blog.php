<style>
.card-blog, .card-blog-post, .card-listing {
    margin-bottom: 40px;
}
.card-blog, .filters_col {
    background-color: #fff;
    padding: 20px 20px 15px 20px;
    margin-bottom: 25px;
    border: 1px solid #ededed;
}
</style>
<!-- section1 -->
<div class="bg-light"> 
   <div class="container py-5 ">
      <div class="row">
         <div class="col pr-md-5">
            <?php
          
                foreach($res as $val)
                {  
               ?>
            <div class="card card-blog-post p-4 py-4 border-light rounded-0 mb-5">
               <div class="row d-flex flex-row-reverse">
                  <div class="col">
                     <a href="#">
                     <img data-src="<?php  echo base_url();?>uploads/blog/<?php echo $val['blog_img']; ?>" alt="<?php echo $val['img_alt_title']; ?>" class="img-fluid mb-4 mb-md-0 lazy loaded" src="<?php  echo base_url();?>uploads/blog/<?php echo $val['blog_img']; ?>" data-was-processed="true">  
                     </a>
                  </div>
                  <div class="col-md-6">
                     <div class="d-flex justify-content-between">
                        <!-- <span class="text-muted">
                        <i class="fa fa-folder-open"></i> 
                        <a href="#" rel="category tag">Uncategorized</a>            </span> -->
                        <span class="text-muted">
                        <i class="fa fa-clock"></i> 
                        <time datetime="<?php echo date('F j,Y',strtotime($val['posted_date'])); ?>"><?php echo date('F j,Y',strtotime($val['posted_date'])); ?></time>
                        </span>
                     </div>
                     <h3 class="pt-2 pt-md-3 pb-2 h2 font-weight-normal line-height-40">
                        <a href="#" class="text-decoration-none text-dark"><?php echo $val['blog_title']; ?></a>
                     </h3>
                     <!-- <h2 class="h6 text-white"><?php echo $val['sub_blog_title']; ?></h2> -->
                     <p class="text-muted"><span class="shortcode_excerpt"><?php echo substr($val['blog_des'],0,200)."...";?></span> <u><a class="text-primary" href="<?php echo base_url();?>blog/<?php echo str_replace(' ','-',$val['sub_blog_title']); ?>/<?php echo $val['id']; ?>">read more</a></u></p>
                  </div>
               </div>
            </div>
            <?php } ?>
            
            
           
            
            
            <div class="my-4 pt-3  mobile-mb-4  mobile-pb-4"></div>
         </div>
         <aside class="sidebar-blog col-lg-3 hide-mobile">
            <div class="card card-blog">
               <div class="card-body">
                  <h5 class="card-title">
                     Search    
                  </h5>
                  <form action="" method="get">
                     <div class="position-relative">
                        <input type="text" class="form-control" name="keyword" placeholder="Keyword..">
                        <button type="submit" class="position-absolute btn btn-sm" style="top:5px; right:10px;"><i class="fa fa-search"></i></button>
                     </div>
                  </form>
               </div>
            </div>
            <div class="card card-blog">
               <div class="card-body">
                  <h5 class="card-title">Locations</h5>
                  <ul class="list-group list-group-flush">
                     <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                        <a href="#" class="text-muted">Andheri</a>
                        <span class="badge bg-primary text-white badge-pill">7</span>
                     </li>
                     <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                        <a href="#" class="text-muted">Juhu</a>
                        <span class="badge bg-primary text-white badge-pill">3</span>
                     </li>
                     <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                        <a href="#" class="text-muted">Bandra</a>
                        <span class="badge bg-primary text-white badge-pill">5</span>
                     </li>
                     <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                        <a href="#" class="text-muted">Navi Mumbai</a>
                        <span class="badge bg-primary text-white badge-pill">8</span>
                     </li>
                    
                  </ul>
               </div>
            </div>
            <div class="card card-blog">
               <div class="card-body">
                  <h5 class="card-title">Popular Blog Posts</h5>
                  <ul class="list-unstyled">
                     <?php
                            foreach($res as $blo_val)
                            {
                        ?>
                     <li class="media pt-3 border-top mt-3">
                         
                        <div class="media-body ml-3">
                           <h5 class="mt-0 mb-2 small"><a href="<?php echo base_url(); ?>blog/<?php echo str_replace(' ','-',$blo_val['sub_blog_title']); ?>/<?php echo $blo_val['id']; ?>" class="text-decoration-none text-dark">
                              <?php echo $blo_val['blog_title']; ?></a>
                           </h5>
                           <div class="text-muted small"><i class="fa fa-clock"></i> <?php echo date('F j,Y',strtotime($val['posted_date'])); ?></div>
                        </div>
                     </li>
                     <?php } ?>
                  </ul>
               </div>
            </div>
         </aside>
      </div>
   </div>
   </div>
