

  <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">

    <!-- Content Header (Page header) -->

    <section class="content-header">

      <h1>

        Reviews

        

      </h1>

      <ol class="breadcrumb">

        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>

        <li class="active">Reviews</li>

      </ol>

    </section>

    <h5 class="text-center"><?php echo $this->session->flashdata('msg'); ?></h5>

   <select name="profile" id="profile">
       
       <option value="">--Select--</option>
       
       <?php
           
           foreach($pro as $val_pro)
           {
       
       ?>
       <option value="<?php echo $val_pro['id']; ?>"><?php echo $val_pro['title']; ?></option>
       
       <?php } ?>
       <script>
           document.getElementById('profile').value="<?php echo $pro_id; ?>";
       </script>
   </select>

    <table id="example" class="table table-striped table-bordered" style="width:100%;padding-left:1%;">

        <thead>

            <tr>

                

                <th>Name</th>

                <th>Posted Date</th>

                <th>Action</th>

            </tr>

        </thead>

        <tbody>

          

            <?php 

            foreach($res as $val) 

            { 

            ?>

            <tr>

               

                <td><?php echo $val['name']; ?></td>

                <td><?php echo $val['created_at']; ?></td>

                <td><a href="<?php echo base_url(); ?>admin/edit_reviews/<?php echo $val['id']; ?>">Edit</a>/<a onclick="del_confirm('<?php echo $val['id']; ?>');" href="#">Delete</a></td>

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

       var con = confirm('Are you sure want to delete this Review?');

       if(con==true)

       {

           window.location.href="<?php echo base_url(); ?>admin/del_review/"+val;



       }else

       {



           return false;

       }  

   }
   
   $('#profile').on('change',function()
   {
        var pro_val = $('#profile').val();     
        window.location.href="<?php echo base_url('admin/reviews/'); ?>"+pro_val;
   });

 </script>



