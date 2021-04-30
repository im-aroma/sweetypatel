 <footer class="main-footer">

    

    <strong>Copyright &copy; <?php echo date('Y'); ?> <a href="#">Mumbaibeauties</a></strong> All rights

    reserved.

  </footer>


</div>

<!-- jQuery 3 -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

<!-- Bootstrap 3.3.7 -->



<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js

"></script>




<script>

$(document).ready(function() {

    $('#example').DataTable();

});



$(document).on('click','#logout_open',function(){

         $('.user-footer').show(); 

});

$('.sidebar-toggle').on('click',function(){
      
      var togg_clsname = $('body').hasClass('sidebar-collapse');

      if(!togg_clsname)
      {
         $('body').addClass('sidebar-collapse');
      }
      else 
      {
         $('body').removeClass('sidebar-collapse');
      }  
});

</script>

<script>

    $('#pg_id').on('change',function(){

          var pg_val = $('#pg_id').val();

          if(pg_val == 12)

          {

              $.ajax({

                    type:"POST",

                    url:"<?php echo base_url('admin/ajax_loc'); ?>",

                    success:function(res)

                    {

                       $('#tit').html(res);

                    } 

              })

          }

          else if(pg_val == 11)

          {

              $.ajax({

                   type:"POST",

                   url:"<?php echo base_url('admin/ajax_profile'); ?>",

                   success:function(res)

                   {

                      $('#tit').html(res);
                    

                   }

              })

          }

          else if(pg_val == 16)

          {

             //alert('hello');

             $.ajax({

                 type:"POST",

                 url:"<?php echo base_url('admin/ajax_catgeory'); ?>",

                 success:function(res)

                 {

                    $('#tit').html(res);

                 }



             });   

          }else if(pg_val == 14)

		      {

			  //alert('hello');

			    $.ajax({

                 type:"POST",

                 url:"<?php echo base_url('admin/ajax_video'); ?>",

                 success:function(res)

                 {

                    $('#tit').html(res);


                 }



             });

			  

		        }
            else if(pg_val == 15)
            {

                $.ajax({
                      type:"POST",

                      url:"<?php echo base_url('admin/ajax_blog'); ?>",

                      success:function(res)
                      {
                         $('#tit').html(res);
                        
                      }
                })

            }
          else

          {

             $('#title_id').hide();

             $('#label_title').hide();

          }

    });

    $('#submit').click(function(){
    var files = $('input#loc_img')[0].files;
    if(files.length > 2)
    {
        //console.log('hello');
        $('#err_fil_msg').text('Please upload maximum 2 files');
        return false;
    }
    else 
    {
         $('#err_fil_msg').text('');
         return true;
    }  
});

 </script>



</body>

</html>

