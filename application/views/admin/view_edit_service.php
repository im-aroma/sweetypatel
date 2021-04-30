<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Service
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit Service</li>
      </ol>
    </section>
     
    <form name="edit_service" id="edit_service" method="POST" action="<?php echo base_url('admin/upd_service'); ?>"/>
    
    <div class="container">
  
    <label for="last name"><b>Service:</b></label>
    <input class="form-control" type="text"  name="service_name" value="<?php echo $res['service']; ?>" required>
    <br/>
    <input type="hidden" name="upd_id" id="upd_id" value="<?php echo $res['id']; ?>" />
    <button type="submit" class="btn btn-default" name="submit" id="submit" value="Update">Update</button>
    </div>
  </form>
  
   
  </div>
  <!-- /.content-wrapper -->