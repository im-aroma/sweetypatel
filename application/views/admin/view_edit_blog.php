<!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">

    <!-- Content Header (Page header) -->

    <section class="content-header">

      <h1>

        Edit Blog

        

      </h1>

      <ol class="breadcrumb">

        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>

        <li class="active">Edit Blog</li>

      </ol>

    </section>

     <?php 

           

           foreach($res as $val)

           { 

     ?>

    <form name="edit_blog" id="edit_blog" method="POST" action="<?php echo base_url()?>admin/upd_blog"  enctype="multipart/form-data"/>

    

    <div class="container">

  

    <label for="last name"><b>Title:</b></label>

    <input class="form-control" type="text"  name="title" value="<?php echo $val['blog_title']; ?>" required>

    <br/>



    <label for="last name"><b>Sub Blog Title:</b></label>

    <input class="form-control" type="text"  name="sub_blog_title" value="<?php echo $val['sub_blog_title']; ?>" required>

    <br/>



    <label for="last name"><b>Description:</b></label>

    <textarea name="cat_des" id="cat_des" rows="10" cols="80" class="form-control"><?php echo $val['blog_des']; ?></textarea>

     <script>

         CKEDITOR.replace('cat_des');

    </script>

    <br/>



    <label for="last name"><b>Blog Image:</b></label>

    <input type="file"  name="blo_img" value="">

    <img src="<?php echo base_url(); ?>uploads/blog/<?php echo $val['blog_img']; ?>" width="50" height="50" />

    <br/>





    <label for="last name"><b>Blog alt Title:</b></label>

    <input type="text"  name="blog_alt_title" value="<?php echo $val['img_alt_title']; ?>" class="form-control">

    <br/>



    <input type="hidden" name="upd_id" id="upd_id" value="<?php echo $val['id']; ?>" />

    <button type="submit" class="btn btn-default" name="submit" value="Update">Update</button>

  </div>

  </form>

  <?php } ?>

   

  </div>

  <!-- /.content-wrapper -->



 



