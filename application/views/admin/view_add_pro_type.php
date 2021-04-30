
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add Profile Type
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Add Profile Type</li>
      </ol>
    </section>
     <?php //echo '<pre>';print_r($res);?>
    <form name="add_pro_type" id="add_pro_type" method="POST" action="<?php echo base_url('admin/add_pro_type'); ?>"/>
    
    <div class="container">
  
    <label for="last name"><b>Profile Type:</b></label>
    <input class="form-control" type="text"  name="pro_type" value="" required>
    <br/>
    
    <button type="submit" class="btn btn-default" name="submit" id="submit" value="Add">Add</button>
    </div>
  </form>
  
   
  </div>
  <!-- /.content-wrapper -->

 

