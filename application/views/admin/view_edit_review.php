<!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">

    <!-- Content Header (Page header) -->

    <section class="content-header">

      <h1>

        Edit Review

        

      </h1>

      <ol class="breadcrumb">

        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>

        <li class="active">Edit Review</li>

      </ol>

    </section>

     <?php 

           
           
           foreach($res as $val)

           { 

     ?>

    <form name="edit_review" id="edit_review" method="POST" action="<?php echo base_url()?>admin/upd_review"  enctype="multipart/form-data"/>

    

    <div class="container">

  

    <label for="last name"><b>Name:</b></label>

    <input class="form-control" type="text"  name="nme" value="<?php echo $val['name']; ?>" required>

    <br/>
    

    <label for="last name"><b>Email:</b></label>

    <input class="form-control" type="text"  name="email" value="<?php echo $val['email']; ?>" >

    <br/>
    
    
    <label for="last name"><b>Content:</b></label>

    <textarea name="content" id="content" class="form-control" cols="25" rows="5"><?php echo $val['content']; ?></textarea>

    <br/>
    
    
    <label for="last name"><b>Rating:</b></label>

    <select name="rating" id="rating" class="form-control" required>
        
        <option value="">--Select--</option>
        
        <option value="1">1 star</option>
        
        <option value="2">2 stars</option>
        
        <option value="3">3 stars</option>
        
        <option value="4">4 stars</option>
        
        <option value="5">5 stars</option>
        
    </select>
    
    <script>
        document.getElementById('rating').value="<?php echo $val['rating']; ?>";
    </script>

    <br/>

    <input type="hidden" name="upd_id" id="upd_id" value="<?php echo $val['id']; ?>" />

    <button type="submit" class="btn btn-default" name="submit" value="Update">Update</button>

  </div>

  </form>

  <?php } ?>

   

  </div>

  <!-- /.content-wrapper -->



 



