<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Add Post
      </h1>
      <ol class="breadcrumb">
         <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
         <li class="active">Add Post</li>
      </ol>
   </section>
   <?php //echo '<pre>';print_r($res);?>
   <form name="add_post" id="add_post" method="POST" action="<?php echo base_url('admin/add_profile'); ?>"  enctype="multipart/form-data"/>
      <div class="container">
         <label for="last name"><b>Name:</b></label>
         <input type="text" class="form-control" id="title"  name="title" value="" required>
         <br/>
         <label for="last name"><b>Description:</b></label>
         <input type="text" class="form-control" id="des" name="des" value="" required/>
         <br/> 
         <label for="last name"><b>Image:</b></label>
         <input type="file" name="pht[]" multiple/>  
         <br/>
         <label for="last name"><b>Alt title tag:</b></label>
         <input type="text" class="form-control" id="alt_title" name="alt_title" value="">
         <br/>
        
         <label for="last name"><b>Category:</b></label>
         <select name="cate[]" id="cate" class="form-control" multiple>
            <option value="">--Select--</option>
            <?php
               foreach($get_category as $get_cate_val)
               { 
               ?>
            <option value="<?php echo $get_cate_val['id']; ?>"><?php echo $get_cate_val['sub_cat_title']; ?></option>
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
            <option value="<?php echo $get_loc_val['id']; ?>"><?php echo $get_loc_val['sub_loc_title']; ?></option>
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
            <option value="<?php echo $get_st_val['id']; ?>"><?php echo $get_st_val['state_name']; ?></option>
            <?php } ?>
         </select>

         <br/>

        
         
         <label for="last name"><b>Profile Type:</b></label>
         <select name="pro_type" id="pro_type" class="form-control">
            <option value="">--Select--</option>
            <?php
               foreach($get_pro_types as $get_pro_types_val)
               { 
               ?>
            <option value="<?php echo $get_pro_types_val['pro_type']; ?>"><?php echo $get_pro_types_val['pro_type']; ?></option>
            <?php } ?>
         </select>
         <br/>

         <label for="last name"><b>Services:</b></label>
         <select name="services[]" id="services" class="form-control" multiple required>
            <option value="">--Select--</option>
            <?php
               
               foreach($get_services as $get_services_val)
               { 
               ?>
            <option value="<?php echo $get_services_val['id']; ?>"><?php echo $get_services_val['service']; ?></option>
            <?php } ?>
         </select>

         <br/>
         <label for="last name"><b>Ethencity:</b></label>
         <input type="text" class="form-control" id="ethencity" name="ethencity" value="" required>
         <br/>

         <label for="last name"><b>Sexuality:</b></label>
         <input type="text" class="form-control" id="sexuality" name="sexuality" value="" required>
         <br/>

         <label for="last name"><b>Gender:</b></label>
         <input type="text" class="form-control" id="gender" name="gender" value="" required>
         <br/>

         <label for="last name"><b>Body:</b></label>
         <input type="text" class="form-control" id="body" name="body" value="" required>
         <br/>

         <label for="last name"><b>Height:</b></label>
         <input type="text" class="form-control" id="ht" name="ht" value="" required>
         <br/>

         <label for="last name"><b>Dress size:</b></label>
         <input type="text" class="form-control" id="dres_size" name="dres_size" value="" required>
         <br/>

         <label for="last name"><b>Bust size:</b></label>
         <input type="text" class="form-control" id="bust_size" name="bust_size" value="" required>
         <br/>

         <label for="last name"><b>Drinking:</b></label>
         <input type="text" class="form-control" id="drink" name="drink" value="" required>
         <br/>

         <label for="last name"><b>Smoking:</b></label>
         <input type="text" class="form-control" id="smok" name="smok" value="" required>
         <br/>

         <label for="last name"><b>Whatsapp Number:</b></label>
         <input type="text" class="form-control" id="whatspp_number" name="whatspp_number" value="" required>
         <br/>

         <label for="last name"><b>URL:</b></label>
         <input type="text" class="form-control" id="url" name="url" value="" required>
         <br/>

         <label for="last name"><b>Age:</b></label>
         <input type="text" class="form-control" id="age" name="age" value="">
         <br/>
         
         <label for="last name"><b>Language:</b></label>
         <input type="text" class="form-control" id="lang" name="lang" value="">
         <br/>
         <label for="last name"><b>Origin:</b></label>
         <input type="text" class="form-control" id="origin" name="origin" value="">
         <br/>
         <label for="last name"><b>Availability:</b></label>
         <input type="text" class="form-control" id="avbl" name="avbl" value="">
         <br/>
         <!-- <label for="last name"><b>Booking Information:</b></label>
            <textarea name="book_infm" id="book_infm"  class="form-control"></textarea>
            
            <br/> -->
         <label for="last name"><b>About Profile:</b></label>
         <textarea name="abt_pro" id="abt_pro"  class="form-control"></textarea>
         <br/>
         <script>
            CKEDITOR.replace('abt_pro');
         </script>
         <button type="submit" class="btn btn-primary" name="submit" value="Add">Add Profile</button>
      </div>
   </form>
</div>
<!-- /.content-wrapper -->