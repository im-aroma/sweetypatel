<style>
    .border-light {
    border: 1px solid #ededed !important;
}
.bg-light {
    background-color: #f8f9fa!important;
}
.card-blog, .card-blog-post, .card-listing {
    margin-bottom: 40px;
}
@media (min-width: 576px) and (max-width: 991.98px) { 
	.mt-4 { margin-top:20px !important; }
  	.hide-ipad { display:none !important; }
}  

@media (max-width: 575.98px) {
	.mt-4:not(.btn) { margin-top:10px !important; }
	h1 { font-size: 30px !important; } 
	.hide-mobile { display:none !important; }
}
/*opacity */
.opacity-5 { opacity:0.5 }

@media(min-width:1200px){
.btn-icon.icon-before.not(.btn-system ) i:after{content:"";position:absolute;top:-10px;left:25px;width:1px;height:35px;background:#ccc;background:rgba(255,255,255,0.3)}
}

.list-small:not('.product') img{max-width:130%!important;width:130%!important;max-height:180px}
.single-page .nav-tabs>li:first-child() a { boroder-left:0px; }

 @media (min-width: 1200px) { .socialbar .sharertitle { min-width: 100px;}  .socialbar .sharebutton {margin: 0px 10px;  } }
@media all{
.socialbar{width:100%;border-bottom:1px solid #dfdfdf;padding:20px 0 20px 0;margin:10px 0 20px 0;float:left; background:#ffffff;}
.socialbar .sharertitle{display:inline-block;border-right:1px solid #dfdfdf;padding:10px 20px 2px 5px;margin:0 20px 0 0;color:#b1a9a5; text-transform:uppercase;vertical-align:middle;text-align:center;  }
.total-count{color:#333;font-size:20px;font-weight:700;}
.total-text{font-size:12px;display:block;margin:-5px 0 0;}

.socialbar .sharebutton{display:inline-block; line-height:36px; margin: 0px 5px; }

.social-buttons a{color:#666;text-decoration:none;font-size:14px; }
.social-buttons a svg { width: 16px;
    position: absolute;
    left: 15px;
    top: 10px; }
 
.social-buttons .facebook{background:#3a589e;color:#fff;padding:10px 10px;border-radius:3px;border:1px solid #3a589e;position:relative;}

 
.social-buttons .facebook span.count{padding:0 0 0 25px;vertical-align:middle; margin-left:10px; }
.social-buttons .twitter{background:#55acee;color:#fff;padding:10px 10px;border-radius:3px;border:1px solid #55acee;position:relative;}

.social-buttons .twitter span.count{padding:0 0 0 25px;vertical-align:middle; margin-left:10px; }
.social-buttons .linkedin{background:#0077b5;color:#fff;padding:10px 10px;border-radius:3px;border:1px solid #0077b5;position:relative;}

.social-buttons .linkedin span.count{padding:0 0 0 25px;vertical-align:middle; margin-left:10px; }

.social-buttons .pinterest{background:#e50022;color:#fff;padding:10px 10px;border-radius:3px;border:1px solid #e50022;position:relative;}

.social-buttons .pinterest span.count{padding:0 0 0 25px;vertical-align:middle; margin-left:10px;  }
@media screen and (max-width: 500px){
.sharebutton span.count{text-indent:-9999px;padding:0 0 0 15px!important;width:0px;display:inline-block;}
}
@media print{
.social-buttons{display:none;}
}
}
</style>
<!-- section1 -->
<div class="bg-light">
   <div class="container py-5 ">
      <div class="row">
         <div class="col pr-md-5">
           


            <div class="card blog-single shadow-sm border-0">
               <div class="card-body">
                  <img src="<?php echo base_url(); ?>uploads/blog/blog11.jpg" alt="Top Five Common Prejudices About Business." class="card-img-top img-fluid">
                  <h1 class="py-4 mt-4">Top Five Common Prejudices About Business.</h1>
                  <div id="socialbar" class="socialbar social-buttons">
                     <div class="sharertitle hide-mobile">
                        <span class="total-count">17</span>
                        <span class="total-text">Mar</span>
                     </div>
                     <div class="sharerfacebook sharebutton">
                        <a href="#" class="facebook" target="_blank" title="Share on Facebook">
                           <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                              <title></title>
                              <g>
                                 <path d="M21,1H3A2,2,0,0,0,1,3V21a2,2,0,0,0,2,2h7.5a.5.5,0,0,0,.5-.5v-7a.5.5,0,0,0-.5-.5h-1a.5.5,0,0,1-.5-.5v-3a.5.5,0,0,1,.5-.5h1a.5.5,0,0,0,.5-.5v-1A4.5,4.5,0,0,1,15.5,5h3a.5.5,0,0,1,.5.5v3a.5.5,0,0,1-.5.5h-3a.5.5,0,0,0-.5.5v1a.5.5,0,0,0,.5.5h3a.5.5,0,0,1,.49.58l-.5,3A.5.5,0,0,1,18,15H15.5a.5.5,0,0,0-.5.5v7a.5.5,0,0,0,.5.5H21a2,2,0,0,0,2-2V3A2,2,0,0,0,21,1Z" style="fill:#fff"></path>
                              </g>
                           </svg>
                           <span class="count">Share</span>
                        </a>
                     </div>
                     <div class="sharertwitter sharebutton">
                        <a href="#" class="twitter" target="_blank" title="Share on Twitter">
                           <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                              <title></title>
                              <g>
                                 <path d="M23.87,4.43a.5.5,0,0,0-.6-.1,4.76,4.76,0,0,1-.75.27A4.85,4.85,0,0,0,23.37,3a.5.5,0,0,0-.77-.53,10.59,10.59,0,0,1-2.53,1A5.05,5.05,0,0,0,16.5,2a5.71,5.71,0,0,0-3,.93C11.6,4,11.27,6.47,11.41,8a13,13,0,0,1-9-4.76A.53.53,0,0,0,2,3a.5.5,0,0,0-.4.25,5.35,5.35,0,0,0,.22,5.7c-.15-.1-.31-.22-.47-.35A.5.5,0,0,0,.5,9,5.73,5.73,0,0,0,3,13.64l-.39-.11A.5.5,0,0,0,2,14.2a6.48,6.48,0,0,0,4.19,3.62A9.22,9.22,0,0,1,.56,19a.5.5,0,0,0-.31.93A15.2,15.2,0,0,0,8,22H8a13.35,13.35,0,0,0,10-4.63,13.63,13.63,0,0,0,3.65-9.92A9.81,9.81,0,0,0,23.92,5,.5.5,0,0,0,23.87,4.43ZM8,21.5Z" style="fill:#fff"></path>
                              </g>
                           </svg>
                           <span class="count">Tweet</span>
                        </a>
                     </div>
                     <div class="sharerlinkedin sharebutton">
                        <a href="#" class="linkedin" data-size="medium" rel="nofollow noopener noreferrer" target="_blank" title="Share on LinkedIn">
                           <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="linkedin" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                              <path fill="currentColor" d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z" class=""></path>
                           </svg>
                           <span class="count">Share</span>
                        </a>
                     </div>
                     <div class="sharerpinterest sharebutton">
                        <a href="#" class="pinterest" rel="nofollow" target="_blank" title="Share on Pinterest">
                           <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="pinterest-square" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-pinterest-square fa-w-14">
                              <path fill="currentColor" d="M448 80v352c0 26.5-21.5 48-48 48H154.4c9.8-16.4 22.4-40 27.4-59.3 3-11.5 15.3-58.4 15.3-58.4 8 15.3 31.4 28.2 56.3 28.2 74.1 0 127.4-68.1 127.4-152.7 0-81.1-66.2-141.8-151.4-141.8-106 0-162.2 71.1-162.2 148.6 0 36 19.2 80.8 49.8 95.1 4.7 2.2 7.1 1.2 8.2-3.3.8-3.4 5-20.1 6.8-27.8.6-2.5.3-4.6-1.7-7-10.1-12.3-18.3-34.9-18.3-56 0-54.2 41-106.6 110.9-106.6 60.3 0 102.6 41.1 102.6 99.9 0 66.4-33.5 112.4-77.2 112.4-24.1 0-42.1-19.9-36.4-44.4 6.9-29.2 20.3-60.7 20.3-81.8 0-53-75.5-45.7-75.5 25 0 21.7 7.3 36.5 7.3 36.5-31.4 132.8-36.1 134.5-29.6 192.6l2.2.8H48c-26.5 0-48-21.5-48-48V80c0-26.5 21.5-48 48-48h352c26.5 0 48 21.5 48 48z" class=""></path>
                           </svg>
                           <span class="count">Pin</span>
                        </a>
                     </div>
                     <div class="small float-right hide-ipad hide-mobile sharebutton">
                        <div class="pt-2 opacity-5"><a href="#" rel="category tag">Uncategorized</a></div>
                     </div>
                  </div>
                  <hr>
                  <div class="text-muted">
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur</p>
                     <p>Accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
                  </div>
                  <div class="mt-4">
                     <div class="text-center text-muted p-2 py-4 bg-light"> <i class="fa fa-comments mr-2"></i> Please login to post a comment. </div>
                  </div>
               </div>
            </div>





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
                  <h5 class="card-title">Categories</h5>
                  <ul class="list-group list-group-flush">
                     <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                        <a href="http://www.istanbulescortservice.com/category/uncategorized/" class="text-muted">Uncategorized</a>
                        <span class="badge bg-primary text-white badge-pill">7</span>
                     </li>
                     <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                        <a href="http://www.istanbulescortservice.com/category/consulting/" class="text-muted">Consulting</a>
                        <span class="badge bg-primary text-white badge-pill">1</span>
                     </li>
                     <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                        <a href="http://www.istanbulescortservice.com/category/business/" class="text-muted">Business</a>
                        <span class="badge bg-primary text-white badge-pill">2</span>
                     </li>
                     <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                        <a href="http://www.istanbulescortservice.com/category/corporate/" class="text-muted">Corporate</a>
                        <span class="badge bg-primary text-white badge-pill">1</span>
                     </li>
                     <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                        <a href="http://www.istanbulescortservice.com/category/finance/" class="text-muted">Finance</a>
                        <span class="badge bg-primary text-white badge-pill">1</span>
                     </li>
                  </ul>
               </div>
            </div>
            <div class="card card-blog">
               <div class="card-body">
                  <h5 class="card-title">Popular Blog Posts</h5>
                  <ul class="list-unstyled">
                     <li class="media pt-3 border-top mt-3">
                        <a href="#" style="max-width:60px;">
                        <img src="uploads/blog/blog11.jpg" alt="" data-src="uploads/blog/blog11.jpg" class="ppt_image img-fluid">                </a>
                        <div class="media-body ml-3">
                           <h5 class="mt-0 mb-2 small"><a href="#" class="text-decoration-none text-dark">
                              Top Five Common Prejudices About Business.            </a>
                           </h5>
                           <div class="text-muted small"><i class="fa fa-clock"></i> March 17, 2021</div>
                        </div>
                     </li>
                     <li class="media pt-3 border-top mt-3">
                        <a href="#" style="max-width:60px;">
                        <img src="uploads/blog/blog1.jpg" alt="" data-src="uploads/blog/blog1.jpg" class="ppt_image img-fluid">                </a>
                        <div class="media-body ml-3">
                           <h5 class="mt-0 mb-2 small"><a href="#" class="text-decoration-none text-dark">
                              Seven Top Reasons Why You Face Obstacles In Learning Business.            </a>
                           </h5>
                           <div class="text-muted small"><i class="fa fa-clock"></i> March 17, 2021</div>
                        </div>
                     </li>
                     <li class="media pt-3 border-top mt-3">
                        <a href="#" style="max-width:60px;">
                        <img src="uploads/blog/blog2.jpg" alt="" data-src="uploads/blog/blog2.jpg" class="ppt_image img-fluid">                </a>
                        <div class="media-body ml-3">
                           <h5 class="mt-0 mb-2 small"><a href="#" class="text-decoration-none text-dark">
                              Why Is Business So Famous?            </a>
                           </h5>
                           <div class="text-muted small"><i class="fa fa-clock"></i> March 17, 2021</div>
                        </div>
                     </li>
                     <li class="media pt-3 border-top mt-3">
                        <a href="#" style="max-width:60px;">
                        <img src="uploads/blog/blog3.jpg" alt="" data-src="uploads/blog/blog3.jpg" class="ppt_image img-fluid">                </a>
                        <div class="media-body ml-3">
                           <h5 class="mt-0 mb-2 small"><a href="#" class="text-decoration-none text-dark">
                              This Story Behind Business Will Haunt You Forever!            </a>
                           </h5>
                           <div class="text-muted small"><i class="fa fa-clock"></i> March 17, 2021</div>
                        </div>
                     </li>
                     <li class="media pt-3 border-top mt-3">
                        <a href="#" style="max-width:60px;">
                        <img src="uploads/blog/blog4.jpg" alt="" data-src="uploads/blog/blog4.jpg" class="ppt_image img-fluid">                </a>
                        <div class="media-body ml-3">
                           <h5 class="mt-0 mb-2 small"><a href="#" class="text-decoration-none text-dark">
                              Seven Places That You Can Find Business.            </a>
                           </h5>
                           <div class="text-muted small"><i class="fa fa-clock"></i> March 17, 2021</div>
                        </div>
                     </li>
                  </ul>
               </div>
            </div>
         </aside>
      </div>
   </div>
</div>
