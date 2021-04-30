

  <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">

    <!-- Content Header (Page header) -->

    <section class="content-header">

      <h1>

        Edit Post

        

      </h1>

      <ol class="breadcrumb">

        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>

        <li class="active">Edit Post</li>

      </ol>

    </section>

    

    <form name="edit_post" id="edit_post" method="POST" action="<?php echo base_url('admin/update_profile'); ?>"  enctype="multipart/form-data"/>

    <?php 
            
    foreach($res as $val)
    { 

      $photo = explode(",",$val['imge']);

      $get_avl_cat = explode(',',$val['avbl_cat']);
     
      $get_avl_loc = explode(',',$val['avbl_loc']);

      $get_avl_services = explode(',',$val['service']);

  
    ?>

    <div class="container">

  
    <label for="last name"><b>Title:</b></label>

    <input type="text" class="form-control" id="exampleInputEmail1" name="title" value="<?php echo $val['title']; ?>" required>

    <br/>



    <label for="last name"><b>Description:</b></label>

    <input type="text"  class="form-control" name="des" value="<?php echo $val['description']; ?>" required/>

    



    <label for="last name"><b>Image:</b></label>

    <input type="file" name="pht[]" multiple/>

    <?php for($i=0;$i<count($photo);$i++) { 

    ?>  

    <img src="<?php echo base_url(); ?>uploads/profile/<?php echo $photo[$i]; ?>" width="50" height="50">

    <?php }  ?>

    <br/>

    

    <label for="last name"><b>Alt title tag:</b></label>

    <input type="text" class="form-control" id="exampleInputEmail1" name="alt_title" value="<?php echo $val['alt_title']; ?>">

    <br/>


    <label for="last name"><b>Category:</b></label>

    <select name="cate[]" id="cate" class="form-control" multiple>

        <option value="">--Select--</option>

        <?php 
		      
              foreach($get_category as $get_cate_val)
              {
        ?>
        <option value="<?php echo $get_cate_val['id']; ?>" 
        <?php foreach($get_avl_cat as $get_avl_cat_val) { if($get_cate_val['id'] == $get_avl_cat_val ) {?>
        selected <?php } } ?>><?php echo $get_cate_val['sub_cat_title'];?></option>
        <?php } ?>
        

    </select>

    <br/>


    <label for="last name"><b>Location:</b></label>

    <select name="loc[]" id="loc" class="form-control" multiple>

        <option value="">--Select--</option>

        <?php 
		       
              foreach($get_location as $get_loc_val)
              {
        ?>
        <option value="<?php echo $get_loc_val['id']; ?>" 
        <?php foreach($get_avl_loc as $get_avl_loc_val) { if($get_loc_val['id'] == $get_avl_loc_val) {?>
        selected <?php } } ?>><?php echo $get_loc_val['sub_loc_title'];?></option>
        <?php } ?>
        

    </select>

    <br/>


    <label for="last name"><b>Available State:</b></label>

    <select name="avl_st" id="avl_st" class="form-control">

        <option value="">--Select--</option>

        <?php 

              foreach($get_states as $get_st_val)
              {
        ?>
        <option value="<?php echo $get_st_val['id']; ?>"><?php echo $get_st_val['state_name'];?></option>
        <?php } ?>
        

    </select>
    <script>
      document.getElementById('avl_st').value = "<?php echo $val['avbl_st']; ?>";
    </script>

    <br/>

    <label for="last name"><b>Profile Type:</b></label>

    <select name="pro_type" id="pro_type" class="form-control">

        <option value="">--Select--</option>

        <?php 
              foreach($get_pro_types as $get_pro_types_val)
              {
        ?>
        <option value="<?php echo $get_pro_types_val['pro_type']; ?>"><?php echo $get_pro_types_val['pro_type'];?></option>
        <?php } ?>
        

    </select>
    <script>
      document.getElementById('pro_type').value = "<?php echo $val['profile_type']; ?>";
    </script>

    <br/>
    
    <label for="last name"><b>Services:</b></label>
         <select name="services[]" id="services" class="form-control" multiple required>
            <option value="">--Select--</option>
            <?php
               
               foreach($get_services as $get_services_val)
               { 
               ?>
            <option value="<?php echo $get_services_val['id']; ?>" <?php foreach($get_avl_services as $get_avl_services_val) { if($get_avl_services_val == $get_services_val['id'] ) { ?>selected<?php } }?>><?php echo $get_services_val['service']; ?></option>
            <?php } ?>
         </select>
        
         <br/>

         <label for="last name"><b>Ethencity:</b></label>
         <input type="text" class="form-control" id="ethencity" name="ethencity" value="<?php echo $val['ethencity']; ?>" required>
         <br/>

         <label for="last name"><b>Sexuality:</b></label>
         <input type="text" class="form-control" id="sexuality" name="sexuality" value="<?php echo $val['sexuality']; ?>" required>
         <br/>

         <label for="last name"><b>Gender:</b></label>
         <input type="text" class="form-control" id="gender" name="gender" value="<?php echo $val['gender']; ?>" required>
         <br/>

         <label for="last name"><b>Body:</b></label>
         <input type="text" class="form-control" id="body" name="body" value="<?php echo $val['body']; ?>" required>
         <br/>

         <label for="last name"><b>Height:</b></label>
         <input type="text" class="form-control" id="ht" name="ht" value="<?php echo $val['height']; ?>" required>
         <br/>

         <label for="last name"><b>Dress size:</b></label>
         <input type="text" class="form-control" id="dres_size" name="dres_size" value="<?php echo $val['dress_size']; ?>" required>
         <br/>

         <label for="last name"><b>Bust size:</b></label>
         <input type="text" class="form-control" id="bust_size" name="bust_size" value="<?php echo $val['bust_size']; ?>" required>
         <br/>

         <label for="last name"><b>Drinking:</b></label>
         <input type="text" class="form-control" id="drink" name="drink" value="<?php echo $val['drinking']; ?>" required>
         <br/>

         <label for="last name"><b>Smoking:</b></label>
         <input type="text" class="form-control" id="smok" name="smok" value="<?php echo $val['smoking']; ?>" required>
         <br/>

         <label for="last name"><b>Whatsapp Number:</b></label>
         <input type="text" class="form-control" id="whatspp_number" name="whatspp_number" value="<?php echo $val['whatsapp_num']; ?>" required>
         <br/>

         <label for="last name"><b>URL:</b></label>
         <input type="text" class="form-control" id="url" name="url" value="<?php echo $val['url']; ?>" required>
         <br/>

         <label for="last name"><b>Age:</b></label>
         <input type="text" class="form-control" id="age" name="age" value="<?php echo $val['age']; ?>">
         <br/>
         
         <label for="last name"><b>Language:</b></label>
         <input type="text" class="form-control" id="lang" name="lang" value="<?php echo $val['language']; ?>">
         <br/>

    <label for="last name"><b>Origin:</b></label>

    <input type="text" class="form-control" id="origin" name="origin" value="<?php echo $val['origin']; ?>">

    <br/>


    <label for="last name"><b>Availability:</b></label>

    <input type="text" class="form-control" id="avbl" name="avbl" value="<?php echo $val['availability']; ?>">

    <br/>



    <!-- <label for="last name"><b>Booking Information:</b></label>

    <textarea name="book_infm" id="book_infm"  class="form-control"><?php //echo $val['book_infmn']; ?></textarea>

    <br/> -->


    <label for="last name"><b>About Profile:</b></label>

    <textarea name="abt_pro" id="abt_pro"  class="form-control"><?php echo $val['abt_profile']; ?></textarea>

    <br/>

    <script>
         CKEDITOR.replace('abt_pro');
    </script>


    
    <input type="hidden" name="upd_id" id="upd_id" value="<?php echo $val['id']; ?>" />

    <button type="submit" class="btn btn-primary" name="update" value="Update">Update</button>

  </div>

 <?php } ?>

  </form>

  

   

  </div>

  <!-- /.content-wrapper -->



 



