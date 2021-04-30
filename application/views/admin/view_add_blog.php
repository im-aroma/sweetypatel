<!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">

    <!-- Content Header (Page header) -->

    <section class="content-header">

      <h1>

        Add Blog

        

      </h1>

      <ol class="breadcrumb">

        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>

        <li class="active">Add Blog</li>

      </ol>

    </section>

     <?php //echo '<pre>';print_r($res);?>

    <form name="add_blog" id="add_blog" method="POST" action="<?php echo base_url()?>admin/add_blog"  enctype="multipart/form-data"/>

    

    <div class="container">

  

    <label for="last name"><b>Title:</b></label>

    <input class="form-control" type="text"  name="title" value="" required>

    <br/>



    <label for="last name"><b>Sub Blog Title:</b></label>

    <input class="form-control" type="text"  name="sub_blog_title" value="" required>

    <br/>



    <label for="last name"><b>Description:</b></label>

    <input type="text" name="cat_des"  id="des" class="form-control" value="" required>

     <script>

         CKEDITOR.replace('des');

    </script>

    <br/>



    <label for="last name"><b>Blog Image:</b></label>

    <input type="file"  name="blo_img" value="">

    <br/>





    <label for="last name"><b>Blog alt Title:</b></label>

    <input type="text"  name="blog_alt_title" value="" class="form-control">

    <br/>



    

    <button type="submit" class="btn btn-default" name="submit" value="Add">Add</button>

  </div>

  </form>

  

   

  </div>

  <!-- /.content-wrapper -->



 



