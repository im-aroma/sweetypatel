
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add States
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Add States</li>
      </ol>
    </section>
     <?php //echo '<pre>';print_r($res);?>
    <form name="add_state" id="add_state" method="POST" action="<?php echo base_url(); ?>admin/add_states"/>
    
    <div class="container">
  
    <label for="last name"><b>State:</b></label>
    <input class="form-control" type="text"  name="st_name" value="" required>
    <br/>
    
    <button type="submit" class="btn btn-default" name="submit" id="submit" value="Add">Add</button>
    </div>
  </form>
  
   
  </div>
  <!-- /.content-wrapper -->

 

