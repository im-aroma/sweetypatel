
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Profile Type
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit Profile Type</li>
      </ol>
    </section>
     <?php //echo '<pre>';print_r($res);?>
    <form name="edit_pro_type" id="edit_pro_type" method="POST" action="<?php echo base_url('admin/upd_pro_type'); ?>"/>
    <?php 
         foreach($res as $val)
         {
    ?>
    <div class="container">
  
    <label for="last name"><b>Profile Type:</b></label>
    <input class="form-control" type="text"  name="pro_type" value="<?php echo $val['pro_type']; ?>" required>
    <br/>
    <input type="hidden" name="upd_id" id="upd_id" value="<?php echo $val['id']; ?>" />
    <button type="submit" class="btn btn-default" name="submit" id="submit" value="Update">Update</button>
    </div>
    <?php } ?>
  </form>
  
   
  </div>
  <!-- /.content-wrapper -->

 

