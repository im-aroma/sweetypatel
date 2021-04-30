
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit States
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit States</li>
      </ol>
    </section>
     <?php //echo '<pre>';print_r($result);?>
    <form name="edit_state" id="edit_state" method="POST" action="<?php echo base_url(); ?>admin/upd_states"/>
    <?php 
       foreach($result as $val)
       { 

    ?>
    <div class="container">
  
    <label for="last name"><b>State:</b></label>
    <input class="form-control" type="text"  name="st_name" value="<?php echo $val['state_name']; ?>" required>
    <br/>
    
    <input type="hidden" name="upd_id" id="upd_id" value="<?php echo $val['id']; ?>" />
    <button type="submit" class="btn btn-default" name="submit" id="submit" value="Update">Update</button>
    </div>
  <?php } ?>
  </form>
  
   
  </div>
  <!-- /.content-wrapper -->

 

