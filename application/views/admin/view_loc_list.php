

  <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">

    <!-- Content Header (Page header) -->

    <section class="content-header">

      <h1>

        Location

        

      </h1>

      <ol class="breadcrumb">

        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>

        <li class="active">Location</li>

      </ol>

    </section>

    <h5 class="text-center"><?php echo $this->session->flashdata('msg'); ?></h5>

    <a href="<?php echo base_url(); ?>admin/add_location " style="float:right;">Add Location</a>

    <?php //echo '<pre>';print_r($res);?>

    <table id="example" class="table table-striped table-bordered" style="width:100%;padding-left:1%;">

        <thead>

            <tr>

                <th>Title</th>

                <th>Description</th>

                <th>Date</th>

                <th>Action</th>

            </tr>

        </thead>

        <tbody> 

            <?php foreach($res as $val) { ?>

            <tr>

                <td><?php echo $val['loc_title']; ?></td>

                <td><?php echo $val['loc_des']; ?></td>

                <td><?php echo $val['posted_date']; ?></td>

                <td><a href="<?php echo base_url(); ?>admin/edit_location/<?php echo $val['id']; ?>">Edit</a>/<a onclick="del_confirm('<?php echo $val['id']; ?>');" href="#">Delete</a></td>

            </tr>

            <?php } ?>

        </tbody>

        </table>   

  </div>

  <!-- /.content-wrapper -->



 <script>

   function del_confirm(val)

   {

         // alert(val);

       var con = confirm('Are you sure want to delete this Location?');

       if(con==true)

       {

           window.location.href="<?php echo base_url(); ?>admin/del_location/"+val;



       }else

       {



           return false;

       }  

   }

 </script>



