<section id="callgirl__one">
    <div class="container">
        <div class="row">
            <!-- <div class="col-md-4 ml-auto callgirl__one__para">
              <div class="pt-5 mt-5">
                <p>What happens in the box,</p>
                <p>contact us</p>
              </div> -->
            </div>
        </div>
    </div>
</section>







<!-- Grid row -->
<div class="container my-5">
<div class="row" style="overflow-x: hidden;">

  <?php
                     $i =0;
                    foreach($get_video_list as $get_video_list_val)
                    {	
            ?>
    <!-- Grid column -->
    <div class="col-lg-3 col-md-12 mb-4">
  
      <!--Modal: Name-->
      <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
  
          <!--Content-->
          <div class="modal-content">
  
            <!--Body-->
            <div class="modal-body mb-0 p-0">
  
              <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                <iframe class="embed-responsive-item" data-src="<?php echo $get_video_list_val['video_link']; ?>"
                  allowfullscreen></iframe>
              </div>
  
            </div>
  
            <!--Footer-->
            <div class="modal-footer justify-content-center">
              <span class="mr-4">Spread the word!</span>
              
  
              <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>
  
            </div>
  
          </div>
          <!--/.Content-->
  
        </div>
      </div>
      <!--Modal: Name-->
  
      <a><img class="img-fluid z-depth-1 card" src="<?php echo base_url(); ?>uploads/video_images/<?php echo $get_video_list_val['video_imge']; ?>" alt="video"
          data-toggle="modal" data-target="#modal1"></a>
  
    </div>
    <!-- Grid column -->

    <?php 
    $i++;
    } ?>
  </div>
  <!-- Grid row -->
  <script>
                    $('#modal<?= $i; ?>').on('hidden.bs.modal', function (e) {
                        // do something...
                        $('#modal<?= $i; ?> iframe').attr("src","" ); 
                        });
                    $('#modal<?= $i; ?>').on('show.bs.modal', function (e) {
                        // do something...
                        $('#modal<?= $i; ?> iframe').attr("src",$("#modal<?= $i; ?> iframe").attr("data-src")); 
                        });
                    </script>
</div>