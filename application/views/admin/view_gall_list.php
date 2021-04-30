

  <!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">

    <!-- Content Header (Page header) -->

    <section class="content-header">

      <h1>

        Gallery Images

        

      </h1>

      <ol class="breadcrumb">

        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>

        <li class="active">Gallery Images</li>

      </ol>

    </section>

    <h5 class="text-center"><?php echo $this->session->flashdata('msg'); ?></h5>

    <br/>

    <form name="gal_img" id="gal_img" action="<?php echo base_url('Admin/upd_gal'); ?>" method="POST" />
    <table id="example" class="table table-striped table-bordered" style="width:100%;padding-left:1%;">

        <thead>

            <tr>

                <th style="width:5%;">#</th>

                <th>Title</th>

                <th>Profile Images</th>

                <th>Status</th>

            </tr>

        </thead>

        <tbody> 

            <?php 

              // echo '<pre>';print_r($res); 

               foreach($res as $val) { 

            ?>

            <tr>

                <td style="width:5%;"><input type="checkbox" name='prof_id[]' value="<?php echo $val['pro_id']; ?>"></td>

                <td><?php echo $val['profile_title']; ?></td>

                <td><img src="<?php echo base_url(); ?>uploads/profile/<?php echo $val['gal_img']; ?>"  width="50" height="50"/></td>

                <td><?php if($val['status']==0) { ?>InActive<?php  } else { ?>Active<?php } ?></td>

            </tr>

            <?php } ?>

        </tbody>
          
        </table> 

         <input type="submit" name="gal_submit" id="gal_submit" value="Submit">
         </form>

  </div>

  <!-- /.content-wrapper -->



 <script>

   function del_confirm(val)

   {

         // alert(val);

       var con = confirm('Are you sure want to delete this Post?');

       if(con==true)

       {

           window.location.href="<?php echo base_url(); ?>admin/del/"+val;



       }else

       {



           return false;

       }  

   }

 </script>



