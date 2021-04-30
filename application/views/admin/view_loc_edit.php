
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Location
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit Location</li>
      </ol>
    </section>
    <?php //echo '<pre>';print_r($res);?>

    <form name="edit_loc" id="edit_loc" method="POST" action="<?php echo base_url('admin/update_location'); ?>"  enctype="multipart/form-data"/>
    <?php 
        foreach($res as $val) 
        { 
          $loc_imge = explode(',',$val['loc_img']);
          $loc_alt_tit = explode(',',$val['img_alt_title']);

          //print_r($loc_alt_tit);
    ?>
    <div class="container">
      
    <label for="last name"><b>Title:</b></label>
    <input class="form-control" type="text"  name="title" value="<?php echo $val['loc_title'];?>" required>
    <br/>

    <label for="last name"><b>Sub Location Title:</b></label>
    <input class="form-control" type="text"  name="sub_loc_title" value="<?php echo $val['sub_loc_title'];?>" required>
    <br/>

    <label for="last name"><b>Description:</b></label>
    <textarea class="form-control" name="des" id="des"><?php echo $val['loc_des'];?></textarea>
    <br/>

    <label for="last name"><b>Image:</b></label>
    <input type="file" name="loc_img[]"  multiple/>
    <?php
    $i=0;
    foreach($loc_imge as $loc_imge_val)
    {
    ?>  
    <img src="<?php echo base_url(); ?>uploads/location/<?php echo $loc_imge_val; ?>" width="50" height="50" alt="<?php echo  $loc_alt_tit[$i]; ?>" />   
    <?php
     $i++;}
    ?>
     
    <br/>

    <label for="last name"><b>Image alt title:</b></label>
    <input type="text" name="alt_title" id="alt_title" value="
    <?php echo $val['img_alt_title']; ?>" class="form-control"/>  
    <br/>

    <input type="hidden" name="upd_id" id="upd_id" value="<?php echo $val['id']; ?>" />
    <button type="submit" class="btn btn-default" name="submit" value="Update">Update</button>
  </div>
  <?php } ?>
  </form>
  
   
  </div>
  <!-- /.content-wrapper -->

 

